<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use DateTimeZone;
use PHPUnit\Framework\TestCase;

class FormatISO9075Test extends TestCase {
	/**
	 * @test
	 */
	public function formats_iso_9075_extended_format(): void {
		$date = new DateTimeImmutable('2019-03-03 19:00:52', new DateTimeZone('UTC'));
		$result = DateFns::formatISO9075($date);
		$this->assertEquals('2019-03-03 19:00:52', $result);
	}

	/**
	 * @test
	 */
	public function accepts_timestamps(): void {
		$date = new DateTimeImmutable('2019-03-03 19:00:52', new DateTimeZone('UTC'));
		$timestamp = $date->getTimestamp();

		$result = DateFns::formatISO9075($timestamp);
		$this->assertEquals('2019-03-03 19:00:52', $result);
	}

	/**
	 * @test
	 */
	public function formats_iso_9075_basic_format(): void {
		$date = new DateTimeImmutable('2019-10-04 12:30:13', new DateTimeZone('UTC'));
		$result = DateFns::formatISO9075($date, ['format' => 'basic']);
		$this->assertEquals('20191004 123013', $result);
	}

	/**
	 * @test
	 */
	public function formats_only_date(): void {
		$date = new DateTimeImmutable('2019-12-11 01:00:00', new DateTimeZone('UTC'));

		$result = DateFns::formatISO9075($date, ['representation' => 'date', 'format' => 'extended']);
		$this->assertEquals('2019-12-11', $result);

		$resultBasic = DateFns::formatISO9075($date, ['representation' => 'date', 'format' => 'basic']);
		$this->assertEquals('20191211', $resultBasic);
	}

	/**
	 * @test
	 */
	public function formats_only_time(): void {
		$date = new DateTimeImmutable('2019-03-03 19:00:52', new DateTimeZone('UTC'));

		$result = DateFns::formatISO9075($date, ['representation' => 'time', 'format' => 'extended']);
		$this->assertEquals('19:00:52', $result);

		$resultBasic = DateFns::formatISO9075($date, ['representation' => 'time', 'format' => 'basic']);
		$this->assertEquals('190052', $resultBasic);
	}
}
