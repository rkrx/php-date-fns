<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use DateTimeZone;
use PHPUnit\Framework\TestCase;

class FormatRFC7231Test extends TestCase {
	/**
	 * @test
	 */
	public function formats_rfc_7231_date_string(): void {
		$date = new DateTimeImmutable('2019-03-03 19:00:52', new DateTimeZone('UTC'));
		$result = DateFns::formatRFC7231($date);
		$this->assertEquals('Sun, 03 Mar 2019 19:00:52 GMT', $result);
	}

	/**
	 * @test
	 */
	public function accepts_timestamps(): void {
		$date = new DateTimeImmutable('2019-10-04 12:30:13', new DateTimeZone('UTC'));
		$timestamp = $date->getTimestamp();

		$result = DateFns::formatRFC7231($timestamp);
		$this->assertEquals('Fri, 04 Oct 2019 12:30:13 GMT', $result);
	}
}
