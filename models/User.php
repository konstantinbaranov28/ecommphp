<?php

/**
 * Класс User - модель для работы с пользователями
 */
class User
{

    public static function register($name, $lastname, $middlename, $phone, $phonehome, $phonejob, $email, $addemail, $password, $radio)//Регистрация пользователя
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO user (name, lastname, middlename, phone, phonehome, phonejob, email, addemail, password, radio) '
            . 'VALUES (:name, :lastname, :middlename, :phone, :phonehome, :phonejob, :email, :addemail, :password, :radio)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $result->bindParam(':middlename', $middlename, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':phonehome', $phonehome, PDO::PARAM_STR);
        $result->bindParam(':phonejob', $phonejob, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':addemail', $addemail, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':radio', $radio, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function edit($id, $name, $lastname, $middlename, $phone, $phonehome, $phonejob, $email, $addemail, $password)//Редактирование данных пользователя
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE user 
            SET name = :name, lastname = :lastname, middlename = :middlename, phone = :phone, phonehome = :phonehome, phonejob = :phonejob, email = :email, addemail = :addemail, password = :password 
            WHERE id = :id";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $result->bindParam(':middlename', $middlename, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':phonehome', $phonehome, PDO::PARAM_STR);
        $result->bindParam(':phonejob', $phonejob, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':addemail', $addemail, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function checkUserData($email, $password)//Проверяем существует ли пользователь с заданными $email и $password
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';
        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();
        // Обращаемся к записи
        $user = $result->fetch();
        if ($user) {
            // Если запись существует, возвращаем id пользователя
            return $user['id'];
        }
        return false;
    }

    public static function auth($userId)//Запоминаем пользователя
    {
        // Записываем идентификатор пользователя в сессию
        $_SESSION['user'] = $userId;
    }

    public static function checkLogged()//Возвращает идентификатор пользователя, если он авторизирован
    {
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        header("Location: /user/login");
    }

    public static function isGuest()//Проверяет является ли пользователь гостем
    {

        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    public static function checkName($name)//Проверяет имя: не меньше, чем 2 символа
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    public static function checkPhone($phone)//Проверяет телефон: не меньше, чем 10 символов
    {
        if (strlen($phone) >= 10) {
            return true;
        }
        return false;
    }

    public static function checkPassword($password)//Проверяет имя: не меньше, чем 6 символов
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    public static function checkRadio($radio)//Проверяет радио кнопку
    {
        if ($radio) {
            return true;
        }
        return false;
    }


    public static function checkEmail($email)//Проверяет email
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkEmailExists($email)//Проверяет не занят ли email другим пользователем
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';
        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        if ($result->fetchColumn())
            return true;
        return false;
    }

    public static function getUserById($id)//Возвращает пользователя с указанным id
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE id = :id';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        return $result->fetch();
    }
}