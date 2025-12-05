<?php

namespace DateFns\Groups\DayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class AddBusinessDaysTest extends TestCase {
	/**
	 * @test
	 */
	public function skips_weekends_when_adding(): void {
		$date = new DateTimeImmutable('2014-09-01'); // Monday
		$result = DateFns::addBusinessDays($date, 10);

		$this->assertEquals('2014-09-15', $result->format('Y-m-d')); // also Monday, skipping weekends
	}

	/**
	 * @test
	 */
	public function handles_negative_amount(): void {
		$date = new DateTimeImmutable('2014-09-15'); // Monday
		$result = DateFns::addBusinessDays($date, -10);

		$this->assertEquals('2014-09-01', $result->format('Y-m-d'));
	}
}
