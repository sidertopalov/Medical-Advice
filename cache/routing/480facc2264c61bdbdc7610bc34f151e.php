<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-27 08:24:50
 */

$app = Yee\Yee::getInstance();

$app->map("/activation/:accode", "ActivationController::___activationAction")->via("GET")->name("activation.index");

