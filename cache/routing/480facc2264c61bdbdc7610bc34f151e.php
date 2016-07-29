<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-29 07:38:02
 */

$app = Yee\Yee::getInstance();

$app->map("/activation/:accode", "ActivationController::___activationAction")->via("GET")->name("activation.index");

