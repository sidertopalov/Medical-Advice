<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-08-01 08:40:41
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax", "AjaxController::___indexAction")->via("GET")->name("ajax.index");
$app->map("/ajax/login", "AjaxController::___loginAction")->via("POST")->name("post.index");
$app->map("/ajax/updateMyAccount", "AjaxController::___postUpdateMyAccount")->via("POST")->name("post.index");
$app->map("/ajax/changePassword", "AjaxController::___postChangePassword")->via("POST")->name("post.index");
$app->map("/ajax/article", "AjaxController::___postAddArticleAction")->via("POST")->name("article.index");
$app->map("/ajax/category", "AjaxController::___postAddCategoryAction")->via("POST")->name("category.index");
$app->map("/ajax/categoryUpdate", "AjaxController::___postUpdateCategoryAction")->via("POST")->name("category.index");
$app->map("/ajax/categoryDelete", "AjaxController::___postDeleteCategoryAction")->via("POST")->name("category.index");

