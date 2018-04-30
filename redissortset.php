<?php
/**
 *Created by PhpStorm,
 *User: wangjingxu
 *Date:2018/4/30
 *Time:11:11
 */
$redis = new \Redis();
$redis->connect("127.0.0.1", 7200);

$redis->zAdd("zset1", 100, "小明");
$redis->zAdd("zset1", 90, "小红");
$redis->zAdd("zset1", 93, "小王");

$val = $redis->zRange("zset1", 0, 1);
var_dump($val);
$val = $redis->zRevRange("zset1", 0, 1);
var_dump($val);