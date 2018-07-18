<?php
namespace HelperUtils;
use DateInterval;
use DatePeriod;
use DateTime;

/**
 *
 * <b>DateHelper.php</b></br>
 * <pre>时间辅助函数</pre>
 *
 * @author xqyjjq  walk_code@163.com
 * @date 2018/6/11 11:06
 *
 */
class DateHelper {

	/**
	 * @param $startDate
	 * @param $endDate
	 * @param $pattern
	 *<pre>获取两个日期所有的时间</pre>
	 * @author xqyjjq  walk_code@163.com
	 * @date 2018/6/11
	 * @throws
	 * @return array
	 */
	public static function GetBetweenDates($startDate, $endDate, $pattern = 'Y-m-d') {
		$begin = new DateTime($startDate);
		$end   = new DateTime($endDate);

		$interval  = new DateInterval('P1D');
		$dateRange = new DatePeriod($begin, $interval, $end);

		$range = [];
		foreach ($dateRange as $date) {
			$range[] = $date->format($pattern);
		}

		$range[] = $end->format($pattern);

		return $range;
	}


	/**
	 * @param $day
	 *<pre>返回距离当前时间的xxx天后的剩余时间(秒)</pre>
	 * @author xqyjjq  walk_code@163.com
	 * @date 2018/6/11
	 * @throws
	 * @return int
	 */
	public static function GetRemainingSecondsAfterDays($day) {
		$endDate   = strtotime('+' . $day . ' day');
		$startDate = time();
		return $endDate - $startDate;
	}

}

