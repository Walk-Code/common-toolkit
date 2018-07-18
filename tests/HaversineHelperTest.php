<?php
/**
 *
 * <b>HaversineHelper.php</b></br>
 * <pre>TODO(这里用一句话描述这个类的作用)</pre>
 *
 * @author xqyjjq  walk_code@163.com
 * @date 2018/7/18 14:48
 *
 */

namespace tests\HaversineHelperTest;

use HelperUtils\HaversineHelper;
use PHPUnit\Framework\TestCase;

/**
 *
 * <b>HttpHelper.php</b></br>
 * <pre>Haversine算法工具类(计算两点之间的距离)</pre>
 *
 * @author xqyjjq  walk_code@163.com
 * @date 2018/6/11 12:28
 *
 */
class HaversineHelperTest extends TestCase {
	public function testHaversineGreatCircleDistance() {
		$this->assertEquals('5028.7089736133867', HaversineHelper::haversineGreatCircleDistance(113.345390, 23.140348, 113.389565, 23.115929));
	}
}