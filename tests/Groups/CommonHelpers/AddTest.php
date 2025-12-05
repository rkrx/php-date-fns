<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTime;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class AddTest extends TestCase {
	/**
	 * @test
	 */
	public function adds_the_values_from_the_given_object(): void {
		$date = new DateTimeImmutable('2014-09-01 10:19:50');
		$result = DateFns::add($date, [
			'years' => 2,
			'months' => 9,
			'weeks' => 1,
			'days' => 7,
			'hours' => 5,
			'minutes' => 9,
			'seconds' => 30,
		]);

		// JS Result: Thu Jun 15 2017 15:29:20
		$this->assertEquals('2017-06-15 15:29:20', $result->format('Y-m-d H:i:s'));
	}

	/**
	 * @test
	 */
	public function supports_undefined_values_in_the_duration_object(): void {
		$date = new DateTimeImmutable('2014-09-01 10:19:50');
		$result = DateFns::add($date, [
			// years is undefined/missing
			'months' => 9,
			'weeks' => 1,
			'days' => 7,
			'hours' => 5,
			'minutes' => 9,
			'seconds' => 30,
		]);

		// JS Result: 2015-06-15 15:29:20
		$this->assertEquals('2015-06-15 15:29:20', $result->format('Y-m-d H:i:s'));
	}

	/**
	 * @test
	 */
	public function returns_same_date_object_when_passed_empty_duration(): void {
		$date = new DateTimeImmutable('2014-09-01 10:00:00');
		$result = DateFns::add($date, []);
		// Note: It returns a NEW object because it's immutable logic usually,
		// but if no changes, it MIGHT return same instance or equal instance.
		// assertEquals checks value equality.
		$this->assertEquals($date, $result);
		// But distinct instance if modified?
		// Logic: if totalMonths=0 etc, it doesn't call modify.
		// But ImmutableDateTimeFns wraps CommonHelpers.
		// If input is DateTimeImmutable and no changes, we might want to return same instance?
		// My implementation returns $date.
		// If $date was unmodified, it is the same instance?
		// Let's check logic:
		// if ($totalMonths !== 0) ...
		// if ($totalDays !== 0) ...
		// if ($timeString !== '') ...
		// If all 0, returns $date.
		// So strict equality should pass if input was Immutable.
		$this->assertSame($date, $result);
	}

	/**
	 * @test
	 */
	public function does_not_mutate_original_date(): void {
		$date = new DateTime('2014-09-01 10:00:00');
		$result = DateFns::add($date, ['hours' => 4]);

		$this->assertEquals('2014-09-01 10:00:00', $date->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-09-01 14:00:00', $result->format('Y-m-d H:i:s'));
		$this->assertInstanceOf(DateTimeImmutable::class, $result);
	}

	/**
	 * @test
	 */
	public function works_well_if_desired_month_has_fewer_days_and_provided_date_is_last_day_of_month(): void {
		$date = new DateTimeImmutable('2014-12-31 00:00:00');
		$result = DateFns::add($date, ['months' => 9]);

		// JS Result: 2015-09-30
		$this->assertEquals('2015-09-30 00:00:00', $result->format('Y-m-d H:i:s'));
	}

	/**
	 * @test
	 */
	public function handles_dates_before_100_AD(): void {
		// PHP DateTime year 0 behavior differs slightly from JS sometimes?
		// But let's try.
		// JS: new Date(0) is 1970.
		// JS setFullYear(-1, 10, 30).
		// PHP:
		$date = new DateTimeImmutable('0000-01-01 00:00:00');
		// Year -1 (2 BC)
		$date = $date->setDate(-1, 11, 30)->setTime(0, 0, 0);

		// Add 3 months -> Year 0, Feb 29.
		$result = DateFns::add($date, ['months' => 3]);

		// 0000-02-29
		$this->assertEquals('0000-02-29 00:00:00', $result->format('Y-m-d H:i:s'));
	}
}
