<?php

namespace DateFns\Groups;

use DateTimeImmutable;
use DateTimeInterface;
use RuntimeException;
use TypeError;
use Throwable;

trait IntervalHelpers {
	/**
	 * Is the given time interval overlapping with another time interval?
	 *
	 * @param DateTimeInterface|string|int $leftStart
	 * @param DateTimeInterface|string|int $leftEnd
	 * @param DateTimeInterface|string|int $rightStart
	 * @param DateTimeInterface|string|int $rightEnd
	 * @param array{inclusive?: bool} $options
	 * @return bool
	 */
	public static function areIntervalsOverlapping(
		DateTimeInterface|string|int $leftStart,
		DateTimeInterface|string|int $leftEnd,
		DateTimeInterface|string|int $rightStart,
		DateTimeInterface|string|int $rightEnd,
		array $options = []
	): bool {
		[$leftStart, $leftEnd] = self::resolveInterval($leftStart, $leftEnd);
		[$rightStart, $rightEnd] = self::resolveInterval($rightStart, $rightEnd);

		$inclusive = $options['inclusive'] ?? false;

		if($inclusive) {
			return $leftStart <= $rightEnd && $rightStart <= $leftEnd;
		}

		return $leftStart < $rightEnd && $rightStart < $leftEnd;
	}

	/**
	 * Return a date bounded by the start and the end of the given interval.
	 *
	 * @param DateTimeInterface|string|int $date
	 * @param DateTimeInterface|string|int $min
	 * @param DateTimeInterface|string|int $max
	 * @return DateTimeImmutable
	 */
	public static function clamp(
		DateTimeInterface|string|int $date,
		DateTimeInterface|string|int $min,
		DateTimeInterface|string|int $max
	): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		[$min, $max] = self::resolveInterval($min, $max);

		if($date < $min) {
			return $min;
		}
		if($date > $max) {
			return $max;
		}

