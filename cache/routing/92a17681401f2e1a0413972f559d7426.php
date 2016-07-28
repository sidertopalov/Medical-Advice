<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-28 01:14:28
 */

$app = Yee\Yee::getInstance();

$app->map("/article", "ArticleController::___indexAction")->via("GET")->name("article.index");
$app->map("/articleList", "ArticleController::___listArticles")->via("GET")->name("article.index");

