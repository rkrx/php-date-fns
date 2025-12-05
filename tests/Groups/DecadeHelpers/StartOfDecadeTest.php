<?php

namespace DateFns\Groups\DecadeHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class StartOfDecadeTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_start_of_decade(): void {
		$date = new DateTimeImmutable('2014-09-02 11:55:00');
		$result = DateFns::startOfDecade($date);

		$this->assertEquals('2010-01-01 00:00:00', $result->format('Y-m-d H:i:s'));
	}
}
