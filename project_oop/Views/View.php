<?php


namespace view;

use Helper\InputHelper;
use Service\TodolistService;

class TodolistView

{
    private TodolistService $todolistService;

    public function __construct(TodolistService $todolistService)
    {
        $this->todolistService = $todolistService;
    }

    function showTodolist(): void
    {
        //melakukan perulangan while
        //yang berguna agar selalu mengulang menampilkan / menjalankan function view_todolist
        while (true) {

            echo "SELAMAT DATANG DI APLIKASI \" SELAMAT DATANG DI APP TODOLIST BERBASIS CMD \"." . PHP_EOL;


            $this->todolistService->showTodolist(); // menampilkan data todolist saat ini
            echo "MENU" . PHP_EOL;
            echo "Silahkan Masukan Pilihan Anda" . PHP_EOL;
            echo "1: Untuk Menambah TODO" . PHP_EOL;
            echo "2: Untuk Menghapus TODO" . PHP_EOL;
            echo "x: Keluar" . PHP_EOL;
            $pilihan = InputHelper::input("Pilihan "); // meminta input dari user;
            if ($pilihan == "1") { // jika pilihan == "1", maka akan memasuki view tambah todo, dengan menjalankan function view_add_todo_list
                $this->addTodolist();
            } else if ($pilihan == "2") { //jika pilihan == "2", maka akan memasuki view delete todo,dengan menjalankan function views_delete_todolist
                $this->removeTodolist();
            } else if ($pilihan == "x") { // jika pilihan == "x", maka akan berhenti dengan menjalankan keyword break, lalu perluangan while akan berhenti, dengan notice echo "terimakasih";
                break;
            }
        }
        echo "Terimakasih" . PHP_EOL;
    }
    function addTodolist(): void
    {

        echo "Menambah TODO" . PHP_EOL;
        echo " X = kembali " . PHP_EOL;
        $pilihan = InputHelper::input("masukan TODO ");

        if ($pilihan == "x") {
            echo "Batal Menambah Todo" . PHP_EOL;
        } else {
            $this->todolistService->addTodolist($pilihan);
        }
    }
    function removeTodolist(): void
    {

        echo "Menghapus TODO" . PHP_EOL;
        echo " X = Kembali " . PHP_EOL;
        $pilihan = InputHelper::input("Masukan INDEX yang ingin dihapus ");

        if ($pilihan == "x") {
            echo "Batal menghapus Todo" . PHP_EOL;
        } else {
            $this->todolistService->removeTodolist($pilihan);
        }
    }
}
