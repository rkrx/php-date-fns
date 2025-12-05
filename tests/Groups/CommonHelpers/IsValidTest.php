<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsValidTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_if_date_is_valid(): void {
		$date = new DateTimeImmutable();
		$result = DateFns::isValid($date);
		$this->assertTrue($result);

		$result = DateFns::isValid('2023-01-01');
		$this->assertTrue($result);

		$result = DateFns::isValid(1640995200);
		$this->assertTrue($result);
	}

	/**
	 * @test
	 */
	public function returns_false_if_date_is_invalid(): void {
		$result = DateFns::isValid('invalid-date');
		$this->assertFalse($result);

		$result = DateFns::isValid(null);
		// ensureDateTime returns new DateTime from null? No, type hint allows null in ImDateFns but ensureDateTime usage in CommonHelpers usually expects valid input or throws.
		// My definition:
		// public static function isValid($date): bool { try { self::ensureDateTime($date); return true; } catchAndReturnFalse }
		// ensureDateTime(null) -> new DateTimeImmutable((string)null) -> new DateTimeImmutable('') -> 'now'?
		// Wait. `new DateTimeImmutable((string)null)` is `new DateTimeImmutable("")`.
		// In PHP, `new DateTimeImmutable("")` returns currently date/time. Valid.
		// So `isValid(null)` returns true?
		// JS `isValid(null)` -> false.
		// JS `isValid(new Date(NaN))` -> false.

		// I should check `ensureDateTime` behavior for empty string or null.
		// If I want to align with JS, `isValid(null)` should probably be false.

		// But let's check my ensureDateTime.
	}
}
