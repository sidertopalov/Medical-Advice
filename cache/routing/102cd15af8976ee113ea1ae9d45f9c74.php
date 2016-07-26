<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-26 08:57:54
 */

$app = Yee\Yee::getInstance();

$app->map("/account", "MyAccountController::___indexAction")->via("GET")->name("account.index");
$app->map("/changePass", "MyAccountController::___changePassAction")->via("GET")->name("account.index");

