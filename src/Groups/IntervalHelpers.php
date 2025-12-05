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
	 * @param array{start: DateTimeInterface|string|int, end: DateTimeInterface|string|int} $intervalLeft
	 * @param array{start: DateTimeInterface|string|int, end: DateTimeInterface|string|int} $intervalRight
	 * @param array{inclusive?: bool} $options
	 * @return bool
	 */
	public static function areIntervalsOverlapping(array $intervalLeft, array $intervalRight, array $options = []): bool {
		$leftStart = self::ensureDateTime($intervalLeft['start']);
		$leftEnd = self::ensureDateTime($intervalLeft['end']);
		$rightStart = self::ensureDateTime($intervalRight['start']);
		$rightEnd = self::ensureDateTime($intervalRight['end']);

		if($leftStart > $leftEnd) {
			throw new RuntimeException('The start of an interval cannot be after its end');
		}
		if($rightStart > $rightEnd) {
			throw new RuntimeException('The start of an interval cannot be after its end');
		}

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
	 * @param array{start: DateTimeInterface|string|int, end: DateTimeInterface|string|int} $interval
	 * @return DateTimeImmutable
	 */
	public static function clamp($date, array $interval): DateTimeImmutable {
		$date = self::ensureDateTime($date);
		$start = self::ensureDateTime($interval['start']);
		$end = self::ensureDateTime($interval['end']);

		if($start > $end) {
			throw new RuntimeException('The start of an interval cannot be after its end');
		}

		if($date < $start) {
			return $start;
		}
		if($date > $end) {
			return $end;
		}

		return $date;
	}

	/**
	 * Return the array of dates within the specified time interval.
	 *
	 * @param array{start: DateTimeInterface|string|int, end: DateTimeInterface|string|int} $interval
	 * @param array{step?: int} $options
	 * @return DateTimeImmutable[]
	 */
	public static function eachDayOfInterval(array $interval, array $options = []): array {
		$start = self::ensureDateTime($interval['start']);
		$end = self::ensureDateTime($interval['end']);
		$step = $options['step'] ?? 1;

		if($step < 1) {
			throw new RuntimeException('Step must be a positive integer');
		}

		if($start > $end) {
			throw new RuntimeException('The start of an interval cannot be after its end');
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
	 * @param array{start: DateTimeInterface|string|int, end: DateTimeInterface|string|int} $interval
	 * @param array{step?: int} $options
	 * @return DateTimeImmutable[]
	 */
	public static function eachHourOfInterval(array $interval, array $options = []): array {
		$start = self::ensureDateTime($interval['start']);
		$end = self::ensureDateTime($interval['end']);
		$step = $options['step'] ?? 1;

		if($step < 1) {
			throw new RuntimeException('Step must be a positive integer');
		}

		if($start > $end) {
			throw new RuntimeException('The start of an interval cannot be after its end');
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
	 * @param array{start: DateTimeInterface|string|int, end: DateTimeInterface|string|int} $interval
	 * @param array{step?: int} $options
	 * @return DateTimeImmutable[]
	 */
	public static function eachMinuteOfInterval(array $interval, array $options = []): array {
		$start = self::ensureDateTime($interval['start']);
		$end = self::ensureDateTime($interval['end']);
		$step = $options['step'] ?? 1;

		if($step < 1) {
			throw new RuntimeException('Step must be a positive integer');
		}

		if($start > $end) {
			throw new RuntimeException('The start of an interval cannot be after its end');
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
	 * @param array{start: DateTimeInterface|string|int, end: DateTimeInterface|string|int} $interval
	 * @param array{step?: int} $options
	 * @return DateTimeImmutable[]
	 */
	public static function eachMonthOfInterval(array $interval, array $options = []): array {
		$start = self::ensureDateTime($interval['start']);
		$end = self::ensureDateTime($interval['end']);
		$step = $options['step'] ?? 1;

		if($step < 1) {
			throw new RuntimeException('Step must be a positive integer');
		}

		if($start > $end) {
			throw new RuntimeException('The start of an interval cannot be after its end');
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
	 * @param array{start: DateTimeInterface|string|int, end: DateTimeInterface|string|int} $interval
	 * @param array{step?: int} $options
	 * @return DateTimeImmutable[]
	 */
	public static function eachQuarterOfInterval(array $interval, array $options = []): array {
		$start = self::ensureDateTime($interval['start']);
		$end = self::ensureDateTime($interval['end']);
		$step = $options['step'] ?? 1;

		if($step < 1) {
			throw new RuntimeException('Step must be a positive integer');
		}

		if($start > $end) {
			throw new RuntimeException('The start of an interval cannot be after its end');
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
	 * @param array{start: DateTimeInterface|string|int, end: DateTimeInterface|string|int} $interval
	 * @param array{step?: int} $options
	 * @return DateTimeImmutable[]
	 */
	public static function eachYearOfInterval(array $interval, array $options = []): array {
		$start = self::ensureDateTime($interval['start']);
		$end = self::ensureDateTime($interval['end']);
		$step = $options['step'] ?? 1;

		if($step < 1) {
			throw new RuntimeException('Step must be a positive integer');
		}

		if($start > $end) {
			throw new RuntimeException('The start of an interval cannot be after its end');
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
	 * @param array{start: DateTimeInterface|string|int, end: DateTimeInterface|string|int} $interval
	 * @param array{step?: int, weekStartsOn?: int} $options
	 * @return DateTimeImmutable[]
	 */
	public static function eachWeekOfInterval(array $interval, array $options = []): array {
		$start = self::ensureDateTime($interval['start']);
		$end = self::ensureDateTime($interval['end']);
		$step = $options['step'] ?? 1;
		$weekStartsOn = $options['weekStartsOn'] ?? 0;

		if($step < 1) {
			throw new RuntimeException('Step must be a positive integer');
		}

		if($start > $end) {
			throw new RuntimeException('The start of an interval cannot be after its end');
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
	 * @param array{start: DateTimeInterface|string|int, end: DateTimeInterface|string|int} $interval
	 * @return DateTimeImmutable[]
	 */
	public static function eachWeekendOfInterval(array $interval): array {
		$start = self::ensureDateTime($interval['start']);
		$end = self::ensureDateTime($interval['end']);

		if($start > $end) {
			throw new RuntimeException('The start of an interval cannot be after its end');
		}

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
	 * @param array{start: DateTimeInterface|string|int, end: DateTimeInterface|string|int} $intervalLeft
	 * @param array{start: DateTimeInterface|string|int, end: DateTimeInterface|string|int} $intervalRight
	 * @return int
	 */
	public static function getOverlappingDaysInIntervals(array $intervalLeft, array $intervalRight): int {
		$leftStart = self::tryEnsureDateTime($intervalLeft['start']);
		$leftEnd = self::tryEnsureDateTime($intervalLeft['end']);
		$rightStart = self::tryEnsureDateTime($intervalRight['start']);
		$rightEnd = self::tryEnsureDateTime($intervalRight['end']);

		if($leftStart === null || $leftEnd === null || $rightStart === null || $rightEnd === null) {
			return 0;
		}

		if($leftStart > $leftEnd) {
			[$leftStart, $leftEnd] = [$leftEnd, $leftStart];
		}
		if($rightStart > $rightEnd) {
			[$rightStart, $rightEnd] = [$rightEnd, $rightStart];
		}

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
	public static function interval($start, $end, array $options = []): array {
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
	 * @param array{start: DateTimeInterface|string|int, end: DateTimeInterface|string|int} $interval
	 * @return bool
	 */
	public static function isWithinInterval($date, array $interval): bool {
		$target = self::tryEnsureDateTime($date);
		$start = self::tryEnsureDateTime($interval['start']);
		$end = self::tryEnsureDateTime($interval['end']);

		if($target === null || $start === null || $end === null) {
			return false;
		}

		$startTs = (float) $start->format('U.u');
		$endTs = (float) $end->format('U.u');

		if($startTs > $endTs) {
			[$startTs, $endTs] = [$endTs, $startTs];
		}

		$time = (float) $target->format('U.u');

		return $time >= $startTs && $time <= $endTs;
	}

	private static function tryEnsureDateTime(DateTimeInterface|int|float|string|null $value): ?DateTimeImmutable {
		try {
			return self::ensureDateTime($value);
		} catch(Throwable) {
			return null;
		}
	}
}
