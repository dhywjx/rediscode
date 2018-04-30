<?php
/**
 *Created by PhpStorm,
 *User: wangjingxu
 *Date:2018/4/30
 *Time:11:11
 */
$redis = new Redis();
$redis->connect("127.0.0.1", 7200);

$redis->delete("driver1");
$redis->hSet("driver1", "name", "wangjx");
$redis->hSet("driver1", "sex", 1);
$redis->hSet("driver1", "age", 25);
$name = $redis->hGet("driver1", "name");
var_dump($name);
$val = $redis->hMGet("driver1", array("name", "age"));
var_dump($val);
