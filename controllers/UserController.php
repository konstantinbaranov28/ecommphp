<?php
include_once ROOT . '/models/User.php';

class UserController
{

    public function actionRegister()//Action для страницы Регистрации
    {
        // Переменные для формы
        $name = false;
        $lastname = false;
        $middlename = false;
        $phone = false;
        $phonehome = false;
        $phonejob = false;
        $email = false;
        $addemail = false;
        $password = false;
        $radio = false;
        $result = false;
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $middlename = $_POST['middlename'];
            $phone = $_POST['phone'];
            $phonehome = $_POST['phonehome'];
            $phonejob = $_POST['phonejob'];
            $email = $_POST['email'];
            $addemail = $_POST['addemail'];
            $password = $_POST['password'];


            // Флаг ошибок
            $errors = false;
            // Валидация полей
            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkName($lastname)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkName($middlename)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkPhone($phone)) {
                $errors[] = 'Поле телефон не должно быть короче 10-х символов';
            }
            if (!User::checkPhone($phonehome)) {
                $errors[] = 'Поле домашний телефон не должно быть короче 10-х символов';
            }
            if (!User::checkPhone($phonejob)) {
                $errors[] = 'Поле рабочий телефон не должно быть короче 10-х символов';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkEmail($addemail)) {
                $errors[] = 'Неправильный дополнительный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }
            if(User::checkRadio($radio)) {
                $errors[] = 'Выберите главный E-Mail';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Регистрируем пользователя
                $result = User::register($name, $lastname, $middlename, $phone, $phonehome, $phonejob, $email, $addemail, $password, $radio);
            }
        }
        // Подключаем вид
        require_once(ROOT . '/views/user/register.php');
        return true;
    }


    public function actionLogin() //Action для страницы Вход на сайт
    {
        // Переменные для формы
        $email = false;
        $password = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $email = $_POST['email'];
            $password = $_POST['password'];
            // Флаг ошибок
            $errors = false;
            // Валидация полей
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);
            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);
                // Перенаправляем пользователя в закрытую часть - кабинет
                header("Location: /cabinet");
            }
        }
        // Подключаем вид
        require_once(ROOT . '/views/user/login.php');
        return true;
    }

    public function actionLogout()// Удаляем данные о пользователе из сессии
    {

        // Удаляем информацию о пользователе из сессии
        unset($_SESSION["user"]);

        // Перенаправляем пользователя на главную страницу
        header("Location: /");
    }
}