<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-08-01 08:46:06
 */

$app = Yee\Yee::getInstance();

$app->map("/article", "ArticleController::___indexAction")->via("GET")->name("article.index");
$app->map("/articleList", "ArticleController::___listArticles")->via("GET")->name("article.index");

