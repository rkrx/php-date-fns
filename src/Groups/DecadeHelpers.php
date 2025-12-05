<?php

namespace DateFns\Groups;

use DateTimeImmutable;
use DateTimeInterface;

trait DecadeHelpers {
	public static function getDecade(DateTimeInterface|int|float|string|null $date): int {
		$date = self::ensureDateTime($date);
		$year = (int) $date->format('Y');

		return (int) (floor($year / 10) * 10);
	}

	public static function startOfDecade(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$decadeStartYear = self::getDecade($date);

		return $date->setDate($decadeStartYear, 1, 1)->setTime(0, 0, 0, 0);
	}

	public static function endOfDecade(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$decadeStartYear = self::getDecade($date);
		$endYear = $decadeStartYear + 9;

		return $date->setDate($endYear, 12, 31)->setTime(23, 59, 59, 999000);
	}

	public static function lastDayOfDecade(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$decadeStartYear = self::getDecade($date);
		$endYear = $decadeStartYear + 9;

		return $date->setDate($endYear, 12, 31)->setTime(0, 0, 0, 0);
	}
}
