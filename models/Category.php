<?php


class Category
{
public static function getCategoriesList()
{
    $db= Db::getConnection();
    $categoryList = array();

    $result = $db->query('SELECT id, name FROM category WHERE status = "1" ORDER BY sort_order ASC');

    if ($result) {
        while ($row = $result->fetch()) {
            $categoryList[]['id'] = $row['id'];
            $categoryList[]['name'] = $row['name'];
        }
    }

    //$result = $db->prepare("SELECT id, name" . "FROM category" . "ORDER BY sort_order ASC");
    /*$i=0;
    while ($row = $result->fetch()){
        $categoryList[$i]['id']= $row['id'];
        $categoryList[$i]['name']= $row['name'];
        $i++;
    }*/

    /*foreach($result as $row){
        $categoryList[] = array(
            'id' => $row['id'],
            'name' => $row['name']
        );}*/
    return $categoryList;
}
}