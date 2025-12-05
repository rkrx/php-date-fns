<?php

namespace DateFns\Groups;

use DateTimeImmutable;
use DateTimeInterface;

trait ISOWeekHelpers {
	public static function startOfISOWeek(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$isoDay = (int) $date->format('N'); // 1 (Mon) - 7 (Sun)
		$diff = $isoDay - 1;
		return $date->modify('-' . $diff . ' days')->setTime(0, 0, 0, 0);
	}

	public static function endOfISOWeek(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$start = self::startOfISOWeek($date);

		return $start->modify('+6 days')->setTime(23, 59, 59, 999000);
	}

	public static function lastDayOfISOWeek(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$start = self::startOfISOWeek($date);

		return $start->modify('+6 days')->setTime(0, 0, 0, 0);
	}

	public static function differenceInCalendarISOWeeks(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate): int {
		$startLater = self::startOfISOWeek($laterDate);
		$startEarlier = self::startOfISOWeek($earlierDate);
		$diffDays = self::differenceInCalendarDays($startLater, $startEarlier);

		return self::truncateToZero($diffDays / 7);
	}

	public static function getISOWeek(DateTimeInterface|int|float|string|null $date): int {
		$date = self::ensureDateTime($date);

		return (int) $date->format('W');
	}

	public static function isSameISOWeek(DateTimeInterface|int|float|string|null $dateLeft, DateTimeInterface|int|float|string|null $dateRight): bool {
		return self::startOfISOWeek($dateLeft) == self::startOfISOWeek($dateRight);
	}

	public static function isThisISOWeek(DateTimeInterface|int|float|string|null $date): bool {
		return self::isSameISOWeek($date, new DateTimeImmutable());
	}

	public static function setISOWeek(DateTimeInterface|int|float|string|null $date, int $week): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$isoDay = (int) $date->format('N');

		$startOfYear = self::startOfISOWeekYear($date);
		$target = $startOfYear->modify('+' . ($week - 1) . ' weeks')->modify('+' . ($isoDay - 1) . ' days');

		return $target->setTime(
			(int) $date->format('H'),
			(int) $date->format('i'),
			(int) $date->format('s'),
			(int) $date->format('u')
		);
	}
}
