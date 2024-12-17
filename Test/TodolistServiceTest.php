<?php
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Config/Database.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void {
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("BELAJAR PHP");
    $todolistService->addTodolist("BELAJAR PHP OOP");
    $todolistService->addTodolist("BELAJAR PHP Database");
    $todolistService->addTodolist();
}

function testAddTodolist(): void {
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("BELAJAR PHP");
    $todolistService->addTodolist("BELAJAR PHP OOP");
    $todolistService->addTodolist();
}

function testRemoveTodolist(): void {
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);

    echo $todolistService->testRemoveTodolist(5) . PHP_EOL;
    echo $todolistService->testRemoveTodolist(4) . PHP_EOL;
    echo $todolistService->testRemoveTodolist(3) . PHP_EOL;
    echo $todolistService->testRemoveTodolist(2) . PHP_EOL;
    echo $todolistService->testRemoveTodolist(1) . PHP_EOL;

}

testShowTodolist();