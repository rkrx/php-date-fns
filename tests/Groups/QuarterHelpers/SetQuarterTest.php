<?php

namespace DateFns\Groups\QuarterHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SetQuarterTest extends TestCase {
	/**
	 * @test
	 */
	public function sets_quarter_preserving_day_when_possible(): void {
		$date = new DateTimeImmutable('2014-11-30'); // Q4
		$result = DateFns::setQuarter($date, 1);

		$this->assertEquals('2014-02-28', $result->format('Y-m-d'));
	}
}
