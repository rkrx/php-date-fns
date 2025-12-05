<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class FormatDistanceToNowStrictTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_strict_distance_to_now(): void {
		$date = new DateTimeImmutable('now - 5 minutes');
		$result = DateFns::formatDistanceToNowStrict($date);
		$this->assertEquals('5 minutes', $result);
	}

	/**
	 * @test
	 */
	public function works_with_add_suffix(): void {
		$date = new DateTimeImmutable('now - 5 minutes');
		$result = DateFns::formatDistanceToNowStrict($date, ['addSuffix' => true]);
		$this->assertEquals('5 minutes ago', $result);

		$dateFuture = new DateTimeImmutable('now + 5 minutes');
		$resultFuture = DateFns::formatDistanceToNowStrict($dateFuture, ['addSuffix' => true]);
		$this->assertEquals('in 5 minutes', $resultFuture);
	}

	/**
	 * @test
	 */
	public function works_with_unit(): void {
		$date = new DateTimeImmutable('now - 120 seconds');
		$result = DateFns::formatDistanceToNowStrict($date, ['unit' => 'minute']);
		$this->assertEquals('2 minutes', $result);
	}
}
