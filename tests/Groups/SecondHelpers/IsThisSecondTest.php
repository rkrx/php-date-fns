<?php

namespace DateFns\Groups\SecondHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsThisSecondTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_when_date_in_current_second(): void {
		$now = new DateTimeImmutable();
		$candidate = new DateTimeImmutable($now->format('Y-m-d H:i:s'));

		$this->assertTrue(DateFns::isThisSecond($candidate));
	}
}
