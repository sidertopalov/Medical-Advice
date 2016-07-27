<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-27 09:03:04
 */

$app = Yee\Yee::getInstance();

$app->map("/test", "TestController::___testAction")->via("GET")->name("test.index");

