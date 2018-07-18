<?php
/**
 *
 * <b>HaversineHelper.php</b></br>
 * <pre>haversine算法(计算两点之间的距离)</pre>
 *
 * @author xqyjjq  walk_code@163.com
 * @date 2018/7/18 15:51
 *
 */

namespace HelperUtils;


class HaversineHelper {
	public static function haversineGreatCircleDistance(
		$latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000) {
		// convert from degrees to radians
		$latFrom = deg2rad($latitudeFrom);
		$lonFrom = deg2rad($longitudeFrom);
		$latTo   = deg2rad($latitudeTo);
		$lonTo   = deg2rad($longitudeTo);

		$latDelta = $latTo - $latFrom;
		$lonDelta = $lonTo - $lonFrom;

		$angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
				cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
		return $angle * $earthRadius;
	}
}