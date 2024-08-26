<?php

namespace App\Application\UseCase;

use App\Domain\Repository\TodoRepositoryInterface;

class ListTodosUseCase
{
    private TodoRepositoryInterface $todoRepository;

    public function __construct(TodoRepositoryInterface $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    public function listTodos(): array
    {
        return $this->todoRepository->findAll();
    }

    public function listWithUserId(): array
    {
        return $this->todoRepository->findAll();
    }
}
