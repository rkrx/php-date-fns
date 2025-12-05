<?php

namespace DateFns\Groups;

use DateTimeImmutable;
use DateTimeInterface;
use DateTimeZone;

trait TimestampHelpers {
	/**
	 * Create a date from a Unix timestamp (seconds).
	 *
	 * @param int|float|string $unixTime
	 * @return DateTimeImmutable
	 */
	public static function fromUnixTime($unixTime): DateTimeImmutable {
		if(!is_numeric($unixTime) || is_nan((float) $unixTime) || is_infinite((float) $unixTime)) {
			throw new \TypeError('Start date is invalid');
		}

		$seconds = self::truncateToZeroTimestamp((float) $unixTime);

		return (new DateTimeImmutable('@' . $seconds))
			->setTimezone(new DateTimeZone(date_default_timezone_get()));
	}

	/**
	 * Get the milliseconds timestamp of the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return int
	 */
	public static function getTime($date): int {
		if(is_numeric($date)) {
			return self::truncateToZeroTimestamp((float) $date);
		}

		$dt = self::ensureDateTime($date);
		$ms = (float) $dt->format('U.u') * 1000;

		return self::truncateToZeroTimestamp($ms);
	}

	/**
	 * Get the seconds timestamp of the given date.
	 *
	 * @param DateTimeInterface|string|int|float $date
	 * @return int
	 */
	public static function getUnixTime($date): int {
		if(is_numeric($date)) {
			return self::truncateToZeroTimestamp(((float) $date) / 1000);
		}

		$dt = self::ensureDateTime($date);
		$seconds = (float) $dt->format('U.u');

		return self::truncateToZeroTimestamp($seconds);
	}

	private static function truncateToZeroTimestamp(float $value): int {
		return $value >= 0 ? (int) floor($value) : (int) ceil($value);
	}
}
