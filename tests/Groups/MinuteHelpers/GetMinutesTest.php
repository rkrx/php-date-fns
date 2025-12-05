<?php

namespace DateFns\Groups\MinuteHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetMinutesTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_minutes_component(): void {
		$date = new DateTimeImmutable('2012-02-29 11:45:05');
		$this->assertSame(45, DateFns::getMinutes($date));
	}
}
