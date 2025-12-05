<?php

namespace DateFns\Groups\YearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class EndOfYearTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_end_of_year(): void {
		$date = new DateTimeImmutable('2014-02-11 11:55:00');
		$result = DateFns::endOfYear($date);

		$this->assertEquals('2014-12-31 23:59:59.999000', $result->format('Y-m-d H:i:s.u'));
	}
}
