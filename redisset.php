<?php
/**
 *Created by PhpStorm,
 *User: wangjingxu
 *Date:2018/4/30
 *Time:11:11
 */
$redis = new Redis();
$redis->connect("127.0.0.1", 7200);
$redis->delete("set1");
$redis->sAdd("set1", "A");
$redis->sAdd("set1", "B");
$redis->sAdd("set1", "C");
$redis->sAdd("set1", "C");

$val = $redis->sCard("set1");
echo $val;
$val = $redis->sMembers("set1");
var_dump($val);
