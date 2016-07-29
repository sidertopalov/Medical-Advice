<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-29 11:37:39
 */

$app = Yee\Yee::getInstance();

$app->map("/categorySelect", "CategoryUsersController::___indexAction")->via("GET")->name("categoryselect.index");
$app->map("/category/view/:name", "CategoryUsersController::___updateCategory")->via("GET")->name("updatecategory.index");
$app->map("/read/question/:name", "CategoryUsersController::___readArticleAction")->via("GET")->name("readarticle.index");

