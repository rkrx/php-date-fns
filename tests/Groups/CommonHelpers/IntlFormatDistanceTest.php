<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IntlFormatDistanceTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_now_for_same_dates(): void {
		$date = new DateTimeImmutable('1986-04-05 10:30:00');

		$result = DateFns::intlFormatDistance($date, $date);

		$this->assertSame('now', $result);
	}

	/**
	 * @test
	 */
	public function formats_seconds_and_minutes(): void {
		$future = DateFns::intlFormatDistance(
			new DateTimeImmutable('1986-04-05 10:30:01'),
			new DateTimeImmutable('1986-04-05 10:30:00')
		);
		$past = DateFns::intlFormatDistance(
			new DateTimeImmutable('1986-04-05 10:29:00'),
			new DateTimeImmutable('1986-04-05 10:30:30')
		);

		$this->assertSame('in 1 second', $future);
		$this->assertSame('1 minute ago', $past);
	}

	/**
	 * @test
	 */
	public function uses_hours_and_calendar_days(): void {
		$hours = DateFns::intlFormatDistance(
			new DateTimeImmutable('1986-04-05 12:30:00'),
			new DateTimeImmutable('1986-04-05 10:15:00')
		);
		$tomorrow = DateFns::intlFormatDistance(
			new DateTimeImmutable('1986-04-06 10:30:00'),
			new DateTimeImmutable('1986-04-05 10:30:00')
		);
		$yesterday = DateFns::intlFormatDistance(
			new DateTimeImmutable('1986-04-05 10:30:00'),
			new DateTimeImmutable('1986-04-06 10:30:00')
		);

		$this->assertSame('in 2 hours', $hours);
		$this->assertSame('tomorrow', $tomorrow);
		$this->assertSame('yesterday', $yesterday);
	}

	/**
	 * @test
	 */
	public function picks_weeks_months_quarters_and_years(): void {
		$nextWeek = DateFns::intlFormatDistance(
			new DateTimeImmutable('1986-04-15'),
			new DateTimeImmutable('1986-04-05')
		);
		$nextMonth = DateFns::intlFormatDistance(
			new DateTimeImmutable('1986-05-10'),
			new DateTimeImmutable('1986-04-05')
		);
		$nextQuarter = DateFns::intlFormatDistance(
			new DateTimeImmutable('1986-12-05'),
			new DateTimeImmutable('1986-04-05')
		);
		$nextYear = DateFns::intlFormatDistance(
			new DateTimeImmutable('1987-06-01'),
			new DateTimeImmutable('1986-01-01')
		);

		$this->assertSame('next week', $nextWeek);
		$this->assertSame('next month', $nextMonth);
		$this->assertSame('in 2 quarters', $nextQuarter);
		$this->assertSame('next year', $nextYear);
	}

	/**
	 * @test
	 */
	public function respects_unit_option(): void {
		$minutes = DateFns::intlFormatDistance(
			new DateTimeImmutable('1986-04-04 11:30:00'),
			new DateTimeImmutable('1986-04-04 10:30:00'),
			['unit' => 'minute']
		);
		$quarters = DateFns::intlFormatDistance(
			new DateTimeImmutable('1987-06-04 10:30:00'),
			new DateTimeImmutable('1986-03-04 10:30:00'),
			['unit' => 'quarter']
		);

		$this->assertSame('in 60 minutes', $minutes);
		$this->assertSame('in 5 quarters', $quarters);
	}

	/**
	 * @test
	 */
	public function numeric_always_overrides_special_words(): void {
		$result = DateFns::intlFormatDistance(
			new DateTimeImmutable('1986-04-06 10:30:00'),
			new DateTimeImmutable('1986-04-05 10:30:00'),
			['numeric' => 'always']
		);

		$this->assertSame('in 1 day', $result);
	}

	/**
	 * @test
	 */
	public function supports_short_style_labels(): void {
		$result = DateFns::intlFormatDistance(
			new DateTimeImmutable('1986-04-01'),
			new DateTimeImmutable('1986-04-15'),
			['unit' => 'week', 'style' => 'short']
		);

		$this->assertSame('2 wk ago', $result);
	}

	/**
	 * @test
	 */
	public function accepts_locale_option(): void {
		$result = DateFns::intlFormatDistance(
			new DateTimeImmutable('1986-05-04 10:30:00'),
			new DateTimeImmutable('1986-04-04 10:30:00'),
			['locale' => 'de-DE']
		);

		$this->assertNotEmpty($result);
	}
}
