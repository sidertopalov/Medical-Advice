<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-22 10:21:42
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax", "AjaxController::___indexAction")->via("GET")->name("ajax.index");
$app->map("/ajax/login", "AjaxController::___loginAction")->via("POST")->name("post.index");
$app->map("/ajax/updateMyAccount", "AjaxController::___postUpdateMyAccount")->via("POST")->name("post.index");

