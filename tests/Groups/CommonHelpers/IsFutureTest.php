<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsFutureTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_if_date_is_in_future(): void {
		$futureDate = (new DateTimeImmutable())->modify('+1 second');
		$result = DateFns::isFuture($futureDate);
		$this->assertTrue($result);
	}

	/**
	 * @test
	 */
	public function returns_false_if_date_is_in_past(): void {
		$pastDate = (new DateTimeImmutable())->modify('-1 second');
		$result = DateFns::isFuture($pastDate);
		$this->assertFalse($result);
	}

	/**
	 * @test
	 */
	public function returns_false_if_date_is_now(): void {
		// "Now" is tricky due to microsecond differences.
		// But logic is > now.
		// If we create now, then pass it, time passes inside isFuture default check (new DateTimeImmutable).
		// So passed date (created earlier) is < inside date.
		// So isFuture should be false.

		$now = new DateTimeImmutable();
		$result = DateFns::isFuture($now);
		$this->assertFalse($result);
	}
}
