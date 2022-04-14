<?php
namespace App\classes;

class Router{

    public static $validRoutes = array();

    public static function set ($route, $function){
        self::$validRoutes[] = $route;
        if ($_GET['url'] == $route) {
            /** @noinspection PhpUndefinedMethodInspection */
            $function->__invoke();
        }
    }




}