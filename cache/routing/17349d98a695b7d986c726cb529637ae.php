<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-19 05:30:03
 */

$app = Yee\Yee::getInstance();

$app->map("/test", "TestController::___testAction")->via("GET")->name("test.index");

