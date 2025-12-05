<?php

namespace DateFns\Groups\GenericHelpers;

use DateFns\DateFns;
use DateTime;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class ConstructNowTest extends TestCase {
	/**
	 * @test
	 */
	public function uses_reference_constructor_and_returns_now(): void {
		$result = DateFns::constructNow(new DateTimeImmutable());
		$this->assertInstanceOf(DateTimeImmutable::class, $result);
		$this->assertLessThan(2, abs($result->getTimestamp() - (new DateTimeImmutable())->getTimestamp()));
	}

	/**
	 * @test
	 */
	public function uses_mutable_constructor_when_given(): void {
		$result = DateFns::constructNow(new DateTime());
		$this->assertInstanceOf(DateTime::class, $result);
	}
}
