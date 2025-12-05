<?php

namespace DateFns\Groups\QuarterHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class EndOfQuarterTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_end_of_quarter(): void {
		$date = new DateTimeImmutable('2014-02-11 11:55:00');
		$result = DateFns::endOfQuarter($date);

		$this->assertEquals('2014-03-31 23:59:59.999000', $result->format('Y-m-d H:i:s.u'));
	}
}
