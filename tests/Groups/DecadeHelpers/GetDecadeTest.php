<?php

namespace DateFns\Groups\DecadeHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetDecadeTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_decade_start_year(): void {
		$date = new DateTimeImmutable('2014-09-02 11:55:00');
		$this->assertEquals(2010, DateFns::getDecade($date));
	}

	/**
	 * @test
	 */
	public function handles_turn_of_century(): void {
		$date = new DateTimeImmutable('2001-01-01 00:00:00');
		$this->assertEquals(2000, DateFns::getDecade($date));
	}
}
