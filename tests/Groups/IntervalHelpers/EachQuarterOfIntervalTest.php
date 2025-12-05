<?php

namespace DateFns\Groups\IntervalHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class EachQuarterOfIntervalTest extends TestCase {
	/** @test */
	public function returns_array_of_quarters_within_interval(): void {
		$start = '2014-02-06';
		$end = '2014-11-10'; // Feb is Q1, Nov is Q4

		$result = DateFns::eachQuarterOfInterval(['start' => $start, 'end' => $end]);

		$this->assertCount(4, $result);
		$this->assertEquals('2014-01-01 00:00:00', $result[0]->format('Y-m-d H:i:s')); // Q1
		$this->assertEquals('2014-04-01 00:00:00', $result[1]->format('Y-m-d H:i:s')); // Q2
		$this->assertEquals('2014-07-01 00:00:00', $result[2]->format('Y-m-d H:i:s')); // Q3
		$this->assertEquals('2014-10-01 00:00:00', $result[3]->format('Y-m-d H:i:s')); // Q4
	}
}
