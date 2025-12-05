<?php

namespace DateFns\Groups;

trait ConversionHelpers {
	public static function daysToWeeks(int $days): int {
		return (int) ($days / 7);
	}

	public static function hoursToMilliseconds(int $hours): int {
		return $hours * 3600000;
	}

	public static function hoursToMinutes(int $hours): int {
		return $hours * 60;
	}

	public static function hoursToSeconds(int $hours): int {
		return $hours * 3600;
	}

	public static function millisecondsToHours(int $milliseconds): int {
		return (int) ($milliseconds / 3600000);
	}

	public static function millisecondsToMinutes(int $milliseconds): int {
		return (int) ($milliseconds / 60000);
	}

	public static function millisecondsToSeconds(int $milliseconds): int {
		return (int) ($milliseconds / 1000);
	}

	public static function minutesToHours(int $minutes): int {
		return (int) ($minutes / 60);
	}

	public static function minutesToMilliseconds(int $minutes): int {
		return $minutes * 60000;
	}

	public static function minutesToSeconds(int $minutes): int {
		return $minutes * 60;
	}

	public static function monthsToQuarters(int $months): int {
		return (int) ($months / 3);
	}

	public static function monthsToYears(int $months): int {
		return (int) ($months / 12);
	}

	public static function quartersToMonths(int $quarters): int {
		return $quarters * 3;
	}

	public static function quartersToYears(int $quarters): int {
		return (int) ($quarters / 4);
	}

	public static function secondsToHours(int $seconds): int {
		return (int) ($seconds / 3600);
	}

	public static function secondsToMilliseconds(int $seconds): int {
		return $seconds * 1000;
	}

	public static function secondsToMinutes(int $seconds): int {
		return (int) ($seconds / 60);
	}

	public static function weeksToDays(int $weeks): int {
		return $weeks * 7;
	}

	public static function yearsToDays(int $years): int {
		return (int) ($years * 365.2425);
	}

	public static function yearsToMonths(int $years): int {
		return $years * 12;
	}

	public static function yearsToQuarters(int $years): int {
		return $years * 4;
	}
}
