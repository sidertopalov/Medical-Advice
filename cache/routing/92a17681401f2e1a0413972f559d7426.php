<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-26 12:47:38
 */

$app = Yee\Yee::getInstance();

$app->map("/article", "ArticleController::___indexAction")->via("GET")->name("article.index");
$app->map("/articleList", "ArticleController::___listArticles")->via("GET")->name("article.index");
