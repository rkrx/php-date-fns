<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class LightFormatTest extends TestCase {
	/**
	 * @test
	 */
	public function formats_date_with_light_tokens(): void {
		$date = new DateTimeImmutable('2023-09-05 14:30:15');

		$this->assertEquals('2023-09-05', DateFns::lightFormat($date, 'yyyy-MM-dd'));
		$this->assertEquals('05.09.2023', DateFns::lightFormat($date, 'dd.MM.yyyy'));
		$this->assertEquals('14:30', DateFns::lightFormat($date, 'HH:mm'));
		$this->assertEquals('02:30 PM', DateFns::lightFormat($date, 'hh:mm a'));
		// Wait, I mapped 'hh' in replacement logic?
		// I checked: 'HH', 'H', 'mm', 'm', 'ss', 's', 'a'.
		// 'hh' not mapped in my manual replace map:
		/*
		'HH' => 'H'
		'H' => 'G'
		'mm' => 'i'
		...
		*/
		// I need to support 'hh' (12-hour padded) in lightFormat too if I want full lightFormat compatibility.
		// date-fns lightFormat tokens: y, M, d, a, H, h, m, s, S.
		// I missed 'h' and 'hh'.
	}
}
