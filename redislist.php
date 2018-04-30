<?php
/**
 *Created by PhpStorm,
 *User: wangjingxu
 *Date:2018/4/30
 *Time:11:11
 */
$redis = new Redis();
$redis->connect("127.0.0.1", 7200);

$redis->delete("list1");

$redis->lPush("list1", "A");
$redis->lPush("list1", "B");
$redis->lPush("list1", "C");

$val = $redis->rPop("list1");
var_dump($val);
$val = $redis->rPop("list1");
var_dump($val);
