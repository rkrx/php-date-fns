<?php

namespace DateFns\Groups\YearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class EachWeekendOfYearTest extends TestCase {
	/**
	 * @test
	 */
	public function lists_weekends_in_year(): void {
		$result = DateFns::eachWeekendOfYear(new DateTimeImmutable('2014-01-01'));
		$this->assertSame(104, count($result)); // 52 weeks * 2 days
	}
}
