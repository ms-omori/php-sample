<?php

use App\Infrastructure\Persistence\TodoRepository;
use App\Application\UseCase\CreateTodoUseCase;
use App\Application\UseCase\ListTodosUseCase;
use App\Infrastructure\Persistence\Database;
use App\Presentation\Controller\TodoController;

$todoRepository = new TodoRepository(new Database());

$createTodoUseCase = new CreateTodoUseCase($todoRepository);
$listTodosUseCase = new ListTodosUseCase($todoRepository);

$todoController = new TodoController($createTodoUseCase, $listTodosUseCase);

return $todoController;
