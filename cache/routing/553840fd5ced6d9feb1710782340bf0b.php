<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-27 09:01:19
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax", "AjaxController::___indexAction")->via("GET")->name("ajax.index");
$app->map("/ajax/login", "AjaxController::___loginAction")->via("POST")->name("post.index");
$app->map("/ajax/updateMyAccount", "AjaxController::___postUpdateMyAccount")->via("POST")->name("post.index");
$app->map("/ajax/changePassword", "AjaxController::___postChangePassword")->via("POST")->name("post.index");
$app->map("/ajax/article", "AjaxController::___postAddArticleAction")->via("POST")->name("article.index");

