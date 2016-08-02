<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-08-02 12:29:40
 */

$app = Yee\Yee::getInstance();

$app->map("/login", "LoginController::___indexAction")->via("GET")->name("login.index");
$app->map("/logout", "LoginController::___logoutAction")->via("GET")->name("logout.index");

