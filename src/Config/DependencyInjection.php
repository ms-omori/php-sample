<?php

use App\Infrastructure\Persistence\InMemoryTodoRepository;
use App\Application\UseCase\CreateTodoUseCase;
use App\Application\UseCase\ListTodosUseCase;
use App\Presentation\Controller\TodoController;

$todoRepository = new InMemoryTodoRepository();

$createTodoUseCase = new CreateTodoUseCase($todoRepository);
$listTodosUseCase = new ListTodosUseCase($todoRepository);

$todoController = new TodoController($createTodoUseCase, $listTodosUseCase);

return $todoController;
