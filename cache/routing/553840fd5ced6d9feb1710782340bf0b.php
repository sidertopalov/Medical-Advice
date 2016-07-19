<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-19 05:40:29
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax", "AjaxController::___indexAction")->via("GET")->name("ajax.index");
$app->map("/ajax/login", "AjaxController::___loginAction")->via("POST")->name("post.index");

