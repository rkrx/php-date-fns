<?php

namespace DateFns\Groups;

use DateTimeImmutable;
use DateTimeInterface;

trait WeekdayHelpers {
	/**
	 * Get the day of the week of the given date (0 = Sunday).
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return int
	 */
	public static function getDay(DateTimeInterface|int|float|string|null $date): int {
		$date = self::ensureDateTime($date);

		return (int) $date->format('w');
	}

	public static function isFriday(DateTimeInterface|int|float|string|null $date): bool {
		return self::getISODay($date) === 5;
	}

	public static function isMonday(DateTimeInterface|int|float|string|null $date): bool {
		return self::getISODay($date) === 1;
	}

	/**
	 * Get ISO day of week (1 = Monday, 7 = Sunday).
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return int
	 */
	public static function getISODay(DateTimeInterface|int|float|string|null $date): int {
		$date = self::ensureDateTime($date);

		return (int) $date->format('N');
	}

	public static function isSaturday(DateTimeInterface|int|float|string|null $date): bool {
		return self::getISODay($date) === 6;
	}

	public static function isSunday(DateTimeInterface|int|float|string|null $date): bool {
		return self::getISODay($date) === 7;
	}

	public static function isThursday(DateTimeInterface|int|float|string|null $date): bool {
		return self::getISODay($date) === 4;
	}

	public static function isTuesday(DateTimeInterface|int|float|string|null $date): bool {
		return self::getISODay($date) === 2;
	}

	public static function isWednesday(DateTimeInterface|int|float|string|null $date): bool {
		return self::getISODay($date) === 3;
	}

	public static function isWeekend(DateTimeInterface|int|float|string|null $date): bool {
		$day = self::getISODay($date);

		return $day === 6 || $day === 7;
	}

	/**
	 * Set the day of the week (0 = Sunday) to the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $day
	 * @return DateTimeImmutable
	 */
	public static function setDay(DateTimeInterface|int|float|string|null $date, int $day): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$current = (int) $date->format('w');
		$diff = $day - $current;

		return $date->modify(($diff >= 0 ? '+' : '') . $diff . ' days');
	}

	/**
	 * Set the ISO day of the week (1 = Monday, 7 = Sunday).
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $isoDay
	 * @return DateTimeImmutable
	 */
	public static function setISODay(DateTimeInterface|int|float|string|null $date, int $isoDay): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$current = (int) $date->format('N');
		$diff = $isoDay - $current;

		return $date->modify(($diff >= 0 ? '+' : '') . $diff . ' days');
	}

	/**
	 * Helpers to move to next/previous weekday or specific days.
	 */
	public static function nextDay(DateTimeInterface|int|float|string|null $date, int $day): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$current = (int) $date->format('w');
		$diff = ($day + 7 - $current) % 7;
		$diff = $diff === 0 ? 7 : $diff;

		return $date->modify('+' . $diff . ' days');
	}

	public static function previousDay(DateTimeInterface|int|float|string|null $date, int $day): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$current = (int) $date->format('w');
		$diff = ($current + 7 - $day) % 7;
		$diff = $diff === 0 ? 7 : $diff;

		return $date->modify('-' . $diff . ' days');
	}

	public static function nextFriday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		return self::nextDay($date, 5);
	}

	public static function nextMonday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		return self::nextDay($date, 1);
	}

	public static function nextSaturday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		return self::nextDay($date, 6);
	}

	public static function nextSunday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		return self::nextDay($date, 0);
	}

	public static function nextThursday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		return self::nextDay($date, 4);
	}

	public static function nextTuesday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		return self::nextDay($date, 2);
	}

	public static function nextWednesday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		return self::nextDay($date, 3);
	}

	public static function previousFriday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		return self::previousDay($date, 5);
	}

	public static function previousMonday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		return self::previousDay($date, 1);
	}

	public static function previousSaturday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		return self::previousDay($date, 6);
	}

	public static function previousSunday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		return self::previousDay($date, 0);
	}

	public static function previousThursday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		return self::previousDay($date, 4);
	}

	public static function previousTuesday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		return self::previousDay($date, 2);
	}

	public static function previousWednesday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		return self::previousDay($date, 3);
	}
}
