<?php

namespace DateFns\Groups\YearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SubYearsTest extends TestCase {
	/**
	 * @test
	 */
	public function subtracts_years(): void {
		$date = new DateTimeImmutable('2014-09-01');
		$result = DateFns::subYears($date, 5);

		$this->assertEquals('2009-09-01', $result->format('Y-m-d'));
	}
}
