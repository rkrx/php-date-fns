<?php

namespace DateFns\Groups\IntervalHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class ClampTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_date_within_interval(): void {
		$interval = ['start' => '2014-01-10', 'end' => '2014-01-20'];
		$date = '2014-01-15';

		$result = DateFns::clamp($date, $interval);

		$this->assertEquals('2014-01-15', $result->format('Y-m-d'));
	}

	/** @test */
	public function returns_start_date_if_date_is_before(): void {
		$interval = ['start' => '2014-01-10', 'end' => '2014-01-20'];
		$date = '2014-01-05';

		$result = DateFns::clamp($date, $interval);

		$this->assertEquals('2014-01-10', $result->format('Y-m-d'));
	}

	/** @test */
	public function returns_end_date_if_date_is_after(): void {
		$interval = ['start' => '2014-01-10', 'end' => '2014-01-20'];
		$date = '2014-01-25';

		$result = DateFns::clamp($date, $interval);

		$this->assertEquals('2014-01-20', $result->format('Y-m-d'));
	}
}
