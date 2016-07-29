<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-29 12:12:38
 */

$app = Yee\Yee::getInstance();

$app->map("/category", "CategoryController::___indexAction")->via("GET")->name("category.index");
$app->map("/categoryUpdate/:id", "CategoryController::___updateCategory")->via("GET")->name("updatecategory.index");
$app->map("/categoryDelete/:id", "CategoryController::___deleteCategory")->via("GET")->name("updatecategory.index");
$app->map("/categoryList", "CategoryController::___listCategory")->via("GET")->name("updatecategory.index");

