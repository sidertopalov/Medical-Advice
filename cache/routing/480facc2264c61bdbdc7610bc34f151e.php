<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-19 05:03:33
 */

$app = Yee\Yee::getInstance();

$app->map("/activation/:accode", "ActivationController::___activationAction")->via("GET")->name("activation.index");

