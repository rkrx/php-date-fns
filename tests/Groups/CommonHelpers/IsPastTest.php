<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IsPastTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_if_date_is_in_past(): void {
		$pastDate = (new DateTimeImmutable())->modify('-1 second');
		$result = DateFns::isPast($pastDate);
		$this->assertTrue($result);
	}

	/**
	 * @test
	 */
	public function returns_false_if_date_is_in_future(): void {
		$futureDate = (new DateTimeImmutable())->modify('+1 second');
		$result = DateFns::isPast($futureDate);
		$this->assertFalse($result);
	}
}
