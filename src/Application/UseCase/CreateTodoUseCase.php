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

    public function execute(string $title, string $userId): Todo
    {
        $todo = new Todo(uniqid(), $userId, $title);
        $this->todoRepository->create($todo);
        return $todo;
    }
}
