<?php


use App\classes\Router;
use App\controllers\Index;

require_once './model/Index.php';
require_once './model/Test.php';


Router::set('Index', function () {
    Index::CreateView('Index');
});
Router::set('Test', function () {
    Test::CreateView('Test');
});