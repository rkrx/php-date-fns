<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class FormatDurationTest extends TestCase {
	/**
	 * @test
	 */
	public function formats_full_duration(): void {
		$duration = [
			'years' => 2,
			'months' => 9,
			'weeks' => 1,
			'days' => 7,
			'hours' => 5,
			'minutes' => 9,
			'seconds' => 30,
		];
		$result = DateFns::formatDuration($duration);
		$this->assertEquals('2 years 9 months 1 week 7 days 5 hours 9 minutes 30 seconds', $result);
	}

	/**
	 * @test
	 */
	public function formats_partial_duration(): void {
		$duration = ['months' => 9, 'days' => 2];
		$result = DateFns::formatDuration($duration);
		$this->assertEquals('9 months 2 days', $result);
	}

	/**
	 * @test
	 */
	public function allows_to_customize_the_format(): void {
		$duration = [
			'years' => 2,
			'months' => 9,
			'weeks' => 1,
			'days' => 7,
			'hours' => 5,
			'minutes' => 9,
			'seconds' => 30,
		];
		$result = DateFns::formatDuration($duration, ['format' => ['months', 'weeks']]);
		$this->assertEquals('9 months 1 week', $result);
	}

	/**
	 * @test
	 */
	public function does_not_include_zeros_by_default(): void {
		$duration = [
			'years' => 0,
			'months' => 0,
			'weeks' => 1,
			'days' => 0,
			'hours' => 0,
			'minutes' => 0,
			'seconds' => 0,
		];
		$result = DateFns::formatDuration($duration);
		$this->assertEquals('1 week', $result);
	}

	/**
	 * @test
	 */
	public function allows_to_include_zeros(): void {
		$duration = [
			'years' => 0,
			'months' => 0,
			'weeks' => 1,
			'days' => 0,
			'hours' => 0,
			'minutes' => 0,
			'seconds' => 0,
		];
		$result = DateFns::formatDuration($duration, ['zero' => true]);
		$this->assertEquals('0 years 0 months 1 week 0 days 0 hours 0 minutes 0 seconds', $result);
	}

	/**
	 * @test
	 */
	public function allows_to_customize_the_delimiter(): void {
		$duration = ['months' => 9, 'days' => 2];
		$result = DateFns::formatDuration($duration, ['delimiter' => ', ']);
		$this->assertEquals('9 months, 2 days', $result);
	}
}
