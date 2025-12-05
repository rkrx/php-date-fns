<?php

namespace DateFns\Groups\WeekHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class AddWeeksTest extends TestCase {
	/**
	 * @test
	 */
	public function adds_weeks(): void {
		$date = new DateTimeImmutable('2014-09-01');
		$result = DateFns::addWeeks($date, 4);

		$this->assertEquals('2014-09-29', $result->format('Y-m-d'));
	}
}
