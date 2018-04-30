<?php
/**
 *Created by PhpStorm,
 *User: wangjingxu
 *Date:2018/4/30
 *Time:11:11
 */
$redis = new \Redis();
$redis->connect("127.0.0.1", 7200);

$redis->delete("string1");
$redis->set("string1", "val1");
$val = $redis->get("string1");
var_dump($val);

$redis->set("string1", 4);
$redis->incr("string1", 2);
$val = $redis->get("string1");
var_dump($val);
