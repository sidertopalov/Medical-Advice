<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-22 10:25:02
 */

$app = Yee\Yee::getInstance();

$app->map("/account", "MyAccountController::___indexAction")->via("GET")->name("account.index");
$app->map("/editAccount", "MyAccountController::___editAccountAction")->via("GET")->name("account.index");

