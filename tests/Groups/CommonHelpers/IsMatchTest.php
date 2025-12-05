<?php

namespace DateFns\Groups\CommonHelpers;

use DateFns\DateFns;
use PHPUnit\Framework\TestCase;

class IsMatchTest extends TestCase {
	/**
	 * @test
	 */
	public function returns_true_if_date_matches_format(): void {
		$this->assertTrue(DateFns::isMatch('02/11/2014', 'MM/dd/yyyy'));
		$this->assertTrue(DateFns::isMatch('2014-02-11', 'yyyy-MM-dd'));
	}

	/**
	 * @test
	 */
	public function returns_false_if_date_does_not_match_format(): void {
		$this->assertFalse(DateFns::isMatch('02/11/2014', 'yyyy-MM-dd'));
		$this->assertFalse(DateFns::isMatch('invalid', 'MM/dd/yyyy'));
	}
}
