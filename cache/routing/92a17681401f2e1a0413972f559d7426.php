<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-27 01:52:38
 */

$app = Yee\Yee::getInstance();

$app->map("/article", "ArticleController::___indexAction")->via("GET")->name("article.index");
$app->map("/articleList", "ArticleController::___listArticles")->via("GET")->name("article.index");

