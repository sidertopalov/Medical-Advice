<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-18 10:30:31
 */

$app = Yee\Yee::getInstance();

$app->map("/signup", "SignupController::___indexAction")->via("GET")->name("signup.index");
$app->map("/signuptwo", "SignupController::___signUpAction")->via("POST")->name("post.index");

