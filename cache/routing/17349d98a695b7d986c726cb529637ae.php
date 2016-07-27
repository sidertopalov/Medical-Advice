<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-27 01:34:03
 */

$app = Yee\Yee::getInstance();

$app->map("/test", "TestController::___testAction")->via("GET")->name("test.index");

