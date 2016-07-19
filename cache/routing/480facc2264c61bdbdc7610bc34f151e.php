<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-18 12:20:30
 */

$app = Yee\Yee::getInstance();

$app->map("/activation/:accode", "ActivationController::___activationAction")->via("GET")->name("activation.index");

