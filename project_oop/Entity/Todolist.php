<?php

namespace Entitiy;

class Todolist
{
    private $todolist;

    public function __construct(string $todo = "")
    {
        $this->todolist = $todo;
    }
    function getTodo(): string
    {
        return $this->todolist;
    }

    function setTodo(string $todo): void
    {
        $this->todolist = $todo;
    }
}

// fungsi dari entity ini adalah untuk mengolah data
/**
 * di dalam todolist ini ada 
 * properti $todolist , dengan type string
 * metod / function 
 * - getTodolist berguna untuk menggambil isi properti todolist
 * - setTodolist berguna untuk men set properti todolist
 */
