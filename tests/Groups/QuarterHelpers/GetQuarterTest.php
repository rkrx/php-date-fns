<?php

namespace DateFns\Groups\QuarterHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetQuarterTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_quarter_number(): void {
		$date = new DateTimeImmutable('2014-07-02'); // Q3
		$this->assertSame(3, DateFns::getQuarter($date));
	}
}
