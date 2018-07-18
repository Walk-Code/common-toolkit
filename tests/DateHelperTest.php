<?php
/**
 *
 * <b>DateHelperTest.php</b></br>
 * <pre>TODO(这里用一句话描述这个类的作用)</pre>
 *
 * @author xqyjjq  walk_code@163.com
 * @date 2018/7/18 15:59
 *
 */

namespace tests;

use HelperUtils\DateHelper;
use PHPUnit\Framework\TestCase;

class DateHelperTest extends TestCase{
	public function testGetBetweenDates() {
		$dateArr = DateHelper::GetBetweenDates('2018-07-18', '2018-07-20');
		$this->assertInternalType('array', $dateArr);//判断是否为数组
		$this->assertEquals(3, count($dateArr));
		$this->assertEquals('2018-07-18', $dateArr[0]);
		$this->assertEquals('2018-07-19', $dateArr[1]);
		$this->assertEquals('2018-07-20', $dateArr[2]);
	}

	public function testGetRemainingSecondsAfterDays() {
		$time = DateHelper::GetRemainingSecondsAfterDays('2018-07-20');
		$this->assertNotEmpty($time);
	}

}