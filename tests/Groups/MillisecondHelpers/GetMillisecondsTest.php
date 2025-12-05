<?php

namespace DateFns\Groups\MillisecondHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class GetMillisecondsTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_millisecond_part(): void {
		$date = new DateTimeImmutable('2012-02-29 11:45:05.123');
		$this->assertSame(123, DateFns::getMilliseconds($date));
	}
}
