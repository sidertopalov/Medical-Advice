<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-26 08:57:54
 */

$app = Yee\Yee::getInstance();

$app->map("/signup", "SignupController::___indexAction")->via("GET")->name("signup.index");
$app->map("/signuptwo", "SignupController::___signUpAction")->via("POST")->name("post.index");

