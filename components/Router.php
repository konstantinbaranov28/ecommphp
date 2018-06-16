<?php

class Router
{
private  $routes;
public function __construct(){
$routesPath = ROOT.'/config/routes.php';// Путь к файлу с роутами
$this->routes= include ($routesPath);// Получаем роуты из файла
}
//Метод возвращает строку
private function getURI(){
    if (!empty($_SERVER['REQUEST_URI'])){
        return trim($_SERVER['REQUEST_URI'],'/');
    }

}
    /**
     * Метод для обработки запроса
     */
public function run()
{
    //Получить строку запроса
    $uri = $this->getURI();

            //Проверить наличие такого запроса в массиве маршрутов routes.php
            foreach ($this->routes as $uriPattern => $path) {

            //Сравниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {

                //Получаем внутренний путь из внешнего согласно правилу
                $internalRoute= preg_replace("~$uriPattern~", $path, $uri);

            //Если есть совпадения, определить какой контроллер и action обрабатывают запрос
            $segments = explode('/', $internalRoute);

            $controllerName = array_shift($segments) . 'Controller';
            $controllerName = ucfirst($controllerName);

            $actionName = 'action' . ucfirst(array_shift($segments));



            $parameters = $segments;


            //Подключить файл класса контроллера
            $controllerFile = ROOT . '/controllers/' .
                $controllerName . '.php';

            if (file_exists($controllerFile)) {
                include_once($controllerFile);
            }
            //Создать объект, вызвать метод (т.е. action)
            $controllerObject = new $controllerName;

                /* Вызываем необходимый метод ($actionName) у определенного
                     * класса ($controllerObject) с заданными ($parameters) параметрами
                     */

            $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

            if ($result != null) {
                break;
            }
            }
        }
    }
}