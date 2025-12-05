<?php

namespace DateFns\Groups\MillisecondHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class MillisecondsTest extends TestCase {
	/**
	 * @test
	 */
	public function converts_duration_to_milliseconds(): void {
		$this->assertSame(31556952000, DateFns::milliseconds(['years' => 1]));
		$this->assertSame(7889238000, DateFns::milliseconds(['months' => 3]));
		$this->assertSame(604800000, DateFns::milliseconds(['weeks' => 1]));
		$this->assertSame(86400000, DateFns::milliseconds(['days' => 1]));
		$this->assertSame(3600000, DateFns::milliseconds(['hours' => 1]));
		$this->assertSame(60000, DateFns::milliseconds(['minutes' => 1]));
		$this->assertSame(1000, DateFns::milliseconds(['seconds' => 1]));
	}
}
