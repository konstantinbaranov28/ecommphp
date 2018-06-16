<?php


class News
{
    //Метод возвращает одну новость по id
    public static function getNewsItebById($id){
        //Запрос к БД
        $id = intval($id);
        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM news WHERE id=' . $id);

            //$result->setFetchMode(PDO::FETCH_NUM);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            return $newsItem;
        }
    }
    //Метод возвращает список новостей
    public static function getNewsList (){
        $db = Db::getConnection();
        $newsList = array();

        $result = $db->prepare("SELECT id, title, date, short_content, author, preview "
            . "FROM news "
            . "ORDER BY date DESC "
            . "LIMIT 10");
        $result->execute();
        $i = 0;
        while($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $newsList[$i]['author'] = $row['author'];
            $newsList[$i]['preview'] = $row['preview'];

            $i++;
        }
        return $newsList;

    }
}