<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use DateTimeZone;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class ParseTest extends TestCase {
	/**
	 * @test
	 */
	public function parses_date_using_pattern(): void {
		// Reference date: 2010-01-01
		$ref = new DateTimeImmutable('2010-01-01 00:00:00', new DateTimeZone('UTC'));

		// Parse '02/11/2014' with 'MM/dd/yyyy'
		$result = DateFns::parse('02/11/2014', 'MM/dd/yyyy', $ref);

		$this->assertEquals('2014-02-11 00:00:00', $result->format('Y-m-d H:i:s'));
	}

	/**
	 * @test
	 */
	public function uses_reference_date_for_missing_parts(): void {
		$ref = new DateTimeImmutable('2010-01-01 12:30:00', new DateTimeZone('UTC'));

		// Parse '04' day. Year/Month should come from ref.
		// Pattern: dd
		$result = DateFns::parse('04', 'dd', $ref);

		$this->assertEquals('2010-01-04 12:30:00', $result->format('Y-m-d H:i:s'));
	}

	/**
	 * @test
	 */
	public function parses_time_only(): void {
		$ref = new DateTimeImmutable('2010-01-01 00:00:00', new DateTimeZone('UTC'));

		// 'HH:mm'
		$result = DateFns::parse('14:30', 'HH:mm', $ref);

		$this->assertEquals('2010-01-01 14:30:00', $result->format('Y-m-d H:i:s'));
	}

	/**
	 * @test
	 */
	public function throws_on_invalid_format(): void {
		$ref = new DateTimeImmutable();
		$this->expectException(RuntimeException::class);

		DateFns::parse('invalid', 'yyyy', $ref);
	}
}
