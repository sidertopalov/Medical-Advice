<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-27 08:24:50
 */

$app = Yee\Yee::getInstance();

$app->map("/account", "MyAccountController::___indexAction")->via("GET")->name("account.index");
$app->map("/changePass", "MyAccountController::___changePassAction")->via("GET")->name("account.index");

