<?php

namespace DateFns\Groups\SecondHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetSecondsTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_seconds_component(): void {
		$date = new DateTimeImmutable('2012-02-29 11:45:05.123');
		$this->assertSame(5, DateFns::getSeconds($date));
	}
}
