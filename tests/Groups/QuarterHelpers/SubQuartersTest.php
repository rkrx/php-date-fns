<?php

namespace DateFns\Groups\QuarterHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SubQuartersTest extends TestCase {
	/**
	 * @test
	 */
	public function subtracts_quarters(): void {
		$date = new DateTimeImmutable('2014-12-01');
		$result = DateFns::subQuarters($date, 1);

		$this->assertEquals('2014-09-01', $result->format('Y-m-d'));
	}
}
