<?php

namespace DateFns\Groups\SecondHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class StartOfSecondTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_start_of_second(): void {
		$date = new DateTimeImmutable('2014-12-01 22:15:45.400');
		$result = DateFns::startOfSecond($date);

		$this->assertEquals('2014-12-01 22:15:45.000000', $result->format('Y-m-d H:i:s.u'));
	}
}
