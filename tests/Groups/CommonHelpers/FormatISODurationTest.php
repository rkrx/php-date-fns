<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class FormatISODurationTest extends TestCase {
	/**
	 * @test
	 */
	public function formats_given_duration_as_iso_8601_string(): void {
		$duration = [
			'years' => 39,
			'months' => 2,
			'days' => 20,
			'hours' => 7,
			'minutes' => 5,
			'seconds' => 0,
		];
		$result = DateFns::formatISODuration($duration);
		$this->assertEquals('P39Y2M20DT7H5M0S', $result);
	}

	/**
	 * @test
	 */
	public function returns_zero_duration_when_given_an_empty_object(): void {
		$result = DateFns::formatISODuration([]);
		$this->assertEquals('P0Y0M0DT0H0M0S', $result);
	}

	/**
	 * @test
	 */
	public function returns_duration_with_some_missing_properties(): void {
		$duration = ['months' => 9, 'days' => 2];
		$result = DateFns::formatISODuration($duration);
		$this->assertEquals('P0Y9M2DT0H0M0S', $result);
	}
}
