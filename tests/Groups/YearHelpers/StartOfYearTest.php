<?php

namespace DateFns\Groups\YearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class StartOfYearTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_start_of_year(): void {
		$date = new DateTimeImmutable('2014-09-02 11:55:00');
		$result = DateFns::startOfYear($date);

		$this->assertEquals('2014-01-01 00:00:00', $result->format('Y-m-d H:i:s'));
	}
}
