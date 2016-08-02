<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-08-02 03:22:34
 */

$app = Yee\Yee::getInstance();

$app->map("/category", "CategoryController::___indexAction")->via("GET")->name("categoryadd.index");
$app->map("/categoryUpdate/:id", "CategoryController::___updateCategory")->via("GET")->name("updatecategory.index");
$app->map("/categoryDelete/:id", "CategoryController::___deleteCategory")->via("GET")->name("updatecategory.index");
$app->map("/categoryList", "CategoryController::___listCategory")->via("GET")->name("updatecategory.index");

