<?php
/**
 *Created by PhpStorm,
 *User: wangjingxu
 *Date:2018/4/30
 *Time:11:11
 */
$redis = new \Redis();
$redis->connect("139.224.117.254", 7200);

$redis->delete("test");
$redis->set("test", "wangjx");
$val = $redis->get("test");
var_dump($val);
//
//$redis->set("string1", 4);
//$redis->incr("string1", 2);
//$val = $redis->get("string1");
//var_dump($val);
