<?php

namespace DateFns\Groups\DecadeHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class LastDayOfDecadeTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_last_day_of_decade(): void {
		$date = new DateTimeImmutable('2014-02-11 11:55:00');
		$result = DateFns::lastDayOfDecade($date);

		$this->assertEquals('2019-12-31 00:00:00', $result->format('Y-m-d H:i:s'));
	}
}
