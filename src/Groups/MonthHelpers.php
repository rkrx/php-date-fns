<?php

namespace DateFns\Groups;

use DateTimeImmutable;
use DateTimeInterface;
use RuntimeException;

trait MonthHelpers {
	public static function addMonths(DateTimeInterface|int|float|string|null $date, int $amount): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$modified = $date->modify(($amount >= 0 ? '+' : '') . $amount . ' months');
		if($modified === false) {
			throw new RuntimeException('Invalid date modification');
		}

		return $modified;
	}

	public static function differenceInCalendarMonths(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate): int {
		$later = self::ensureDateTime($laterDate);
		$earlier = self::ensureDateTime($earlierDate);

		$yearDiff = (int) $later->format('Y') - (int) $earlier->format('Y');
		$monthDiff = (int) $later->format('n') - (int) $earlier->format('n');

		return $yearDiff * 12 + $monthDiff;
	}

	public static function differenceInMonths(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate): int {
		$later = self::ensureDateTime($laterDate);
		$earlier = self::ensureDateTime($earlierDate);

		$sign = $later < $earlier ? -1 : 1;
		$years = (int) $later->format('Y') - (int) $earlier->format('Y');
		$months = (int) $later->format('n') - (int) $earlier->format('n');
		$calendarMonths = $years * 12 + $months;

		$comparison = $later->modify('-' . $calendarMonths . ' months');
		if($comparison === false) {
			return 0;
		}
		if($comparison->format('Y-m-d') === $earlier->format('Y-m-d')) {
			return $calendarMonths;
		}

		$adjusted = $calendarMonths + ($comparison > $earlier ? 0 : -1);

		return $sign < 0 ? -abs($adjusted) : $adjusted;
	}

	/**
	 * @return DateTimeImmutable[]
	 */
	public static function eachWeekendOfMonth(DateTimeInterface|int|float|string|null $date): array {
		$date = self::ensureDateTime($date);
		$start = $date->setDate((int) $date->format('Y'), (int) $date->format('m'), 1)->setTime(0, 0, 0);
		$end = $date->modify('last day of this month')->setTime(0, 0, 0);

		$dates = [];
		$current = $start;
		while($current <= $end) {
			$dayOfWeek = (int) $current->format('N'); // 1-7
			if($dayOfWeek >= 6) {
				$dates[] = $current;
			}
			$current = $current->modify('+1 day');
		}

		return $dates;
	}

	public static function endOfMonth(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->modify('last day of this month')->setTime(23, 59, 59, 999000);
	}

	public static function getDaysInMonth(DateTimeInterface|int|float|string|null $date): int {
		$date = self::ensureDateTime($date);

		return (int) $date->format('t');
	}

	public static function getMonth(DateTimeInterface|int|float|string|null $date): int {
		$date = self::ensureDateTime($date);

		return (int) $date->format('n') - 1; // JS months 0-based
	}

	public static function isFirstDayOfMonth(DateTimeInterface|int|float|string|null $date): bool {
		$date = self::ensureDateTime($date);

		return $date->format('j') === '1';
	}

	public static function isLastDayOfMonth(DateTimeInterface|int|float|string|null $date): bool {
		$date = self::ensureDateTime($date);

		return $date->format('j') === $date->format('t');
	}

	public static function isSameMonth(DateTimeInterface|int|float|string|null $dateLeft, DateTimeInterface|int|float|string|null $dateRight): bool {
		$left = self::ensureDateTime($dateLeft);
		$right = self::ensureDateTime($dateRight);

		return $left->format('Y-m') === $right->format('Y-m');
	}

	public static function isThisMonth(DateTimeInterface|int|float|string|null $date): bool {
		return self::isSameMonth($date, new DateTimeImmutable());
	}

	public static function lastDayOfMonth(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->modify('last day of this month')->setTime(0, 0, 0, 0);
	}

	public static function setMonth(DateTimeInterface|int|float|string|null $date, int $month): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		// JS month is 0-11; PHP expects 1-12
		$monthPhp = $month + 1;

		return $date->setDate((int) $date->format('Y'), $monthPhp, (int) $date->format('j'));
	}

	public static function startOfMonth(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->setDate((int) $date->format('Y'), (int) $date->format('m'), 1)->setTime(0, 0, 0, 0);
	}

	public static function subMonths(DateTimeInterface|int|float|string|null $date, int $amount): DateTimeImmutable {
		return self::addMonths($date, -$amount);
	}
}
