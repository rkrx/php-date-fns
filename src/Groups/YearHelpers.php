<?php

namespace DateFns\Groups;

use DateTimeImmutable;
use DateTimeInterface;
use RuntimeException;

trait YearHelpers {
	public static function addYears(DateTimeInterface|int|float|string|null $date, int $amount): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$modified = $date->modify(($amount >= 0 ? '+' : '') . $amount . ' years');
		if($modified === false) {
			throw new RuntimeException('Invalid date modification');
		}

		return $modified;
	}

	public static function differenceInCalendarYears(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate): int {
		$later = self::ensureDateTime($laterDate);
		$earlier = self::ensureDateTime($earlierDate);

		return (int) $later->format('Y') - (int) $earlier->format('Y');
	}

	public static function differenceInYears(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate): int {
		$later = self::ensureDateTime($laterDate);
		$earlier = self::ensureDateTime($earlierDate);

		$yearsDiff = self::differenceInCalendarYears($later, $earlier);

		$adjustedEarlier = $earlier->setDate((int) $later->format('Y'), (int) $earlier->format('n'), (int) $earlier->format('j'));
		if($adjustedEarlier > $later) {
			$yearsDiff -= 1;
		}

		return $yearsDiff;
	}

	/**
	 * @return DateTimeImmutable[]
	 */
	public static function eachWeekendOfYear(DateTimeInterface|int|float|string|null $date): array {
		$date = self::ensureDateTime($date);
		$start = $date->setDate((int) $date->format('Y'), 1, 1)->setTime(0, 0, 0, 0);
		$end = $date->setDate((int) $date->format('Y'), 12, 31)->setTime(0, 0, 0, 0);

		$dates = [];
		$current = $start;
		while($current <= $end) {
			$day = (int) $current->format('N');
			if($day >= 6) {
				$dates[] = $current;
			}
			$current = $current->modify('+1 day');
		}

		return $dates;
	}

	public static function endOfYear(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->setDate((int) $date->format('Y'), 12, 31)->setTime(23, 59, 59, 999000);
	}

	public static function getDaysInYear(DateTimeInterface|int|float|string|null $date): int {
		return self::isLeapYear($date) ? 366 : 365;
	}

	public static function getYear(DateTimeInterface|int|float|string|null $date): int {
		$date = self::ensureDateTime($date);

		return (int) $date->format('Y');
	}

	public static function isLeapYear(DateTimeInterface|int|float|string|null $date): bool {
		$date = self::ensureDateTime($date);
		$year = (int) $date->format('Y');

		return ($year % 4 === 0 && $year % 100 !== 0) || ($year % 400 === 0);
	}

	public static function isSameYear(DateTimeInterface|int|float|string|null $dateLeft, DateTimeInterface|int|float|string|null $dateRight): bool {
		return self::getYear($dateLeft) === self::getYear($dateRight);
	}

	public static function isThisYear(DateTimeInterface|int|float|string|null $date): bool {
		return self::isSameYear($date, new DateTimeImmutable());
	}

	public static function lastDayOfYear(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->setDate((int) $date->format('Y'), 12, 31)->setTime(0, 0, 0, 0);
	}

	public static function setYear(DateTimeInterface|int|float|string|null $date, int $year): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$month = (int) $date->format('n');
		$day = (int) $date->format('j');

		$daysInTargetMonth = (int) (new DateTimeImmutable($year . "-$month-01"))->format('t');
		$day = min($day, $daysInTargetMonth);

		return $date->setDate($year, $month, $day);
	}

	public static function startOfYear(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		return $date->setDate((int) $date->format('Y'), 1, 1)->setTime(0, 0, 0, 0);
	}

	public static function subYears(DateTimeInterface|int|float|string|null $date, int $amount): DateTimeImmutable {
		return self::addYears($date, -$amount);
	}
}
