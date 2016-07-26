<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-26 08:57:54
 */

$app = Yee\Yee::getInstance();

$app->map("/login", "LoginController::___indexAction")->via("GET")->name("login.index");
$app->map("/logout", "LoginController::___logoutAction")->via("GET")->name("logout.index");

