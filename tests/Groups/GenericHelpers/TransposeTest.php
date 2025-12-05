<?php

namespace DateFns\Groups\GenericHelpers;

use DateFns\DateFns;
use DateTime;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class TransposeTest extends TestCase {
	/**
	 * @test
	 */
	public function transposes_to_mutable_constructor(): void {
		$date = new DateTimeImmutable('2022-07-10 12:34:56.789000');
		$result = DateFns::transpose($date, DateTime::class);

		$this->assertInstanceOf(DateTime::class, $result);
		$this->assertEquals($date->format('Y-m-d H:i:s.u'), $result->format('Y-m-d H:i:s.u'));
	}

	/**
	 * @test
	 */
	public function transposes_using_callable_context(): void {
		$date = new DateTimeImmutable('2022-07-10 12:34:56.789000');
		$result = DateFns::transpose($date, fn() => new DateTimeImmutable('@0'));

		$this->assertInstanceOf(DateTimeImmutable::class, $result);
		$this->assertEquals($date->format('Y-m-d H:i:s.u'), $result->format('Y-m-d H:i:s.u'));
	}
}
