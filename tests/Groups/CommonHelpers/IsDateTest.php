<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTime;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsDateTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_if_value_is_date_object(): void {
		$date = new DateTimeImmutable();
		$this->assertTrue(DateFns::isDate($date));

		$dateMutable = new DateTime();
		$this->assertTrue(DateFns::isDate($dateMutable));
	}

	/**
	 * @test
	 */
	public function returns_false_if_value_is_not_date_object(): void {
		$this->assertFalse(DateFns::isDate('2023-01-01'));
		$this->assertFalse(DateFns::isDate(1640995200));
		$this->assertFalse(DateFns::isDate(null));
		$this->assertFalse(DateFns::isDate([]));
	}
}
