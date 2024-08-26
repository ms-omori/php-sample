<?php

namespace App\Presentation\Controller;

use App\Application\UseCase\CreateTodoUseCase;
use App\Application\UseCase\ListTodosUseCase;

class TodoController
{
    private CreateTodoUseCase $createTodoUseCase;
    private ListTodosUseCase $listTodosUseCase;

    public function __construct(CreateTodoUseCase $createTodoUseCase, ListTodosUseCase $listTodosUseCase)
    {
        $this->createTodoUseCase = $createTodoUseCase;
        $this->listTodosUseCase = $listTodosUseCase;
    }

    public function create(string $title): void
    {
        $todo = $this->createTodoUseCase->execute($title);
        echo "TODO created: " . $todo->getTitle();
    }

    public function list(): void
    {
        $todos = $this->listTodosUseCase->execute();
        foreach ($todos as $todo) {
            echo $todo->getTitle() . "\n";
        }
    }
}
