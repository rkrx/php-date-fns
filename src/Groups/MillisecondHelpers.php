<?php

namespace DateFns\Groups;

use DateTimeImmutable;
use DateTimeInterface;
use RuntimeException;

trait MillisecondHelpers {
	/**
	 * Add the specified number of milliseconds to the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $amount
	 * @return DateTimeImmutable
	 */
	public static function addMilliseconds($date, int $amount): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$modified = $date->modify(($amount >= 0 ? '+' : '') . $amount . ' milliseconds');

		if($modified === false) {
			throw new RuntimeException('Invalid date modification');
		}

		return $modified;
	}

	/**
	 * Get the number of milliseconds between the given dates.
	 *
	 * @param DateTimeInterface|string|int|float $laterDate
	 * @param DateTimeInterface|string|int|float $earlierDate
	 * @return int
	 */
	public static function differenceInMilliseconds($laterDate, $earlierDate): int {
		$later = self::ensureDateTime($laterDate);
		$earlier = self::ensureDateTime($earlierDate);

		$laterMs = self::getEpochMilliseconds($later);
		$earlierMs = self::getEpochMilliseconds($earlier);

		return $laterMs - $earlierMs;
	}

	/**
	 * Get the milliseconds of the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return int
	 */
	public static function getMilliseconds($date): int {
		$date = self::ensureDateTime($date);

		return (int) floor(((int) $date->format('u')) / 1000);
	}

	/**
	 * Returns the number of milliseconds in the specified duration parts.
	 *
	 * @param array{years?: int, months?: int, weeks?: int, days?: int, hours?: int, minutes?: int, seconds?: int} $duration
	 * @return int
	 */
	public static function milliseconds(array $duration): int {
		$years = $duration['years'] ?? 0;
		$months = $duration['months'] ?? 0;
		$weeks = $duration['weeks'] ?? 0;
		$days = $duration['days'] ?? 0;
		$hours = $duration['hours'] ?? 0;
		$minutes = $duration['minutes'] ?? 0;
		$seconds = $duration['seconds'] ?? 0;

		$totalDays = 0.0;
		$daysInYear = 365.2425;

		if($years !== 0) {
			$totalDays += $years * $daysInYear;
		}
		if($months !== 0) {
			$totalDays += $months * ($daysInYear / 12);
		}
		if($weeks !== 0) {
			$totalDays += $weeks * 7;
		}
		if($days !== 0) {
			$totalDays += $days;
		}

		$totalSeconds = $totalDays * 86400;
		$totalSeconds += $hours * 3600;
		$totalSeconds += $minutes * 60;
		$totalSeconds += $seconds;

		return self::truncateToZero($totalSeconds * 1000);
	}

	/**
	 * Set the milliseconds to the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @param int $milliseconds
	 * @return DateTimeImmutable
	 */
	public static function setMilliseconds($date, int $milliseconds): DateTimeImmutable {
		$date = self::ensureDateTime($date);

		$milliseconds %= 1000;
		if($milliseconds < 0) {
			$milliseconds += 1000;
		}

		$microseconds = $milliseconds * 1000;

		return $date->setTime(
			(int) $date->format('H'),
			(int) $date->format('i'),
			(int) $date->format('s'),
			$microseconds
		);
	}

	private static function getEpochMilliseconds(DateTimeInterface $date): int {
		$value = (float) $date->format('U.u') * 1000;

		return self::truncateToZero($value);
	}
}
