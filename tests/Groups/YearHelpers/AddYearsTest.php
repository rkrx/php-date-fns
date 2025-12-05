<?php

namespace DateFns\Groups\YearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class AddYearsTest extends TestCase {
	/**
	 * @test
	 */
	public function adds_years(): void {
		$date = new DateTimeImmutable('2014-09-01');
		$result = DateFns::addYears($date, 5);

		$this->assertEquals('2019-09-01', $result->format('Y-m-d'));
	}
}
