<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-21 01:37:20
 */

$app = Yee\Yee::getInstance();

$app->map("/login", "LoginController::___indexAction")->via("GET")->name("login.index");
$app->map("/logout", "LoginController::___logoutAction")->via("GET")->name("logout.index");

