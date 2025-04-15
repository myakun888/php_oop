<?php

require_once __DIR__ . "/Entity/Todolist.php";
require_once __DIR__ . "/Helper/Helper.php";
require_once __DIR__ . "/Repository/Repository.php";
require_once __DIR__ . "/Service/Service.php";
require_once __DIR__ . "/Views/View.php";


// use \Entitiy\Todolist;
// use \Helper\InputHelper;
use \Repository\TodolisRepositoryIMPL;
use \Service\TodolistServiceIMPL;
use \view\TodolistView;



$todolistRepository = new TodolisRepositoryIMPL();
$todolistService = new TodolistServiceIMPL($todolistRepository);
$view = new TodolistView($todolistService);


$view->showTodolist();
