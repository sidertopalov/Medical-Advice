<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-18 12:22:49
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax", "AjaxController::___indexAction")->via("GET")->name("ajax.index");
$app->map("/ajax/login", "AjaxController::___loginAction")->via("POST")->name("post.index");

