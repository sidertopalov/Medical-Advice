<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-19 10:04:42
 */

$app = Yee\Yee::getInstance();

$app->map("/test", "TestController::___testAction")->via("GET")->name("test.index");

