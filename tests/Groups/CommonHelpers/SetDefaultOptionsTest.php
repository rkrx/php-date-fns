<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class SetDefaultOptionsTest extends TestCase {
	protected function tearDown(): void {
		DateFns::setDefaultOptions([
			'weekStartsOn' => null,
			'firstWeekContainsDate' => null,
			'locale' => null,
		]);
	}

	/**
	 * @test
	 */
	public function sets_default_options(): void {
		DateFns::setDefaultOptions(['weekStartsOn' => 1, 'firstWeekContainsDate' => 4]);
		$result = DateFns::getDefaultOptions();
		$this->assertEquals(['weekStartsOn' => 1, 'firstWeekContainsDate' => 4], $result);
	}

	/**
	 * @test
	 */
	public function merges_options(): void {
		DateFns::setDefaultOptions(['weekStartsOn' => 1]);
		DateFns::setDefaultOptions(['firstWeekContainsDate' => 4]);

		$result = DateFns::getDefaultOptions();
		$this->assertEquals(['weekStartsOn' => 1, 'firstWeekContainsDate' => 4], $result);
	}

	/**
	 * @test
	 */
	public function removes_options_via_null(): void {
		DateFns::setDefaultOptions(['weekStartsOn' => 1]);
		DateFns::setDefaultOptions(['weekStartsOn' => null]);

		$result = DateFns::getDefaultOptions();
		$this->assertEquals([], $result);
	}
}
