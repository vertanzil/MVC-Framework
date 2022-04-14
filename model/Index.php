<?php
namespace App\controllers;
    use App\classes\Variables;
    use App\clue\Clue_Telematry;
    require_once 'classes/Controller.php';
Class Index extends Controller
{
    public static function Header(){
        echo '<h1>MVC - Home</h1>';
    }
    public static function Welcome($name){
        echo  "Hello there" ." ". $name;
    }
}