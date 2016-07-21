<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-21 10:07:40
 */

$app = Yee\Yee::getInstance();

$app->map("/account", "MyAccountController::___indexAction")->via("GET")->name("account.index");

