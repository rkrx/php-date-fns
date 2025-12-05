<?php

namespace DateFns\Groups;

use DateTimeImmutable;
use DateTimeInterface;
use RuntimeException;

trait SecondHelpers {
	/**
	 * Add the specified number of seconds to the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $amount
	 * @return DateTimeImmutable
	 */
	public static function addSeconds($date, int $amount): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$modified = $date->modify(($amount >= 0 ? '+' : '') . $amount . ' seconds');
		if($modified === false) {
			throw new RuntimeException('Invalid date modification');
		}

		return $modified;
	}

	/**
	 * Get the number of seconds between the given dates.
	 *
	 * @param DateTimeInterface|string|int|float $laterDate
	 * @param DateTimeInterface|string|int|float $earlierDate
	 * @param array{roundingMethod?: 'floor'|'ceil'|'round'} $options
	 * @return int
	 */
	public static function differenceInSeconds($laterDate, $earlierDate, array $options = []): int {
		$later = self::ensureDateTime($laterDate);
		$earlier = self::ensureDateTime($earlierDate);

		$diff = (float) $later->format('U.u') - (float) $earlier->format('U.u');
		$seconds = $diff / 1;

		return self::roundSeconds($seconds, $options['roundingMethod'] ?? null);
	}

	/**
	 * Return the end of a second for the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return DateTimeImmutable
	 */
	public static function endOfSecond($date): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->setTime(
			(int) $date->format('H'),
			(int) $date->format('i'),
			(int) $date->format('s'),
			999000
		);
	}

	/**
	 * Get the seconds of the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return int
	 */
	public static function getSeconds($date): int {
		$date = self::ensureDateTime($date);

		return (int) $date->format('s');
	}

	/**
	 * Are the given dates in the same second?
	 *
	 * @param DateTimeInterface|string|int|float $dateLeft
	 * @param DateTimeInterface|string|int|float $dateRight
	 * @return bool
	 */
	public static function isSameSecond($dateLeft, $dateRight): bool {
		$startLeft = self::startOfSecond($dateLeft);
		$startRight = self::startOfSecond($dateRight);

		return $startLeft == $startRight;
	}

	/**
	 * Is the given date in the same second as now?
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return bool
	 */
	public static function isThisSecond($date): bool {
		return self::isSameSecond($date, new DateTimeImmutable());
	}

	/**
	 * Set the seconds to the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $seconds
	 * @return DateTimeImmutable
	 */
	public static function setSeconds($date, int $seconds): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->setTime(
			(int) $date->format('H'),
			(int) $date->format('i'),
			$seconds,
			(int) $date->format('u')
		);
	}

	/**
	 * Return the start of a second for the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return DateTimeImmutable
	 */
	public static function startOfSecond($date): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->setTime(
			(int) $date->format('H'),
			(int) $date->format('i'),
			(int) $date->format('s'),
			0
		);
	}

	private static function roundSeconds(float $value, ?string $method): int {
		return match ($method) {
			'floor' => (int) floor($value),
			'ceil' => (int) ceil($value),
			'round' => (int) round($value),
			default => $value >= 0 ? (int) floor($value) : (int) ceil($value),
		};
	}
}
