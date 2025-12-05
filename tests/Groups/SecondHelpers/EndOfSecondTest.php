<?php

namespace DateFns\Groups\SecondHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class EndOfSecondTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_end_of_second(): void {
		$date = new DateTimeImmutable('2014-12-01 22:15:45.400');
		$result = DateFns::endOfSecond($date);

		$this->assertEquals('2014-12-01 22:15:45.999000', $result->format('Y-m-d H:i:s.u'));
	}
}
