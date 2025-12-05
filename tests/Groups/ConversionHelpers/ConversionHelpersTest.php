<?php

namespace DateFns\Groups\ConversionHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class ConversionHelpersTest extends TestCase {
	/** @test */
	public function daysToWeeks(): void {
		$this->assertEquals(1, DateFns::daysToWeeks(7));
		$this->assertEquals(1, DateFns::daysToWeeks(8));
		$this->assertEquals(0, DateFns::daysToWeeks(6));
	}

	/** @test */
	public function hoursToMilliseconds(): void {
		$this->assertEquals(3600000, DateFns::hoursToMilliseconds(1));
	}

	/** @test */
	public function hoursToMinutes(): void {
		$this->assertEquals(60, DateFns::hoursToMinutes(1));
	}

	/** @test */
	public function hoursToSeconds(): void {
		$this->assertEquals(3600, DateFns::hoursToSeconds(1));
	}

	/** @test */
	public function millisecondsToHours(): void {
		$this->assertEquals(1, DateFns::millisecondsToHours(3600000));
		$this->assertEquals(0, DateFns::millisecondsToHours(3599999));
	}

	/** @test */
	public function millisecondsToMinutes(): void {
		$this->assertEquals(1, DateFns::millisecondsToMinutes(60000));
		$this->assertEquals(0, DateFns::millisecondsToMinutes(59999));
	}

	/** @test */
	public function millisecondsToSeconds(): void {
		$this->assertEquals(1, DateFns::millisecondsToSeconds(1000));
		$this->assertEquals(0, DateFns::millisecondsToSeconds(999));
	}

	/** @test */
	public function minutesToHours(): void {
		$this->assertEquals(1, DateFns::minutesToHours(60));
		$this->assertEquals(0, DateFns::minutesToHours(59));
	}

	/** @test */
	public function minutesToMilliseconds(): void {
		$this->assertEquals(60000, DateFns::minutesToMilliseconds(1));
	}

	/** @test */
	public function minutesToSeconds(): void {
		$this->assertEquals(60, DateFns::minutesToSeconds(1));
	}

	/** @test */
	public function monthsToQuarters(): void {
		$this->assertEquals(1, DateFns::monthsToQuarters(3));
		$this->assertEquals(0, DateFns::monthsToQuarters(2));
	}

	/** @test */
	public function monthsToYears(): void {
		$this->assertEquals(1, DateFns::monthsToYears(12));
		$this->assertEquals(0, DateFns::monthsToYears(11));
	}

	/** @test */
	public function quartersToMonths(): void {
		$this->assertEquals(3, DateFns::quartersToMonths(1));
	}

	/** @test */
	public function quartersToYears(): void {
		$this->assertEquals(1, DateFns::quartersToYears(4));
		$this->assertEquals(0, DateFns::quartersToYears(3));
	}

	/** @test */
	public function secondsToHours(): void {
		$this->assertEquals(1, DateFns::secondsToHours(3600));
		$this->assertEquals(0, DateFns::secondsToHours(3599));
	}

	/** @test */
	public function secondsToMilliseconds(): void {
		$this->assertEquals(1000, DateFns::secondsToMilliseconds(1));
	}

	/** @test */
	public function secondsToMinutes(): void {
		$this->assertEquals(1, DateFns::secondsToMinutes(60));
		$this->assertEquals(0, DateFns::secondsToMinutes(59));
	}

	/** @test */
	public function weeksToDays(): void {
		$this->assertEquals(7, DateFns::weeksToDays(1));
	}

	/** @test */
	public function yearsToDays(): void {
		$this->assertEquals(365, DateFns::yearsToDays(1));
		$this->assertEquals(1460, DateFns::yearsToDays(4)); // 1460.97 -> 1460
	}

	/** @test */
	public function yearsToMonths(): void {
		$this->assertEquals(12, DateFns::yearsToMonths(1));
	}

	/** @test */
	public function yearsToQuarters(): void {
		$this->assertEquals(4, DateFns::yearsToQuarters(1));
	}
}
