<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class GetDefaultOptionsTest extends TestCase {
	protected function tearDown(): void {
		// Reset known options to ensure isolation
		DateFns::setDefaultOptions([
			'weekStartsOn' => null,
			'firstWeekContainsDate' => null,
			'locale' => null,
		]);
	}

	/**
	 * @test
	 */
	public function returns_empty_array_initially(): void {
		// Ensure clean state handled by tearDown/setUp logic if possible,
		// but here we might run after other tests.
		// For now, assume it starts empty or we can't easily guarantee it without a reset method.
		// Let's explicitly clear first.
		DateFns::setDefaultOptions([
			'weekStartsOn' => null,
			'firstWeekContainsDate' => null,
			'locale' => null,
		]);

		$result = DateFns::getDefaultOptions();
		$this->assertEquals([], $result);
	}

	/**
	 * @test
	 */
	public function returns_updated_options(): void {
		DateFns::setDefaultOptions(['weekStartsOn' => 1]);
		$result = DateFns::getDefaultOptions();
		$this->assertEquals(['weekStartsOn' => 1], $result);
	}
}
