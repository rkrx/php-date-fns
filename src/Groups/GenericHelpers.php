<?php

namespace DateFns\Groups;

use DateTime;
use DateTimeImmutable;
use DateTimeInterface;
use InvalidArgumentException;
use RuntimeException;

trait GenericHelpers {
	/**
	 * Constructs a date using the reference date and the given value.
	 *
	 * @param DateTimeInterface|string|int|null|callable $referenceDate
	 * @param DateTimeInterface|string|int $value
	 */
	public static function constructFrom($referenceDate, $value): DateTimeImmutable|DateTimeInterface {
		// Context function (callable) support
		if(is_callable($referenceDate)) {
			$result = $referenceDate($value);
			if(
				!$result instanceof DateTimeInterface
				&& !is_int($result)
				&& !is_float($result)
				&& !is_string($result)
				&& $result !== null
			) {
				throw new InvalidArgumentException('Reference callable must return a date-compatible value.');
			}

			return self::ensureDateTime($result);
		}

		// Class name support
		if(is_string($referenceDate) && class_exists($referenceDate)) {
			return self::createFromClassAndValue($referenceDate, $value);
		}

		if($referenceDate instanceof DateTimeInterface) {
			return self::createFromClassAndValue($referenceDate::class, $value);
		}

		// Fallback to DateTimeImmutable
		return self::createFromClassAndValue(DateTimeImmutable::class, $value);
	}

	/**
	 * Constructs the current date using the reference constructor.
	 *
	 * @param DateTimeInterface|string|int|null|callable $referenceDate
	 */
	public static function constructNow($referenceDate): DateTimeImmutable|DateTime {
		return self::constructFrom($referenceDate, new DateTimeImmutable());
	}

	/**
	 * Transpose the given date to the provided constructor/context.
	 *
	 * @param DateTimeInterface $date
	 * @param DateTimeInterface|string|callable $constructor
	 */
	public static function transpose(DateTimeInterface $date, $constructor): DateTimeInterface {
		// Start from epoch in the target constructor/context
		/** @var DateTimeImmutable|DateTime $target */
		$target = self::constructFrom($constructor, new DateTimeImmutable('@0'));

		$target = $target->setDate(
			(int) $date->format('Y'),
			(int) $date->format('n'),
			(int) $date->format('j')
		)->setTime(
			(int) $date->format('G'),
			(int) $date->format('i'),
			(int) $date->format('s'),
			(int) $date->format('u')
		);

		return $target;
	}

	/**
	 * @param string $class
	 * @param DateTimeInterface|string|int|float $value
	 */
	private static function createFromClassAndValue(string $class, $value): DateTimeImmutable|DateTime {
		$base = self::toDateTimeImmutable($value);
		$timezone = $base->getTimezone();
		$formatted = $base->format('Y-m-d H:i:s.u');

		if(is_subclass_of($class, DateTimeImmutable::class) || $class === DateTimeImmutable::class) {
			$instance = $class::createFromFormat('Y-m-d H:i:s.u', $formatted, $timezone);
			if($instance === false) {
				throw new RuntimeException('Failed to construct date from value');
			}

			return $instance;
		}

		if(is_subclass_of($class, DateTime::class) || $class === DateTime::class) {
			$mutable = DateTime::createFromFormat('Y-m-d H:i:s.u', $formatted, $timezone);
			if($mutable === false) {
				throw new RuntimeException('Failed to construct date from value');
			}
			if($class === DateTime::class) {
				return $mutable;
			}

			return new $class($mutable->format('Y-m-d H:i:s.u'), $mutable->getTimezone());
		}

		// Unknown class, fall back to immutable
		return $base;
	}

	/**
	 * Normalize a value to DateTimeImmutable.
	 *
	 * @param DateTimeInterface|string|int|float $value
	 */
	private static function toDateTimeImmutable(DateTimeInterface|int|float|string $value): DateTimeImmutable {
		if($value instanceof DateTimeImmutable) {
			return $value;
		}

		if($value instanceof DateTime) {
			return DateTimeImmutable::createFromMutable($value);
		}

		return self::ensureDateTime($value);
	}
}
