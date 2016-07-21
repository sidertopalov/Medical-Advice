<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-21 01:37:20
 */

$app = Yee\Yee::getInstance();

$app->map("/account", "MyAccountController::___indexAction")->via("GET")->name("account.index");

