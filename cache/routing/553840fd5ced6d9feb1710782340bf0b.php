<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-20 11:08:45
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax", "AjaxController::___indexAction")->via("GET")->name("ajax.index");
$app->map("/ajax/login", "AjaxController::___loginAction")->via("POST")->name("post.index");

