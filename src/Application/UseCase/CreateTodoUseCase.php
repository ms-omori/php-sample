<?php

namespace App\Application\UseCase;

use App\Domain\Model\Todo;
use App\Domain\Repository\TodoRepositoryInterface;

class CreateTodoUseCase
{
    private TodoRepositoryInterface $todoRepository;

    public function __construct(TodoRepositoryInterface $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    public function execute(string $title): Todo
    {
        $todo = new Todo(uniqid(), $title);
        $this->todoRepository->save($todo);
        return $todo;
    }
}
