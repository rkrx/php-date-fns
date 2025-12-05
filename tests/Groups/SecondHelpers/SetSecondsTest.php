<?php

namespace DateFns\Groups\SecondHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SetSecondsTest extends TestCase {
	/**
	 * @test
	 */
	public function sets_seconds_component(): void {
		$date = new DateTimeImmutable('2014-09-01 11:30:40');
		$result = DateFns::setSeconds($date, 45);

		$this->assertEquals('2014-09-01 11:30:45', $result->format('Y-m-d H:i:s'));
	}
}
