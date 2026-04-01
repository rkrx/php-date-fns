<?php

namespace DateFns\Groups\IntervalHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class EachYearOfIntervalTest extends TestCase {
	/** @test */
	public function returns_array_of_years_within_interval(): void {
		$start = '2014-02-06';
		$end = '2017-08-10';
		$interval = [$start, $end];

		$result = DateFns::eachYearOfInterval(...$interval);

		$this->assertCount(4, $result);
		$this->assertEquals('2014-01-01 00:00:00', $result[0]->format('Y-m-d H:i:s'));
		$this->assertEquals('2015-01-01 00:00:00', $result[1]->format('Y-m-d H:i:s'));
		$this->assertEquals('2016-01-01 00:00:00', $result[2]->format('Y-m-d H:i:s'));
		$this->assertEquals('2017-01-01 00:00:00', $result[3]->format('Y-m-d H:i:s'));
	}
}
