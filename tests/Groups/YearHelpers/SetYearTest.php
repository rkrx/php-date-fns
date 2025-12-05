<?php

namespace DateFns\Groups\YearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SetYearTest extends TestCase {
	/**
	 * @test
	 */
	public function sets_year(): void {
		$date = new DateTimeImmutable('2014-09-02 11:55:00');
		$result = DateFns::setYear($date, 2013);

		$this->assertEquals('2013-09-02 11:55:00', $result->format('Y-m-d H:i:s'));
	}
}
