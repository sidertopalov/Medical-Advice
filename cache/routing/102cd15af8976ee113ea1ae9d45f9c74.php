<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-20 12:50:50
 */

$app = Yee\Yee::getInstance();

$app->map("/account", "MyAccountController::___indexAction")->via("GET")->name("account.index");

