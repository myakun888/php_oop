<?php

namespace Repository;

use Entitiy\Todolist;

interface TodolistRepository
{

    function save(Todolist $todo);
    function remove(int $todo);
    function findAll();
}


class TodolisRepositoryIMPL implements TodolistRepository
{
    public $todolist = [];

    function save(Todolist $todo)
    {

        $index = sizeof($this->todolist) + 1;
        $this->todolist[$index] = $todo;
    }
    function remove($number)
    {


        if ($number > sizeof($this->todolist)) {
            return false;
        }

        for ($i = $number; $i < sizeof($this->todolist); $i++) {

            $this->todolist[$i] = $this->todolist[$i + 1];
        }

        unset($this->todolist[sizeof($this->todolist)]);
        return true;
    }
    function findAll()
    {
        return $this->todolist;
    }
}
