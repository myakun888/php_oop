<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/Repository.php";
require_once __DIR__ . "/../Service/Service.php";
require_once __DIR__ . "/../Views/View.php";
require_once __DIR__ . "/../helper/helper.php";


use \Entitiy\Todolist;
use \Repository\TodolisRepositoryIMPL;
use \Service\TodolistServiceIMPL;
use \view\TodolistView;



function testViewAddTodolist()
{

    $todolistRepository = new TodolisRepositoryIMPL();
    $service = new TodolistServiceIMPL($todolistRepository);
    $views = new TodolistView($service);
    $views->addTodolist();
    $views->showTodolist();
}

testViewAddTodolist();
