<?php

namespace DateFns\Groups\MonthHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class EndOfMonthTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_end_of_month(): void {
		$date = new DateTimeImmutable('2014-02-11 11:55:00');
		$result = DateFns::endOfMonth($date);

		$this->assertEquals('2014-02-28 23:59:59.999000', $result->format('Y-m-d H:i:s.u'));
	}
}
