<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-21 02:21:45
 */

$app = Yee\Yee::getInstance();

$app->map("/activation/:accode", "ActivationController::___activationAction")->via("GET")->name("activation.index");

