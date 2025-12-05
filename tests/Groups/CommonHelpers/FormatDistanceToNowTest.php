<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class FormatDistanceToNowTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_distance_to_now_in_words(): void {
		$date = new DateTimeImmutable('now - 5 minutes');
		$result = DateFns::formatDistanceToNow($date);
		$this->assertEquals('5 minutes', $result);
	}

	/**
	 * @test
	 */
	public function works_with_add_suffix(): void {
		$date = new DateTimeImmutable('now - 5 minutes');
		$result = DateFns::formatDistanceToNow($date, ['addSuffix' => true]);
		// date is "5 minutes" before now.
		// formatDistance(date, now)
		// Comparison: date < now. So "ago".
		$this->assertEquals('5 minutes ago', $result);

		$dateFuture = new DateTimeImmutable('now + 5 minutes');
		$resultFuture = DateFns::formatDistanceToNow($dateFuture, ['addSuffix' => true]);
		$this->assertEquals('in 5 minutes', $resultFuture);
	}
}
