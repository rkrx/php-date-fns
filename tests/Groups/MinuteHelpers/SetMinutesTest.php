<?php

namespace DateFns\Groups\MinuteHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SetMinutesTest extends TestCase {
	/**
	 * @test
	 */
	public function sets_minutes_component(): void {
		$date = new DateTimeImmutable('2014-09-01 11:30:40');
		$result = DateFns::setMinutes($date, 45);

		$this->assertEquals('2014-09-01 11:45:40', $result->format('Y-m-d H:i:s'));
	}
}
