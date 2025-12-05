<?php

namespace DateFns\Groups;

use DateTimeImmutable;
use DateTimeInterface;
use RuntimeException;

trait DayHelpers {
	/**
	 * Add the specified number of days to the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $amount
	 * @return DateTimeImmutable
	 */
	public static function addDays($date, int $amount): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		if($amount === 0) {
			return $date;
		}

		$modified = $date->modify(($amount >= 0 ? '+' : '') . $amount . ' days');
		if($modified === false) {
			throw new RuntimeException('Invalid date modification');
		}

		return $modified;
	}

	/**
	 * Get the number of calendar days between the given dates.
	 *
	 * @param DateTimeInterface|string|int|float $laterDate
	 * @param DateTimeInterface|string|int|float $earlierDate
	 * @return int
	 */
	public static function differenceInCalendarDays($laterDate, $earlierDate): int {
		$later = self::ensureDateTime($laterDate)->setTime(0, 0, 0, 0);
		$earlier = self::ensureDateTime($earlierDate)->setTime(0, 0, 0, 0);

		$diffSeconds = (float) $later->format('U') - (float) $earlier->format('U');

		return (int) round($diffSeconds / 86400);
	}

	/**
	 * Get the number of days between the given dates.
	 *
	 * @param DateTimeInterface|string|int|float $laterDate
	 * @param DateTimeInterface|string|int|float $earlierDate
	 * @return int
	 */
	public static function differenceInDays($laterDate, $earlierDate): int {
		$later = self::ensureDateTime($laterDate);
		$earlier = self::ensureDateTime($earlierDate);

		$diffSeconds = (float) $later->format('U.u') - (float) $earlier->format('U.u');

		return self::truncateToZero($diffSeconds / 86400);
	}

	/**
	 * Return the end of a day for the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return DateTimeImmutable
	 */
	public static function endOfDay($date): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->setTime(23, 59, 59, 999000);
	}

	/**
	 * Get the day of the year for the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return int
	 */
	public static function getDayOfYear($date): int {
		$date = self::ensureDateTime($date);

		return (int) $date->format('z') + 1;
	}

	/**
	 * Are the given dates in the same day?
	 *
	 * @param DateTimeInterface|string|int|float $dateLeft
	 * @param DateTimeInterface|string|int|float $dateRight
	 * @return bool
	 */
	public static function isSameDay($dateLeft, $dateRight): bool {
		$left = self::ensureDateTime($dateLeft);
		$right = self::ensureDateTime($dateRight);

		return $left->format('Y-m-d') === $right->format('Y-m-d');
	}

	/**
	 * Is the given date today?
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return bool
	 */
	public static function isToday($date): bool {
		return self::isSameDay($date, new DateTimeImmutable());
	}

	/**
	 * Is the given date tomorrow?
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return bool
	 */
	public static function isTomorrow($date): bool {
		$tomorrow = (new DateTimeImmutable('tomorrow'))->setTime(0, 0, 0, 0);

		return self::isSameDay($date, $tomorrow);
	}

	/**
	 * Is the given date yesterday?
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return bool
	 */
	public static function isYesterday($date): bool {
		$yesterday = (new DateTimeImmutable('yesterday'))->setTime(0, 0, 0, 0);

		return self::isSameDay($date, $yesterday);
	}

	/**
	 * Set the day of the month to the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $day
	 * @return DateTimeImmutable
	 */
	public static function setDate($date, int $day): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->setDate((int) $date->format('Y'), (int) $date->format('n'), $day);
	}

	/**
	 * Return the start of a day for the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return DateTimeImmutable
	 */
	public static function startOfDay($date): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->setTime(0, 0, 0, 0);
	}

	/**
	 * Subtract the specified number of days from the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $amount
	 * @return DateTimeImmutable
	 */
	public static function subDays($date, int $amount): DateTimeImmutable {
		return self::addDays($date, -$amount);
	}

	/**
	 * Return the start of today.
	 */
	public static function startOfToday(): DateTimeImmutable {
		return (new DateTimeImmutable('today'))->setTime(0, 0, 0, 0);
	}

	/**
	 * Return the start of tomorrow.
	 */
	public static function startOfTomorrow(): DateTimeImmutable {
		return (new DateTimeImmutable('tomorrow'))->setTime(0, 0, 0, 0);
	}

	/**
	 * Return the start of yesterday.
	 */
	public static function startOfYesterday(): DateTimeImmutable {
		return (new DateTimeImmutable('yesterday'))->setTime(0, 0, 0, 0);
	}

	/**
	 * Return the end of today.
	 */
	public static function endOfToday(): DateTimeImmutable {
		return (new DateTimeImmutable('today'))->setTime(23, 59, 59, 999000);
	}

	/**
	 * Return the end of tomorrow.
	 */
	public static function endOfTomorrow(): DateTimeImmutable {
		return (new DateTimeImmutable('tomorrow'))->setTime(23, 59, 59, 999000);
	}

	/**
	 * Return the end of yesterday.
	 */
	public static function endOfYesterday(): DateTimeImmutable {
		return (new DateTimeImmutable('yesterday'))->setTime(23, 59, 59, 999000);
	}

	/**
	 * Add the specified number of business days (Mon-Fri) to the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $amount
	 * @return DateTimeImmutable
	 */
	public static function addBusinessDays($date, int $amount): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$startedOnWeekend = self::isWeekend($date);

		$hours = (int) $date->format('H');
		$sign = $amount < 0 ? -1 : 1;
		$fullWeeks = intdiv($amount, 5);

		$date = $date->modify(($fullWeeks * 7) . ' days');

		$restDays = abs($amount % 5);
		while($restDays > 0) {
			$date = $date->modify("$sign day");
			if(!self::isWeekend($date)) {
				$restDays--;
			}
		}

		if($startedOnWeekend && self::isWeekend($date) && $amount !== 0) {
			if((int) $date->format('N') === 6) { // Saturday
				$date = $date->modify($sign < 0 ? '+2 days' : '-1 day');
			} elseif((int) $date->format('N') === 7) { // Sunday
				$date = $date->modify($sign < 0 ? '+1 day' : '-2 days');
			}
		}

		// restore hours to avoid DST drift
		return $date->setTime($hours, (int) $date->format('i'), (int) $date->format('s'), (int) $date->format('u'));
	}

	/**
	 * Get the number of business days between the given dates.
	 *
	 * @param DateTimeInterface|string|int|float $laterDate
	 * @param DateTimeInterface|string|int|float $earlierDate
	 * @return int
	 */
	public static function differenceInBusinessDays($laterDate, $earlierDate): int {
		$later = self::ensureDateTime($laterDate)->setTime(0, 0, 0, 0);
		$earlier = self::ensureDateTime($earlierDate)->setTime(0, 0, 0, 0);

		$diff = self::differenceInCalendarDays($later, $earlier);
		$sign = $diff < 0 ? -1 : 1;
		$weeks = intdiv($diff, 7);

		$result = $weeks * 5;
		$movingDate = $earlier->modify(($weeks * 7) . ' days');

		while($movingDate->format('Y-m-d') !== $later->format('Y-m-d')) {
			if(!self::isWeekend($movingDate)) {
				$result += $sign;
			}
			$movingDate = $movingDate->modify($sign . ' day');
		}

		return $result;
	}

	/**
	 * Subtract the specified number of business days from the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $amount
	 * @return DateTimeImmutable
	 */
	public static function subBusinessDays($date, int $amount): DateTimeImmutable {
		return self::addBusinessDays($date, -$amount);
	}

	/**
	 * Get the day of the month for the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return int
	 */
	public static function getDate($date): int {
		$date = self::ensureDateTime($date);

		return (int) $date->format('j');
	}

	/**
	 * Set the day of the year to the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $dayOfYear
	 * @return DateTimeImmutable
	 */
	public static function setDayOfYear($date, int $dayOfYear): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$startOfYear = $date->setDate((int) $date->format('Y'), 1, 1)->setTime(
			(int) $date->format('H'),
			(int) $date->format('i'),
			(int) $date->format('s'),
			(int) $date->format('u')
		);

		return $startOfYear->modify(($dayOfYear - 1) . ' days');
	}
}
