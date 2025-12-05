<?php

namespace DateFns\Groups\GenericHelpers;

use DateFns\DateFns;
use DateTime;
use DateTimeImmutable;
use DateTimeZone;
use PHPUnit\Framework\TestCase;

class ConstructFromTest extends TestCase {
	/**
	 * @test
	 */
	public function uses_constructor_of_reference_date_immutable(): void {
		$reference = new DateTimeImmutable('2023-10-25 12:00:00');
		$value = new DateTimeImmutable('2023-10-26 12:00:00');

		$result = DateFns::constructFrom($reference, $value);

		$this->assertInstanceOf(DateTimeImmutable::class, $result);
		$this->assertEquals($value->format('Y-m-d H:i:s.u'), $result->format('Y-m-d H:i:s.u'));
	}

	/**
	 * @test
	 */
	public function uses_constructor_of_reference_date_mutable(): void {
		$reference = new DateTime('2023-10-25 12:00:00');
		$value = new DateTimeImmutable('2023-10-26 12:00:00');

		$result = DateFns::constructFrom($reference, $value);

		$this->assertInstanceOf(DateTime::class, $result);
		$this->assertEquals('2023-10-26 12:00:00', $result->format('Y-m-d H:i:s'));
	}

	/**
	 * @test
	 */
	public function falls_back_to_immutable_when_reference_missing(): void {
		$timestamp = 1609459200; // 2021-01-01 UTC
		$result = DateFns::constructFrom(null, $timestamp);

		$this->assertInstanceOf(DateTimeImmutable::class, $result);
		$this->assertEquals($timestamp, $result->getTimestamp());
	}

	/**
	 * @test
	 */
	public function supports_callable_context(): void {
		$result = DateFns::constructFrom(static fn(int $value) => (new DateTimeImmutable('@' . ($value + 3600)))->setTimezone(new DateTimeZone('UTC')), 0);

		$this->assertEquals(3600, $result->getTimestamp());
	}
}
