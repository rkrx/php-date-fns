<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use DateTimeZone;
use PHPUnit\Framework\TestCase;

class FormatISOTest extends TestCase {
	/**
	 * @test
	 */
	public function formats_iso_8601_extended_format(): void {
		$date = new DateTimeImmutable('2019-03-03 19:00:52', new DateTimeZone('UTC'));
		// Z is for offset 0
		$result = DateFns::formatISO($date);
		$this->assertEquals('2019-03-03T19:00:52Z', $result);

		$dateWithOffset = new DateTimeImmutable('2019-03-03 19:00:52', new DateTimeZone('+08:00'));
		$resultWithOffset = DateFns::formatISO($dateWithOffset);
		$this->assertEquals('2019-03-03T19:00:52+08:00', $resultWithOffset);
	}

	/**
	 * @test
	 */
	public function formats_iso_8601_basic_format(): void {
		$date = new DateTimeImmutable('2019-10-04 12:30:13', new DateTimeZone('UTC'));
		$result = DateFns::formatISO($date, ['format' => 'basic']);
		$this->assertEquals('20191004T123013Z', $result);

		$dateWithOffset = new DateTimeImmutable('2019-10-04 12:30:13', new DateTimeZone('-04:00'));
		$resultWithOffset = DateFns::formatISO($dateWithOffset, ['format' => 'basic']);
		$this->assertEquals('20191004T123013-04:00', $resultWithOffset);
	}

	/**
	 * @test
	 */
	public function formats_only_date(): void {
		$date = new DateTimeImmutable('2019-12-11 01:00:00', new DateTimeZone('UTC'));

		$result = DateFns::formatISO($date, ['representation' => 'date', 'format' => 'extended']);
		$this->assertEquals('2019-12-11', $result);

		$resultBasic = DateFns::formatISO($date, ['representation' => 'date', 'format' => 'basic']);
		$this->assertEquals('20191211', $resultBasic);
	}

	/**
	 * @test
	 */
	public function formats_only_time(): void {
		$date = new DateTimeImmutable('2019-03-03 19:00:52', new DateTimeZone('UTC'));

		$result = DateFns::formatISO($date, ['representation' => 'time', 'format' => 'extended']);
		$this->assertEquals('19:00:52Z', $result);

		$resultBasic = DateFns::formatISO($date, ['representation' => 'time', 'format' => 'basic']);
		$this->assertEquals('190052Z', $resultBasic);

		$dateWithOffset = new DateTimeImmutable('2019-03-03 19:00:52', new DateTimeZone('+02:00'));
		$resultOffset = DateFns::formatISO($dateWithOffset, ['representation' => 'time', 'format' => 'extended']);
		$this->assertEquals('19:00:52+02:00', $resultOffset);
	}

	/**
	 * @test
	 */
	public function accepts_timestamps(): void {
		$date = new DateTimeImmutable('2019-03-03 19:00:52', new DateTimeZone('UTC'));
		$timestamp = $date->getTimestamp();

		// When passing timestamp, ensureDateTime uses default timezone usually, or constructs from @timestamp which is UTC.
		// ensureDateTime logic: return new DateTimeImmutable('@'.(int)$date);
		// This creates a Date in UTC.

		$result = DateFns::formatISO($timestamp);
		$this->assertEquals('2019-03-03T19:00:52Z', $result);
	}
}
