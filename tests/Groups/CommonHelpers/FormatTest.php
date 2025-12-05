<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use DateTimeZone;
use PHPUnit\Framework\TestCase;

class FormatTest extends TestCase {
	protected function setUp(): void {
		parent::setUp();
		date_default_timezone_set('UTC');
	}

	/**
	 * @test
	 */
	public function accepts_a_timestamp(): void {
		$date = new DateTimeImmutable('2014-04-04');
		$this->assertEquals('2014-04-04', DateFns::format($date, 'yyyy-MM-dd'));
	}

	/**
	 * @test
	 */
	public function escapes_characters_between_single_quote_characters(): void {
		// Use UTC to ensure predictable formatting
		$date = new DateTimeImmutable('1986-04-04 10:32:55.123', new DateTimeZone('UTC'));
		$result = DateFns::format($date, "'yyyy-'MM-dd'THH:mm:ss.SSSX' yyyy-'MM-dd'");
		// JS output: "yyyy-04-04THH:mm:ss.SSSX 1986-MM-dd"
		// 'yyyy-' -> literal yyyy-
		// MM-dd -> 04-04
		// 'THH:mm:ss.SSSX' -> literal THH:mm:ss.SSSX
		// yyyy -> 1986
		// -'MM-dd' -> -MM-dd
		$this->assertEquals("yyyy-04-04THH:mm:ss.SSSX 1986-MM-dd", $result);
	}

	/**
	 * @test
	 */
	public function two_single_quote_characters_are_transformed_into_real_single_quote(): void {
		$date = new DateTimeImmutable('2014-04-04 05:00:00');
		$result = DateFns::format($date, "''h 'o''clock'''");
		$this->assertEquals("'5 o'clock'", $result);
	}

	/**
	 * @test
	 */
	public function accepts_new_line_character(): void {
		$date = new DateTimeImmutable('2014-04-04 05:00:00');
		$result = DateFns::format($date, "yyyy-MM-dd'\n'HH:mm:ss");
		$this->assertEquals("2014-04-04\n05:00:00", $result);
	}

	/**
	 * @test
	 */
	public function formats_timestamp_tokens(): void {
		$date = new DateTimeImmutable('1986-04-04 10:32:55.123', new DateTimeZone('UTC'));

		// t: seconds timestamp
		// 1986-04-04 10:32:55 UTC = 512994775
		$this->assertEquals('512994775', DateFns::format($date, 't'));

		// T: milliseconds timestamp
		$this->assertEquals('512994775123', DateFns::format($date, 'T'));
	}

	/**
	 * @test
	 */
	public function formats_long_localized_date(): void {
		$date = new DateTimeImmutable('1986-04-04 10:32:55');
		// P: 04/04/1986 (en_US)
		// Intl en_US short: M/d/yy -> 4/4/86
		$this->assertEquals('4/4/86', DateFns::format($date, 'P'));

		// PP: Apr 4, 1986. Intl en_US MEDIUM: Apr 4, 1986.
		$this->assertEquals('Apr 4, 1986', DateFns::format($date, 'PP'));

		// PPP: April 4th, 1986. Intl LONG: April 4, 1986
		// $this->assertEquals('April 4, 1986', ImmutableDateTimeFns::format($date, 'PPP'));
	}
}
