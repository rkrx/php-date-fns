<?php

namespace DateFns\Groups;

use DateTimeImmutable;
use DateTimeInterface;

trait ISOWeekNumberingYearHelpers {
	public static function addISOWeekYears(DateTimeInterface|int|float|string|null $date, int $amount): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$diff = self::differenceInCalendarDays($date, self::startOfISOWeekYear($date));
		$targetYear = self::getISOWeekYear($date) + $amount;

		$targetStart = self::startOfISOWeekYear($date->setDate($targetYear, 1, 4));

		return $targetStart->modify('+' . $diff . ' days')->setTime(
			(int) $date->format('H'),
			(int) $date->format('i'),
			(int) $date->format('s'),
			(int) $date->format('u')
		);
	}

	public static function differenceInCalendarISOWeekYears(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate): int {
		return self::getISOWeekYear($laterDate) - self::getISOWeekYear($earlierDate);
	}

	public static function differenceInISOWeekYears(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate): int {
		$isoYearDiff = self::differenceInCalendarISOWeekYears($laterDate, $earlierDate);
		$adjusted = self::setISOWeekYear($earlierDate, self::getISOWeekYear($laterDate));

		if($adjusted > self::ensureDateTime($laterDate)) {
			return $isoYearDiff - 1;
		}

		return $isoYearDiff;
	}

	public static function endOfISOWeekYear(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$startNext = self::startOfISOWeekYear(self::ensureDateTime($date)->modify('+1 year'));

		return $startNext->modify('-1 millisecond');
	}

	public static function getISOWeeksInYear(DateTimeInterface|int|float|string|null $date): int {
		$date = self::ensureDateTime($date);
		$isoYear = self::getISOWeekYear($date);
		$start = self::startOfISOWeekYear($date->setDate($isoYear, 1, 4));
		$startNext = self::startOfISOWeekYear($date->setDate($isoYear + 1, 1, 4));
		$diffDays = self::differenceInCalendarDays($startNext, $start);

		return (int) round($diffDays / 7);
	}

	public static function getISOWeekYear(DateTimeInterface|int|float|string|null $date): int {
		$date = self::ensureDateTime($date);

		return (int) $date->format('o');
	}

	public static function isSameISOWeekYear(DateTimeInterface|int|float|string|null $dateLeft, DateTimeInterface|int|float|string|null $dateRight): bool {
		return self::getISOWeekYear($dateLeft) === self::getISOWeekYear($dateRight);
	}

	public static function lastDayOfISOWeekYear(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$startNext = self::startOfISOWeekYear(self::ensureDateTime($date)->modify('+1 year'));

		return $startNext->modify('-1 day')->setTime(0, 0, 0, 0);
	}

	public static function setISOWeekYear(DateTimeInterface|int|float|string|null $date, int $isoYear): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$diff = self::differenceInCalendarDays($date, self::startOfISOWeekYear($date));

		$targetStart = self::startOfISOWeekYear($date->setDate($isoYear, 1, 4));
		$target = $targetStart->modify('+' . $diff . ' days');

		return $target->setTime(
			(int) $date->format('H'),
			(int) $date->format('i'),
			(int) $date->format('s'),
			(int) $date->format('u')
		);
	}

	public static function startOfISOWeekYear(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$isoYear = self::getISOWeekYear($date);
		$jan4 = $date->setDate($isoYear, 1, 4);

		return self::startOfISOWeek($jan4);
	}

	public static function subISOWeekYears(DateTimeInterface|int|float|string|null $date, int $amount): DateTimeImmutable {
		return self::addISOWeekYears($date, -$amount);
	}
}
