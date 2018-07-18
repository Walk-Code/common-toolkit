<?php
/**
 *
 * <b>HttpHelperTest.php</b></br>
 * <pre>TODO(这里用一句话描述这个类的作用)</pre>
 *
 * @author xqyjjq  walk_code@163.com
 * @date 2018/7/18 16:23
 *
 */

namespace tests;


use HelperUtils\HttpHelper;
use PHPUnit\Framework\TestCase;

class HttpHelperTest extends TestCase {
	public function testHttpGet() {
		$url    = 'http://restapi.amap.com/v3/geocode/geo';
		$param  = [
			'address' => '车陂南',
			'output'  => 'json',
			'key'     => '8886eba67ae62bfacd6bc1537c9d232b'
		];
		$header = [
			'Content-Type: ' => 'application/x-www-form-urlencoded; charset=UTF-8'
		];

		$result = HttpHelper::HttpGet($url, $param, $header);
		$resultArr = json_decode($result);
		$this->assertEquals('1', $resultArr->status);
		$this->assertAttributeNotEmpty('geocodes', $resultArr);
	}

	public function testHttpPost(){
		$url = 'http://restapi.amap.com/v3/geocode/geo';
		$param  = [
			'address' => '车陂南',
			'output'  => 'json',
			'key'     => '8886eba67ae62bfacd6bc1537c9d232b'
		];
		$header = [
			'Content-Type: ' => 'application/x-www-form-urlencoded; charset=UTF-8'
		];
		$result = HttpHelper::HttpPost($url, $param, $header);
		$resultArr = json_decode($result);
		$this->assertEquals('1', $resultArr->status);
		$this->assertAttributeNotEmpty('geocodes', $resultArr);
	}

}