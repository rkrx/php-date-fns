<?php

namespace DateFns\Groups\YearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetYearTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_year(): void {
		$this->assertSame(2014, DateFns::getYear(new DateTimeImmutable('2014-07-02')));
	}
}
