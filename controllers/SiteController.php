<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';
include_once ROOT . '/models/User.php';
class SiteController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(3);

        $popularProducts = array();
        $popularProducts = Product::getPopularProducts(5);

        //Подключаем вид
        require_once(ROOT . '/views/site/index.php');
        return true;
    }
}