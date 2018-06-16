<?php
include_once ROOT.'/models/News.php';
include_once ROOT . '/models/User.php';

class NewsController
{
    public function actionIndex(){

        $newsList = array();
        $newsList = News::getNewsList();

        //Подключаем вид
        require_once (ROOT.'/views/news/index.php');

        return true;
    }

    public function  actionView($id)
    {
        //Подключаем вид
        require_once (ROOT.'/views/news/view.php');
        if ($id) {
            $newsItem= News::getNewsItebById($id);
        }

        return true;
    }

}