		return $date;
	}

	/**
	 * Return the array of dates within the specified time interval.
	 *
	 * @param DateTimeInterface|string|int $start
	 * @param DateTimeInterface|string|int $end
	 * @param array{step?: int} $options
	 * @return DateTimeImmutable[]
	 */
	public static function eachDayOfInterval(
		DateTimeInterface|string|int $start,
		DateTimeInterface|string|int $end,
		array $options = []
	): array {
		[$start, $end] = self::resolveInterval($start, $end);
		$step = $options['step'] ?? 1;

		if($step < 1) {
			throw new RuntimeException('Step must be a positive integer');
		}

		$dates = [];
		$current = $start->setTime(0, 0, 0);
		$endTime = $end->setTime(0, 0, 0);

		while($current <= $endTime) {
			$dates[] = $current;
			$current = $current->modify('+' . $step . ' day');
		}

		return $dates;
	}

	/**
	 * Return the array of hours within the specified time interval.
	 *
	 * @param DateTimeInterface|string|int $start
	 * @param DateTimeInterface|string|int $end
	 * @param array{step?: int} $options
	 * @return DateTimeImmutable[]
	 */
	public static function eachHourOfInterval(
		DateTimeInterface|string|int $start,
		DateTimeInterface|string|int $end,
		array $options = []
	): array {
		[$start, $end] = self::resolveInterval($start, $end);
		$step = $options['step'] ?? 1;

		if($step < 1) {
			throw new RuntimeException('Step must be a positive integer');
		}

		$dates = [];
		// Set minutes, seconds, microns to 0
		$current = $start->setTime((int) $start->format('H'), 0, 0);
		$endTime = $end->setTime((int) $end->format('H'), 0, 0);

		while($current <= $endTime) {
			$dates[] = $current;
			$current = $current->modify('+' . $step . ' hour');
		}

		return $dates;
	}

	/**
	 * Return the array of minutes within the specified time interval.
	 *
	 * @param DateTimeInterface|string|int $start
	 * @param DateTimeInterface|string|int $end
	 * @param array{step?: int} $options
	 * @return DateTimeImmutable[]
	 */
	public static function eachMinuteOfInterval(
		DateTimeInterface|string|int $start,
		DateTimeInterface|string|int $end,
		array $options = []
	): array {
		[$start, $end] = self::resolveInterval($start, $end);
		$step = $options['step'] ?? 1;

		if($step < 1) {
			throw new RuntimeException('Step must be a positive integer');
		}

		$dates = [];
		// Set seconds, microns to 0
		$current = $start->setTime((int) $start->format('H'), (int) $start->format('i'), 0);
		$endTime = $end->setTime((int) $end->format('H'), (int) $end->format('i'), 0);

		while($current <= $endTime) {
			$dates[] = $current;
			$current = $current->modify('+' . $step . ' minute');
		}

		return $dates;
	}

	/**
	 * Return the array of months within the specified time interval.
	 *
	 * @param DateTimeInterface|string|int $start
	 * @param DateTimeInterface|string|int $end
	 * @param array{step?: int} $options
	 * @return DateTimeImmutable[]
	 */
	public static function eachMonthOfInterval(
		DateTimeInterface|string|int $start,
		DateTimeInterface|string|int $end,
		array $options = []
	): array {
		[$start, $end] = self::resolveInterval($start, $end);
		$step = $options['step'] ?? 1;

		if($step < 1) {
			throw new RuntimeException('Step must be a positive integer');
		}

		$dates = [];
		$current = $start->setDate((int) $start->format('Y'), (int) $start->format('m'), 1)->setTime(0, 0, 0);
		$endTime = $end->setDate((int) $end->format('Y'), (int) $end->format('m'), 1)->setTime(0, 0, 0);

		while($current <= $endTime) {
			$dates[] = $current;
			$current = $current->modify('+' . $step . ' month');
		}

		return $dates;
	}

	/**
	 * Return the array of quarters within the specified time interval.
	 *
	 * @param DateTimeInterface|string|int $start
	 * @param DateTimeInterface|string|int $end
	 * @param array{step?: int} $options
	 * @return DateTimeImmutable[]
	 */
	public static function eachQuarterOfInterval(
		DateTimeInterface|string|int $start,
		DateTimeInterface|string|int $end,
		array $options = []
	): array {
		[$start, $end] = self::resolveInterval($start, $end);
		$step = $options['step'] ?? 1;

		if($step < 1) {
			throw new RuntimeException('Step must be a positive integer');
		}

		$dates = [];
		// Start of quarter
		$currentMonth = (int) $start->format('n');
		$quarter = (int) ceil($currentMonth / 3);
		$startMonth = ($quarter - 1) * 3 + 1;

		$current = $start->setDate((int) $start->format('Y'), $startMonth, 1)->setTime(0, 0, 0);

		// End of quarter for comparison? No, just start of quarter of end date.
		$endMonth = (int) $end->format('n');
		$endQuarter = (int) ceil($endMonth / 3);
		$endStartMonth = ($endQuarter - 1) * 3 + 1;
		$endTime = $end->setDate((int) $end->format('Y'), $endStartMonth, 1)->setTime(0, 0, 0);

		while($current <= $endTime) {
			$dates[] = $current;
			$current = $current->modify('+' . ($step * 3) . ' month');
		}

		return $dates;
	}

	/**
	 * Return the array of years within the specified time interval.
	 *
	 * @param DateTimeInterface|string|int $start
	 * @param DateTimeInterface|string|int $end
	 * @param array{step?: int} $options
	 * @return DateTimeImmutable[]
	 */
	public static function eachYearOfInterval(
		DateTimeInterface|string|int $start,
		DateTimeInterface|string|int $end,
		array $options = []
	): array {
		[$start, $end] = self::resolveInterval($start, $end);
		$step = $options['step'] ?? 1;

		if($step < 1) {
			throw new RuntimeException('Step must be a positive integer');
		}

		$dates = [];
		$current = $start->setDate((int) $start->format('Y'), 1, 1)->setTime(0, 0, 0);
		$endTime = $end->setDate((int) $end->format('Y'), 1, 1)->setTime(0, 0, 0);

		while($current <= $endTime) {
			$dates[] = $current;
			$current = $current->modify('+' . $step . ' year');
		}

		return $dates;
	}

	/**
	 * Return the array of weeks within the specified time interval.
	 *
	 * @param DateTimeInterface|string|int $start
	 * @param DateTimeInterface|string|int $end
	 * @param array{step?: int, weekStartsOn?: int} $options
	 * @return DateTimeImmutable[]
	 */
	public static function eachWeekOfInterval(
		DateTimeInterface|string|int $start,
		DateTimeInterface|string|int $end,
		array $options = []
	): array {
		[$start, $end] = self::resolveInterval($start, $end);
		$step = $options['step'] ?? 1;
		$weekStartsOn = $options['weekStartsOn'] ?? 0;

		if($step < 1) {
			throw new RuntimeException('Step must be a positive integer');
		}

		$dates = [];

		// Calculate start of week for start date
		$startDay = (int) $start->format('w');
		$diff = ($startDay < $weekStartsOn ? 7 : 0) + $startDay - $weekStartsOn;
		$current = $start->modify("-" . $diff . " day")->setTime(0, 0, 0);

		// Calculate start of week for end date to limit the loop correctly
		$endDay = (int) $end->format('w');
		$diffEnd = ($endDay < $weekStartsOn ? 7 : 0) + $endDay - $weekStartsOn;
		$endTime = $end->modify("-" . $diffEnd . " day")->setTime(0, 0, 0);

		while($current <= $endTime) {
			$dates[] = $current;
			$current = $current->modify('+' . $step . ' week');
		}

		return $dates;
	}

	/**
	 * Return the array of weekends within the specified time interval.
	 *
	 * @param DateTimeInterface|string|int $start
	 * @param DateTimeInterface|string|int $end
	 * @return DateTimeImmutable[]
	 */
	public static function eachWeekendOfInterval(
		DateTimeInterface|string|int $start,
		DateTimeInterface|string|int $end
	): array {
		[$start, $end] = self::resolveInterval($start, $end);

		$dates = [];
		$current = $start->setTime(0, 0, 0);
		$endTime = $end->setTime(0, 0, 0);

		while($current <= $endTime) {
			$dayOfWeek = (int) $current->format('N'); // 1 (Mon) to 7 (Sun)
			if($dayOfWeek >= 6) {
				$dates[] = $current;
			}
			$current = $current->modify('+1 day');
		}

		return $dates;
	}

	/**
	 * Get the number of days that overlap in two time intervals.
	 *
	 * @param DateTimeInterface|string|int $leftStart
	 * @param DateTimeInterface|string|int $leftEnd
	 * @param DateTimeInterface|string|int $rightStart
	 * @param DateTimeInterface|string|int $rightEnd
	 * @return int
	 */
	public static function getOverlappingDaysInIntervals(
		DateTimeInterface|string|int $leftStart,
		DateTimeInterface|string|int $leftEnd,
		DateTimeInterface|string|int $rightStart,
		DateTimeInterface|string|int $rightEnd
	): int {
		$leftInterval = self::tryResolveInterval($leftStart, $leftEnd, true);
		$rightInterval = self::tryResolveInterval($rightStart, $rightEnd, true);

		if($leftInterval === null || $rightInterval === null) {
			return 0;
		}

		[$leftStart, $leftEnd] = $leftInterval;
		[$rightStart, $rightEnd] = $rightInterval;

		$leftStartTs = (float) $leftStart->format('U.u');
		$leftEndTs = (float) $leftEnd->format('U.u');
		$rightStartTs = (float) $rightStart->format('U.u');
		$rightEndTs = (float) $rightEnd->format('U.u');

		// Strictly overlapping intervals only
		if(!($leftStartTs < $rightEndTs && $rightStartTs < $leftEndTs)) {
			return 0;
		}

		$overlapStart = $leftStartTs >= $rightStartTs ? $leftStart : $rightStart;
		$overlapEnd = $rightEndTs <= $leftEndTs ? $rightEnd : $leftEnd;

		$overlapStartAdj = (float) $overlapStart->format('U.u') - $overlapStart->getOffset();
		$overlapEndAdj = (float) $overlapEnd->format('U.u') - $overlapEnd->getOffset();

		$days = (int) ceil(($overlapEndAdj - $overlapStartAdj) / 86400);

		return max(0, $days);
	}

	/**
	 * Creates an interval object and validates its values.
	 *
	 * @param DateTimeInterface|string|int $start
	 * @param DateTimeInterface|string|int $end
	 * @param array{assertPositive?: bool} $options
	 * @return array{start: DateTimeImmutable, end: DateTimeImmutable}
	 */
	public static function interval(
		DateTimeInterface|string|int $start,
		DateTimeInterface|string|int $end,
		array $options = []
	): array {
		$startDate = self::tryEnsureDateTime($start);
		$endDate = self::tryEnsureDateTime($end);

		if(!$startDate instanceof DateTimeImmutable) {
			throw new TypeError('Start date is invalid');
		}
		if(!$endDate instanceof DateTimeImmutable) {
			throw new TypeError('End date is invalid');
		}

		if(($options['assertPositive'] ?? false) && $startDate > $endDate) {
			throw new TypeError('End date must be after start date');
		}

		return ['start' => $startDate, 'end' => $endDate];
	}

	/**
	 * Is the given date within the interval? (Including start and end.)
	 *
	 * @param DateTimeInterface|string|int $date
	 * @param DateTimeInterface|string|int $start
	 * @param DateTimeInterface|string|int $end
	 * @return bool
	 */
	public static function isWithinInterval(
		DateTimeInterface|string|int $date,
		DateTimeInterface|string|int $start,
		DateTimeInterface|string|int $end
	): bool {
		$target = self::tryEnsureDateTime($date);
		$interval = self::tryResolveInterval($start, $end, true);

		if($target === null || $interval === null) {
			return false;
		}

		[$start, $end] = $interval;

		$startTs = (float) $start->format('U.u');
		$endTs = (float) $end->format('U.u');
		$time = (float) $target->format('U.u');

		return $time >= $startTs && $time <= $endTs;
	}

	/**
	 * @return array{0: DateTimeImmutable, 1: DateTimeImmutable}
	 */
	private static function resolveInterval(
		DateTimeInterface|string|int $start,
		DateTimeInterface|string|int $end,
		bool $normalize = false
	): array {
		$start = self::ensureDateTime($start);
		$end = self::ensureDateTime($end);

		if($start > $end) {
			if($normalize) {
				return [$end, $start];
			}

			throw new RuntimeException('The start of an interval cannot be after its end');
		}

		return [$start, $end];
	}

	/**
	 * @param DateTimeInterface|int|float|string|null $start
	 * @param DateTimeInterface|int|float|string|null $end
	 * @return array{0: DateTimeImmutable, 1: DateTimeImmutable}|null
	 */
	private static function tryResolveInterval($start, $end, bool $normalize = false): ?array {
		$start = self::tryEnsureDateTime($start);
		$end = self::tryEnsureDateTime($end);

		if($start === null || $end === null) {
			return null;
		}

		if($start > $end && $normalize) {
			return [$end, $start];
		}

		return [$start, $end];
	}

	private static function tryEnsureDateTime(DateTimeInterface|int|float|string|null $value): ?DateTimeImmutable {
		try {
			return self::ensureDateTime($value);
		} catch(Throwable) {
			return null;
		}
	}
}
