<?php

namespace DateFns\Groups\DayHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetDateTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_day_of_month(): void {
		$date = new DateTimeImmutable('2012-02-29');
		$this->assertSame(29, DateFns::getDate($date));
	}
}
