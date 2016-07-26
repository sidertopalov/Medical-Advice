<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-26 08:57:54
 */

$app = Yee\Yee::getInstance();

$app->map("/activation/:accode", "ActivationController::___activationAction")->via("GET")->name("activation.index");

