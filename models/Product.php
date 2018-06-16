<?php


class Product
{
    const SHOW_BY_DEFAULT = 10;
    const SHOW_BY_POPULAR = 5;

    /**
     * Метод возвращает массив с 10 крайними товарами
     */
    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);
        $db = Db::getConnection();
        $productsList = array();

        $result = $db->query('SELECT id, name, price, image, brand, description, old_price, code, is_new FROM product '
            . 'WHERE status = "1"'
            . 'ORDER BY id DESC '
            . 'LIMIT ' . $count);

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['brand'] = $row['brand'];
            $productsList[$i]['description'] = $row['description'];
            $productsList[$i]['old_price'] = $row['old_price'];
            $productsList[$i]['code'] = $row['code'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }

        return $productsList;
    }

    /*Получаем 5 популярных товаров*/


    public static function getPopularProducts($countpopular = self::SHOW_BY_POPULAR)
    {
        $countpopular = intval($countpopular);
        $db = Db::getConnection();
        $productlistNew = array();
        $result = $db->query('SELECT id, name, price, popular FROM popularproduct ' . 'WHERE popular = "1" ' . 'ORDER BY price DESC ' . 'LIMIT ' . $countpopular);

        $i = 0;
        while ($row = $result->fetch()) {
            $productlistNew[$i]['id'] = $row['id'];
            $productlistNew[$i]['name'] = $row['name'];
            $productlistNew[$i]['price'] = $row['price'];
            $productlistNew[$i]['popular'] = $row['popular'];
            $i++;
        }
        return $productlistNew;
    }

    /**
     * Получаем список товаров из одной определенной категории
     */
    public static function getProductsListByCategory($categoryId = false)
    {
        if ($categoryId) {

            $db = Db::getConnection();
            $products = array();
            $result = $db->query("SELECT id, name, price, image, is_new FROM product "
                . "WHERE status = '1' AND category_id = '$categoryId' "
                . "ORDER BY id DESC "
                . "LIMIT " . self::SHOW_BY_DEFAULT);

            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['is_new'] = $row['is_new'];
                $i++;
            }

            return $products;
        }
    }

    /**
     * Возвращает продукт по id
     */
    public static function getProductById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM product WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

}