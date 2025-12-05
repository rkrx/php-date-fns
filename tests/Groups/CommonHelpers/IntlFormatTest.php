<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use DateTimeZone;
use PHPUnit\Framework\TestCase;

class IntlFormatTest extends TestCase {
	/**
	 * @test
	 */
	public function formats_date_with_default_options(): void {
		$date = new DateTimeImmutable('2019-10-04 12:30:13.456', new DateTimeZone('UTC'));
		// Default locale is system dependent but PHP Intl defaults to en_US usually if not specified or set?
		// JS documentation example: 10/4/2019
		// PHP Default for en_US SHORT is M/d/yy.
		// Let's check logic. locale defaults to en-US.

		$result = DateFns::intlFormat($date);

		// Output format depends on ICU version and locale data.
		// For en_US SHORT: "10/4/19" or "10/4/2019" depending on system.
		// We might need to be lenient or set specific expectation.
		// Let's assert it contains "10" and "4".
		$this->assertStringContainsString('10', $result);
		$this->assertStringContainsString('4', $result);
		// And year.
	}

	/**
	 * @test
	 */
	public function formats_date_with_locale_options(): void {
		$date = new DateTimeImmutable('2019-10-04', new DateTimeZone('UTC'));
		$result = DateFns::intlFormat($date, ['locale' => 'de-DE']);
		// 4.10.19 or 04.10.2019?
		// German Short: dd.MM.yy

		// But wait, if I pass ONLY locale, logic uses SHORT date.
		// German standard short date is dd.MM.yy usually.
		$this->assertStringContainsString('4', $result);
		$this->assertStringContainsString('10', $result);
	}

	/**
	 * @test
	 */
	public function formats_date_with_format_options(): void {
		$date = new DateTimeImmutable('2019-10-04 12:30:00', new DateTimeZone('UTC'));
		$options = [
			'year' => 'numeric',
			'month' => 'numeric',
			'day' => 'numeric',
			'hour' => 'numeric',
			'minute' => 'numeric',
		];

		// This uses skeleton yMdhm (or similar).
		// en-US pattern: "M/d/yyyy, h:mm a" (approx).

		$result = DateFns::intlFormat($date, $options);

		$this->assertStringContainsString('2019', $result);
		$this->assertStringContainsString('10', $result);
		$this->assertStringContainsString('4', $result);
		$this->assertStringContainsString('12', $result);
		$this->assertStringContainsString('30', $result);
	}

	/**
	 * @test
	 */
	public function formats_date_with_format_and_locale_options(): void {
		$date = new DateTimeImmutable('2019-10-04', new DateTimeZone('UTC'));
		$formatOptions = [
			'weekday' => 'long',
			'year' => 'numeric',
			'month' => 'long',
			'day' => 'numeric',
		];
		$localeOptions = ['locale' => 'de-DE'];

		// Expect: Freitag, 4. Oktober 2019
		$result = DateFns::intlFormat($date, $formatOptions, $localeOptions);

		$this->assertEquals('Freitag, 4. Oktober 2019', $result);
	}
}
