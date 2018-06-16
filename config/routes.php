<?php
return array(
    //Блог
    'news/([0-9]+)'=>'news/view/$1',
    'news'=>'news/index', //actionIndex в NewsControllers

    //Товар
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController

    //Каталог
    'catalog' => 'catalog/index', // actionIndex в CatalogController

    //Категория товаров
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController

    // Пользователь


    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',


    //'^$' => 'site/index' // actionIndex в SiteController﻿
    'index' => 'site/index',
    '' => 'site/index'

);