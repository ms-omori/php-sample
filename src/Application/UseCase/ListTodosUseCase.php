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

    public function execute(): array
    {
        return $this->todoRepository->findAll();
    }
}
