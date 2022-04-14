<?php

namespace App\controllers;

use App\classes\Database\Database;
use App\classes\Pagebuilder;

Class Controller{
    
    public static function CreateView($viewName){
        $db = Database::getInstance();
        if (!$db->tableExist()) {
            header("Location: index.php?url=Error&Result=Setup");
        } else {
            $db->installFldrcheck();
        }

        if (!isset($_SESSION)) {
            session_start();
        }
        include_once './templates/Navigation.php';
        require_once "./views/$viewName" . '.php';
    }
    public static function pageBuilder($viewName){
        echo "<head>";
        switch ($viewName) {
            case "Index":
                Pagebuilder::setCharset("utf-8");
                Pagebuilder::setViewport();
                Pagebuilder::setDescription("Rune Log Index page.");
                Pagebuilder::setpageTitle("Home");
                Pagebuilder::loadCSS("./views/css/foundation.css");
                Pagebuilder::loadCSS("./views/css/core.css");
                Pagebuilder::loadJS("./views/js/jquery-3.5.1.min.js");
                break;
            case "Test":
                Pagebuilder::setCharset("utf-8");
                Pagebuilder::setViewport();
                Pagebuilder::setDescription("Rune Log Test page.");
                Pagebuilder::setpageTitle("Test");
                Pagebuilder::loadCSS("./views/css/foundation.css");
                Pagebuilder::loadCSS("./views/css/core.css");
                Pagebuilder::loadJS("./views/js/jquery-3.5.1.min.js");
            default:
                break;
        }
        echo '</head>';
    }
}
