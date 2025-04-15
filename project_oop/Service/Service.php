<?php

namespace Service;

use Entitiy\Todolist;
use Repository\TodolisRepositoryIMPL;
use Repository\TodolistRepository;

interface TodolistService
{

    function showTodolist();
    function removeTodolist(int $todo);
    function addTodolist(string $todo);
}



class TodolistServiceIMPL implements TodolistService
{

    private TodolistRepository $todolist;

    public function __construct(TodolistRepository $todolist)
    {
        $this->todolist = $todolist;
    }
    function showTodolist()
    {
        // echo "Todolist" . PHP_EOL;
        $todolist = $this->todolist->findAll();

        echo "Todo List" . PHP_EOL;
        foreach ($todolist as $key => $value) {
            echo "[$key]" . $value->getTodo() . PHP_EOL;
        }
        // // }
        // var_dump($todolist);
    }
    function addTodolist(string $todo): void
    {
        $todolist = new Todolist($todo);

        $this->todolist->save($todolist);
        echo "Sukses Menambah TODOLIST" . PHP_EOL;
    }

    function removeTodolist(int $todo)
    {

        if ($this->todolist->remove($todo)) {
            echo "sukses menghapus todolist" . PHP_EOL;
        } else {
            echo "index anda masukan [$todo] melebihi dari jumlah dari data TODOLIST " . sizeof($this->todolist->findAll()) . PHP_EOL;            # code...
        };
    }
}
