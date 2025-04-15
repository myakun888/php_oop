<?php

require __DIR__ . "/../Entity/Todolist.php";
require __DIR__ . "/../Repository/Repository.php";
require __DIR__ . "/../Service/Service.php";

use Entitiy\Todolist;
use Repository\TodolisRepositoryIMPL;
use Service\TodolistServiceIMPL;

function testShowTodolist()
{


    $todolistRepo = new TodolisRepositoryIMPL();


    $todolistService = new TodolistServiceIMPL($todolistRepo);
    $todolistRepo->todolist[1] = new Todolist("bismillah");
    $todolistRepo->todolist[2] = new Todolist("allahuma sholiala muhammad");

    $todolistService->showTodolist();
};


// testShowTodolist();


function testAddTodolist()
{
    $todlistRepo = new TodolisRepositoryIMPL();

    $todolistService = new TodolistServiceIMPL($todlistRepo);

    $todolistService->addTodolist("bismillah");
    $todolistService->addTodolist("alhamdulillah");
    $todolistService->addTodolist("ya allah selalu sertai langkahku dengan berkat dan ridhomu");

    $todolistService->showTodolist();
}
// testAddTodolist();


function deleteTodolist()
{
    $todlistRepo = new TodolisRepositoryIMPL();

    $todolistService = new TodolistServiceIMPL($todlistRepo);

    $todolistService->addTodolist("bismillah");
    $todolistService->addTodolist("alhamdulillah");
    $todolistService->addTodolist("ya allah selalu sertai langkahku dengan berkat dan ridhomu");

    $todolistService->showTodolist();

    // $todolistService->removeTodolist(9);
    $todolistService->removeTodolist(3);

    $todolistService->showTodolist();
}

deleteTodoList();
