<?php

namespace DateFns\Groups\YearHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class DifferenceInYearsTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_full_year_difference(): void {
		$later = new DateTimeImmutable('2014-12-31');
		$earlier = new DateTimeImmutable('2011-12-31');

		$this->assertSame(3, DateFns::differenceInYears($later, $earlier));
	}
}
