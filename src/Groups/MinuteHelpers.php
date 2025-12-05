<?php

namespace DateFns\Groups;

use DateTimeImmutable;
use DateTimeInterface;
use InvalidArgumentException;
use RuntimeException;

trait MinuteHelpers {
	/**
	 * Add the specified number of minutes to the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $amount
	 * @return DateTimeImmutable
	 */
	public static function addMinutes($date, int $amount): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$modified = $date->modify(($amount >= 0 ? '+' : '') . $amount . ' minutes');
		if($modified === false) {
			throw new RuntimeException('Invalid date modification');
		}

		return $modified;
	}

	/**
	 * Get the number of minutes between the given dates.
	 *
	 * @param DateTimeInterface|string|int|float $dateLeft
	 * @param DateTimeInterface|string|int|float $dateRight
	 * @param array{roundingMethod?: 'floor'|'ceil'|'round'} $options
	 * @return int
	 */
	public static function differenceInMinutes($dateLeft, $dateRight, array $options = []): int {
		$left = self::ensureDateTime($dateLeft);
		$right = self::ensureDateTime($dateRight);

		$diffMs = ((float) $left->format('U.u') - (float) $right->format('U.u')) * 1000;
		$minutes = $diffMs / 60000;

		return self::roundWithMethod($minutes, $options['roundingMethod'] ?? null);
	}

	/**
	 * Get the minutes of the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return int
	 */
	public static function getMinutes($date): int {
		$date = self::ensureDateTime($date);

		return (int) $date->format('i');
	}

	/**
	 * Round the given date to the nearest minute (or given increment).
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param array{nearestTo?: int, roundingMethod?: 'floor'|'ceil'|'round'} $options
	 * @return DateTimeImmutable
	 */
	public static function roundToNearestMinutes($date, array $options = []): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$nearestTo = $options['nearestTo'] ?? 1;

		if($nearestTo < 1 || $nearestTo > 30) {
			throw new InvalidArgumentException('nearestTo must be between 1 and 30.');
		}

		$secondsFraction = (int) $date->format('s') / 60;
		$millisecondsFraction = ((int) $date->format('v')) / 1000 / 60;
		$minutes = (int) $date->format('i') + $secondsFraction + $millisecondsFraction;

		$roundedMinutes = self::roundWithMethod($minutes / $nearestTo, $options['roundingMethod'] ?? 'round') * $nearestTo;

		return $date->setTime((int) $date->format('H'), (int) $roundedMinutes, 0, 0);
	}

	/**
	 * Set the minutes to the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $minutes
	 * @return DateTimeImmutable
	 */
	public static function setMinutes($date, int $minutes): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->setTime((int) $date->format('H'), $minutes, (int) $date->format('s'), (int) $date->format('u'));
	}

	/**
	 * Return the start of a minute for the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return DateTimeImmutable
	 */
	public static function startOfMinute($date): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->setTime((int) $date->format('H'), (int) $date->format('i'), 0, 0);
	}

	/**
	 * Return the end of a minute for the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return DateTimeImmutable
	 */
	public static function endOfMinute($date): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->setTime((int) $date->format('H'), (int) $date->format('i'), 59, 999000);
	}

	/**
	 * Are the given dates in the same second?
	 *
	 * @param DateTimeInterface|string|int|float $dateLeft
	 * @param DateTimeInterface|string|int|float $dateRight
	 * @return bool
	 */
	public static function isSameMinute($dateLeft, $dateRight): bool {
		$startLeft = self::startOfMinute($dateLeft);
		$startRight = self::startOfMinute($dateRight);

		return $startLeft == $startRight;
	}

	/**
	 * Is the given date in the same minute as now?
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return bool
	 */
	public static function isThisMinute($date): bool {
		return self::isSameMinute($date, new DateTimeImmutable());
	}

	/**
	 * Subtract the specified number of minutes from the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $amount
	 * @return DateTimeImmutable
	 */
	public static function subMinutes($date, int $amount): DateTimeImmutable {
		return self::addMinutes($date, -$amount);
	}

	private static function roundWithMethod(float $value, ?string $method): int {
		return match ($method) {
			'floor' => (int) floor($value),
			'ceil' => (int) ceil($value),
			'round' => (int) round($value),
			default => $value >= 0 ? (int) floor($value) : (int) ceil($value),
		};
	}
}
