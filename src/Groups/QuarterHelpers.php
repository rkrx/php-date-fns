<?php

namespace DateFns\Groups;

use DateTimeImmutable;
use DateTimeInterface;

trait QuarterHelpers {
	public static function addQuarters(DateTimeInterface|int|float|string|null $date, int $amount): DateTimeImmutable {
		return self::addMonths($date, $amount * 3);
	}

	public static function differenceInCalendarQuarters(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate): int {
		$later = self::ensureDateTime($laterDate);
		$earlier = self::ensureDateTime($earlierDate);

		$yearsDiff = (int) $later->format('Y') - (int) $earlier->format('Y');
		$quartersDiff = self::getQuarter($later) - self::getQuarter($earlier);

		return $yearsDiff * 4 + $quartersDiff;
	}

	/**
	 * @param array{roundingMethod?: 'floor'|'ceil'|'round'} $options
	 */
	public static function differenceInQuarters(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate, array $options = []): int {
		$monthsDiff = self::differenceInMonths($laterDate, $earlierDate);
		$quarters = $monthsDiff / 3;

		return self::roundQuarters($quarters, $options['roundingMethod'] ?? null);
	}

	public static function endOfQuarter(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$quarter = self::getQuarter($date);
		$endMonth = $quarter * 3;

		$endDate = $date->setDate((int) $date->format('Y'), $endMonth, 1)->modify('last day of this month');

		return $endDate->setTime(23, 59, 59, 999000);
	}

	public static function getQuarter(DateTimeInterface|int|float|string|null $date): int {
		$date = self::ensureDateTime($date);
		$month = (int) $date->format('n');

		return (int) ceil($month / 3);
	}

	public static function isSameQuarter(DateTimeInterface|int|float|string|null $dateLeft, DateTimeInterface|int|float|string|null $dateRight): bool {
		$left = self::ensureDateTime($dateLeft);
		$right = self::ensureDateTime($dateRight);

		return $left->format('Y') === $right->format('Y') && self::getQuarter($left) === self::getQuarter($right);
	}

	public static function isThisQuarter(DateTimeInterface|int|float|string|null $date): bool {
		return self::isSameQuarter($date, new DateTimeImmutable());
	}

	public static function lastDayOfQuarter(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$end = self::endOfQuarter($date);

		return $end->setTime(0, 0, 0, 0);
	}

	public static function setQuarter(DateTimeInterface|int|float|string|null $date, int $quarter): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$monthZeroBased = (int) $date->format('n') - 1;
		$monthInQuarter = $monthZeroBased % 3;
		$targetMonthZeroBased = ($quarter - 1) * 3 + $monthInQuarter;
		$targetMonth = $targetMonthZeroBased + 1; // convert to PHP 1-12

		$day = (int) $date->format('j');
		$daysInTargetMonth = (int) (new DateTimeImmutable($date->format('Y') . '-' . $targetMonth . '-01'))->format('t');
		$day = min($day, $daysInTargetMonth);

		return $date->setDate((int) $date->format('Y'), $targetMonth, $day);
	}

	public static function startOfQuarter(DateTimeInterface|int|float|string|null $date): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$quarter = self::getQuarter($date);
		$startMonth = ($quarter - 1) * 3 + 1;

		return $date->setDate((int) $date->format('Y'), $startMonth, 1)->setTime(0, 0, 0, 0);
	}

	public static function subQuarters(DateTimeInterface|int|float|string|null $date, int $amount): DateTimeImmutable {
		return self::addQuarters($date, -$amount);
	}

	private static function roundQuarters(float $value, ?string $method): int {
		return match ($method) {
			'floor' => (int) floor($value),
			'ceil' => (int) ceil($value),
			'round' => (int) round($value),
			default => $value >= 0 ? (int) floor($value) : (int) ceil($value),
		};
	}
}
