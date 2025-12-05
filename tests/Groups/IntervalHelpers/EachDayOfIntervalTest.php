<?php

namespace DateFns\Groups\IntervalHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class EachDayOfIntervalTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_array_of_days_within_interval(): void {
		$start = '2014-10-06';
		$end = '2014-10-10';

		$result = DateFns::eachDayOfInterval(['start' => $start, 'end' => $end]);

		$this->assertCount(5, $result);
		$this->assertEquals('2014-10-06 00:00:00', $result[0]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-07 00:00:00', $result[1]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-08 00:00:00', $result[2]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-09 00:00:00', $result[3]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-10 00:00:00', $result[4]->format('Y-m-d H:i:s'));
	}

	/** @test */
	public function handles_step_option(): void {
		$start = '2014-10-06';
		$end = '2014-10-10';

		$result = DateFns::eachDayOfInterval(['start' => $start, 'end' => $end], ['step' => 2]);

		$this->assertCount(3, $result);
		$this->assertEquals('2014-10-06 00:00:00', $result[0]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-08 00:00:00', $result[1]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-10 00:00:00', $result[2]->format('Y-m-d H:i:s'));
	}
}
