<?php

namespace DateFns\Groups\IntervalHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class EachWeekendOfIntervalTest extends TestCase {
	/** @test */
	public function returns_all_weekend_days_within_interval(): void {
		$interval = ['2014-10-06', '2014-10-20'];

		$result = DateFns::eachWeekendOfInterval(...$interval);

		$this->assertCount(4, $result);
		$this->assertEquals('2014-10-11 00:00:00', $result[0]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-12 00:00:00', $result[1]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-18 00:00:00', $result[2]->format('Y-m-d H:i:s'));
		$this->assertEquals('2014-10-19 00:00:00', $result[3]->format('Y-m-d H:i:s'));
	}
}
