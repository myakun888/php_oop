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



function testViewDeleteTodolist()
{

    $todolistRepository = new TodolisRepositoryIMPL();
    $service = new TodolistServiceIMPL($todolistRepository);
    $views = new TodolistView($service);
    $service->addTodolist("cinta ALLAH SWT");
    $service->addTodolist("cinta Rasulallah");
    $service->showTodolist();
    // $views->showTodolist();
    $views->removeTodolist();
    // $views->showTodolist();
    // $service->showTodolist();
    // $views->removeTodolist();
}

testViewDeleteTodolist();
