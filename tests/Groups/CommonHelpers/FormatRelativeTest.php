<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use DateTimeZone;
use PHPUnit\Framework\TestCase;

class FormatRelativeTest extends TestCase {
	private DateTimeImmutable $baseDate;

	protected function setUp(): void {
		$this->baseDate = new DateTimeImmutable('1986-04-04 10:32:00', new DateTimeZone('UTC'));
	}

	/**
	 * @test
	 */
	public function format_relative_before_the_last_week(): void {
		$date = new DateTimeImmutable('1986-03-28 16:50:00', new DateTimeZone('UTC'));
		$result = DateFns::formatRelative($date, $this->baseDate);
		// Expect standard Intl SHORT date format for en_US. Likely M/d/yy or M/d/y.
		// Let's assert matching a pattern or just check basic structure.
		// Actually, we can check what simple format('P') returns.
		$this->assertMatchesRegularExpression('/\d{1,2}\/\d{1,2}\/\d{2,4}/', $result);
	}

	/**
	 * @test
	 */
	public function format_relative_last_week(): void {
		$date = new DateTimeImmutable('1986-04-01 12:00:00', new DateTimeZone('UTC')); // Tuesday
		$result = DateFns::formatRelative($date, $this->baseDate);
		// Normalize ICU narrow non-breaking space (U+202F) to regular space
		$result = str_replace("\u{202F}", ' ', $result);
		$this->assertEquals('last Tuesday at 12:00 PM', $result);
	}

	/**
	 * @test
	 */
	public function format_relative_yesterday(): void {
		$date = new DateTimeImmutable('1986-04-03 22:22:00', new DateTimeZone('UTC'));
		$result = DateFns::formatRelative($date, $this->baseDate);
		$result = str_replace("\u{202F}", ' ', $result);
		$this->assertEquals('yesterday at 10:22 PM', $result);
	}

	/**
	 * @test
	 */
	public function format_relative_today(): void {
		$date = new DateTimeImmutable('1986-04-04 16:50:00', new DateTimeZone('UTC'));
		$result = DateFns::formatRelative($date, $this->baseDate);
		$result = str_replace("\u{202F}", ' ', $result);
		$this->assertEquals('today at 4:50 PM', $result);
	}

	/**
	 * @test
	 */
	public function format_relative_tomorrow(): void {
		$date = new DateTimeImmutable('1986-04-05 07:30:00', new DateTimeZone('UTC'));
		$result = DateFns::formatRelative($date, $this->baseDate);
		$result = str_replace("\u{202F}", ' ', $result);
		$this->assertEquals('tomorrow at 7:30 AM', $result);
	}

	/**
	 * @test
	 */
	public function format_relative_next_week(): void {
		$date = new DateTimeImmutable('1986-04-06 12:00:00', new DateTimeZone('UTC')); // Sunday
		$result = DateFns::formatRelative($date, $this->baseDate);
		$result = str_replace("\u{202F}", ' ', $result);
		$this->assertEquals('Sunday at 12:00 PM', $result);
	}

	/**
	 * @test
	 */
	public function format_relative_after_next_week(): void {
		$date = new DateTimeImmutable('1986-04-11 16:50:00', new DateTimeZone('UTC'));
		$result = DateFns::formatRelative($date, $this->baseDate);
		$this->assertMatchesRegularExpression('/\d{1,2}\/\d{1,2}\/\d{2,4}/', $result);
	}
}
