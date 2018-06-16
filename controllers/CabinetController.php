<?php
include_once ROOT . '/models/User.php';

class CabinetController
{
    public function actionIndex()
    {

        //Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();

        //Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);

        //Подключаем вид
        require_once(ROOT . '/views/cabinet/index.php');
        return true;
    }

    public function actionEdit() //Action редактирования данных пользователя
    {
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        // Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);
        // Заполняем переменные для полей формы
        $name = $user['name'];
        $lastname = $user['lastname'];
        $middlename = $user['middlename'];
        $phone = $user['phone'];
        $phonehome = $user['phonehome'];
        $phonejob = $user['phonejob'];
        $email = $user['email'];
        $addemail = $user['addemail'];
        $password = $user['password'];

        // Флаг результата
        $result = false;
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования
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
            // Валидируем значения
            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkName($lastname)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkName($middlename)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if ($errors == false) {
                // Если ошибок нет, сохраняет изменения профиля
                $result = User::edit($userId, $name, $lastname, $middlename, $phone, $phonehome, $phonejob, $email, $addemail, $password);
            }
        }
        // Подключаем вид
        require_once(ROOT . '/views/cabinet/edit.php');
        return true;
    }
}
