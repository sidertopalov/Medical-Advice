<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-15 09:08:54
 */

$app = Yee\Yee::getInstance();

$app->map("/test", "TestController::___testAction")->via("GET")->name("test.index");

