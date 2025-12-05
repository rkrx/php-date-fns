<?php

namespace DateFns\Groups;

use DateTimeImmutable;
use DateTimeInterface;
use InvalidArgumentException;
use RuntimeException;

trait HourHelpers {
	/**
	 * Add the specified number of hours to the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $amount
	 * @return DateTimeImmutable
	 */
	public static function addHours($date, int $amount): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$modified = $date->modify(($amount >= 0 ? '+' : '') . $amount . ' hours');
		if($modified === false) {
			throw new RuntimeException('Invalid date modification');
		}

		return $modified;
	}

	/**
	 * Get the number of hours between the given dates.
	 *
	 * @param DateTimeInterface|string|int|float $laterDate
	 * @param DateTimeInterface|string|int|float $earlierDate
	 * @param array{roundingMethod?: 'floor'|'ceil'|'round'} $options
	 * @return int
	 */
	public static function differenceInHours($laterDate, $earlierDate, array $options = []): int {
		$later = self::ensureDateTime($laterDate);
		$earlier = self::ensureDateTime($earlierDate);

		$diffMs = ((float) $later->format('U.u') - (float) $earlier->format('U.u')) * 1000;
		$hours = $diffMs / 3600000; // ms in hour

		return self::roundHours($hours, $options['roundingMethod'] ?? null);
	}

	/**
	 * Return the end of an hour for the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return DateTimeImmutable
	 */
	public static function endOfHour($date): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->setTime((int) $date->format('H'), 59, 59, 999000);
	}

	/**
	 * Get the hours of the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return int
	 */
	public static function getHours($date): int {
		$date = self::ensureDateTime($date);

		return (int) $date->format('G'); // 0-23
	}

	/**
	 * Are the given dates in the same hour?
	 *
	 * @param DateTimeInterface|string|int|float $dateLeft
	 * @param DateTimeInterface|string|int|float $dateRight
	 * @return bool
	 */
	public static function isSameHour($dateLeft, $dateRight): bool {
		$startLeft = self::startOfHour($dateLeft);
		$startRight = self::startOfHour($dateRight);

		return $startLeft == $startRight;
	}

	/**
	 * Is the given date in the same hour as now?
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return bool
	 */
	public static function isThisHour($date): bool {
		return self::isSameHour($date, new DateTimeImmutable());
	}

	/**
	 * Round the given date to the nearest hour (or increment).
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param array{nearestTo?: int, roundingMethod?: 'floor'|'ceil'|'round'} $options
	 * @return DateTimeImmutable
	 */
	public static function roundToNearestHours($date, array $options = []): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$nearestTo = $options['nearestTo'] ?? 1;

		if($nearestTo < 1 || $nearestTo > 12) {
			throw new InvalidArgumentException('nearestTo must be between 1 and 12.');
		}

		$fractionalMinutes = (int) $date->format('i') / 60;
		$fractionalSeconds = (int) $date->format('s') / 3600;
		$fractionalMilliseconds = (int) $date->format('v') / 1000 / 3600;
		$hours = (int) $date->format('G') + $fractionalMinutes + $fractionalSeconds + $fractionalMilliseconds;

		$roundedHours = self::roundHours($hours / $nearestTo, $options['roundingMethod'] ?? 'round') * $nearestTo;

		return $date->setTime((int) $roundedHours, 0, 0, 0);
	}

	/**
	 * Set the hours to the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $hours
	 * @return DateTimeImmutable
	 */
	public static function setHours($date, int $hours): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->setTime($hours, (int) $date->format('i'), (int) $date->format('s'), (int) $date->format('u'));
	}

	/**
	 * Return the start of an hour for the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return DateTimeImmutable
	 */
	public static function startOfHour($date): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->setTime((int) $date->format('H'), 0, 0, 0);
	}

	/**
	 * Subtract the specified number of hours from the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $amount
	 * @return DateTimeImmutable
	 */
	public static function subHours($date, int $amount): DateTimeImmutable {
		return self::addHours($date, -$amount);
	}

	private static function roundHours(float $value, ?string $method): int {
		return match ($method) {
			'floor' => (int) floor($value),
			'ceil' => (int) ceil($value),
			'round' => (int) round($value),
			default => $value >= 0 ? (int) floor($value) : (int) ceil($value),
		};
	}
}
