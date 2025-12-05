<?php

namespace DateFns\Groups\DecadeHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class EndOfDecadeTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_end_of_decade(): void {
		$date = new DateTimeImmutable('2014-02-11 11:55:00');
		$result = DateFns::endOfDecade($date);

		$this->assertEquals('2019-12-31 23:59:59.999000', $result->format('Y-m-d H:i:s.u'));
	}
}
