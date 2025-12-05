<?php

namespace DateFns\Groups;

use DateTimeImmutable;
use DateTimeInterface;
use RuntimeException;

trait WeekHelpers {
	/**
	 * Add the specified number of weeks to the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $amount
	 * @return DateTimeImmutable
	 */
	public static function addWeeks($date, int $amount): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$days = $amount * 7;
		$modified = $date->modify(($days >= 0 ? '+' : '') . $days . ' days');
		if($modified === false) {
			throw new RuntimeException('Invalid date modification');
		}

		return $modified;
	}

	/**
	 * Get the number of calendar weeks between the given dates.
	 *
	 * @param DateTimeInterface|string|int|float $laterDate
	 * @param DateTimeInterface|string|int|float $earlierDate
	 * @param array{weekStartsOn?: int} $options
	 * @return int
	 */
	public static function differenceInCalendarWeeks($laterDate, $earlierDate, array $options = []): int {
		$startLater = self::startOfWeek($laterDate, $options);
		$startEarlier = self::startOfWeek($earlierDate, $options);

		$diffDays = self::differenceInCalendarDays($startLater, $startEarlier);

		return self::truncateToZero($diffDays / 7);
	}

	/**
	 * Get the number of weeks between the given dates.
	 *
	 * @param DateTimeInterface|string|int|float $laterDate
	 * @param DateTimeInterface|string|int|float $earlierDate
	 * @param array{roundingMethod?: 'floor'|'ceil'|'round'} $options
	 * @return int
	 */
	public static function differenceInWeeks($laterDate, $earlierDate, array $options = []): int {
		$later = self::ensureDateTime($laterDate);
		$earlier = self::ensureDateTime($earlierDate);

		$diffMs = ((float) $later->format('U.u') - (float) $earlier->format('U.u')) * 1000;
		$weeks = $diffMs / 604800000; // ms in week

		$roundingMethod = $options['roundingMethod'] ?? null;
		if(!is_string($roundingMethod)) {
			$roundingMethod = null;
		}

		return self::roundWeeks($weeks, $roundingMethod);
	}

	/**
	 * Return the end of a week for the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param array{weekStartsOn?: int} $options
	 * @return DateTimeImmutable
	 */
	public static function endOfWeek($date, array $options = []): DateTimeImmutable {
		$start = self::startOfWeek($date, $options);

		return $start->modify('+6 days')->setTime(23, 59, 59, 999000);
	}

	/**
	 * Return the week number for the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param array{weekStartsOn?: int, firstWeekContainsDate?: int} $options
	 * @return int
	 */
	public static function getWeek($date, array $options = []): int {
		$weekStartsOn = self::resolveWeekStartsOn($options);
		$firstWeekContainsDate = $options['firstWeekContainsDate'] ?? (self::getDefaultOptions()['firstWeekContainsDate'] ?? 1);
		if(!is_int($firstWeekContainsDate)) {
			$firstWeekContainsDate = is_numeric($firstWeekContainsDate) ? (int) $firstWeekContainsDate : 1;
		}
		/** @var int $firstWeekContainsDate */

		$date = self::ensureDateTime($date);
		$startOfTargetWeek = self::startOfWeek($date, ['weekStartsOn' => $weekStartsOn]);

		$firstWeekDate = $date->setDate((int) $date->format('Y'), 1, $firstWeekContainsDate);
		$startOfFirstWeek = self::startOfWeek($firstWeekDate, ['weekStartsOn' => $weekStartsOn]);

		$diffDays = self::differenceInCalendarDays($startOfTargetWeek, $startOfFirstWeek);

		return (int) floor($diffDays / 7) + 1;
	}

	/**
	 * Get the week of the month of the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param array{weekStartsOn?: int} $options
	 * @return int
	 */
	public static function getWeekOfMonth($date, array $options = []): int {
		$weekStartsOn = self::resolveWeekStartsOn($options);
		$date = self::ensureDateTime($date);

		$startOfTargetWeek = self::startOfWeek($date, ['weekStartsOn' => $weekStartsOn]);
		$startOfMonth = $date->setDate((int) $date->format('Y'), (int) $date->format('n'), 1)->setTime(0, 0, 0, 0);
		$startOfFirstWeek = self::startOfWeek($startOfMonth, ['weekStartsOn' => $weekStartsOn]);

		$diffDays = self::differenceInCalendarDays($startOfTargetWeek, $startOfFirstWeek);

		return (int) floor($diffDays / 7) + 1;
	}

	/**
	 * Get the number of weeks in the month of the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param array{weekStartsOn?: int} $options
	 * @return int
	 */
	public static function getWeeksInMonth($date, array $options = []): int {
		$weekStartsOn = self::resolveWeekStartsOn($options);
		$date = self::ensureDateTime($date);

		$startOfMonth = $date->setDate((int) $date->format('Y'), (int) $date->format('n'), 1)->setTime(0, 0, 0, 0);
		$endOfMonth = $date->modify('last day of this month')->setTime(23, 59, 59, 999000);

		$startWeek = self::startOfWeek($startOfMonth, ['weekStartsOn' => $weekStartsOn]);
		$endWeek = self::endOfWeek($endOfMonth, ['weekStartsOn' => $weekStartsOn]);

		$diffDays = self::differenceInCalendarDays($endWeek, $startWeek);

		return (int) floor($diffDays / 7) + 1;
	}

	/**
	 * Are the given dates in the same week?
	 *
	 * @param DateTimeInterface|string|int|float $dateLeft
	 * @param DateTimeInterface|string|int|float $dateRight
	 * @param array{weekStartsOn?: int} $options
	 * @return bool
	 */
	public static function isSameWeek($dateLeft, $dateRight, array $options = []): bool {
		$weekLeft = self::startOfWeek($dateLeft, $options);
		$weekRight = self::startOfWeek($dateRight, $options);

		return $weekLeft == $weekRight;
	}

	/**
	 * Is the given date in the same week as now?
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param array{weekStartsOn?: int} $options
	 * @return bool
	 */
	public static function isThisWeek($date, array $options = []): bool {
		return self::isSameWeek($date, new DateTimeImmutable(), $options);
	}

	/**
	 * Return the last day of a week for the given date (at start of the day).
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param array{weekStartsOn?: int} $options
	 * @return DateTimeImmutable
	 */
	public static function lastDayOfWeek($date, array $options = []): DateTimeImmutable {
		$start = self::startOfWeek($date, $options);

		return $start->modify('+6 days')->setTime(0, 0, 0, 0);
	}

	/**
	 * Set the week number to the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $week
	 * @param array{weekStartsOn?: int, firstWeekContainsDate?: int} $options
	 * @return DateTimeImmutable
	 */
	public static function setWeek($date, int $week, array $options = []): DateTimeImmutable {
		$currentWeek = self::getWeek($date, $options);
		$diff = $week - $currentWeek;

		return self::addWeeks($date, $diff);
	}

	/**
	 * Return the start of a week for the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param array{weekStartsOn?: int} $options
	 * @return DateTimeImmutable
	 */
	public static function startOfWeek($date, array $options = []): DateTimeImmutable {
		$weekStartsOn = self::resolveWeekStartsOn($options);
		$date = self::ensureDateTime($date);
		$day = (int) $date->format('w');
		$diff = ($day < $weekStartsOn ? 7 : 0) + $day - $weekStartsOn;
		return $date->modify("-$diff days")->setTime(0, 0, 0, 0);
	}

	/**
	 * Subtract the specified number of weeks from the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $amount
	 * @return DateTimeImmutable
	 */
	public static function subWeeks($date, int $amount): DateTimeImmutable {
		return self::addWeeks($date, -$amount);
	}

	/**
	 * @param array{weekStartsOn?: int, firstWeekContainsDate?: int} $options
	 */
	private static function resolveWeekStartsOn(array $options): int {
		$defaultOptions = self::getDefaultOptions();
		$weekStartsOn = $options['weekStartsOn'] ?? ($defaultOptions['weekStartsOn'] ?? 0);
		if(!is_int($weekStartsOn)) {
			if(is_numeric($weekStartsOn)) {
				$weekStartsOn = (int) $weekStartsOn;
			} else {
				return 0;
			}
		}
		if($weekStartsOn < 0 || $weekStartsOn > 6) {
			$weekStartsOn = 0;
		}

		return $weekStartsOn;
	}

	private static function roundWeeks(float $value, ?string $method): int {
		return match ($method) {
			'floor' => (int) floor($value),
			'ceil' => (int) ceil($value),
			'round' => (int) round($value),
			default => $value >= 0 ? (int) floor($value) : (int) ceil($value),
		};
	}
}
