<?php
namespace HelperUtils;
/**
 *
 * <b>HttpHelper.php</b></br>
 * <pre>http请求辅助函数</pre>
 *
 * @author xqyjjq  walk_code@163.com
 * @date 2018/6/11 12:28
 *
 */
class  HttpHelper {

	/**
	 * @param $url
	 * @param $param
	 * @param $headers
	 *<pre>发送Get请求</pre>
	 * @author xqyjjq  walk_code@163.com
	 * @date 2018/6/11
	 * @throws
	 * @return string
	 */
	public static function HttpGet($url, $params, $headers) {
		$paramData = '';
		foreach ($params as $k => $param) {
			$paramData .= $k . '=' . $param . '&';
		}
		$paramData = rtrim($paramData, '&');

		$curl = curl_init($url . '?' . $paramData);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$responBody = curl_exec($curl);
		curl_close($curl);

		return $responBody;
	}


	/**
	 * @param $url
	 * @param $param
	 * @param $headers
	 *<pre>发送Get请求</pre>
	 * @author xqyjjq  walk_code@163.com
	 * @date 2018/6/11
	 * @throws
	 * @return string
	 */
	public static function HttpPost($url, $params, $headers, $type = 'x-www-form-urlencoded') {
		$paramData = '';
		foreach ($params as $k => $param) {
			$paramData .= $k . '=' . $param . '&';
		}
		$paramData = rtrim($paramData, '&');

		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		if ($type == 'json') {
			curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
		} elseif ($type == 'xml') {

		} else {
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $paramData);
		}

		$responBody = curl_exec($curl);
		curl_close($curl);

		return $responBody;
	}
}
