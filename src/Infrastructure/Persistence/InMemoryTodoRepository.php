<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Model\Todo;
use App\Domain\Repository\TodoRepositoryInterface;

class InMemoryTodoRepository implements TodoRepositoryInterface
{
    private array $todos = [];

    public function save(Todo $todo): void
    {
        $this->todos[$todo->getId()] = $todo;
    }

    public function findById(string $id): ?Todo
    {
        return $this->todos[$id] ?? null;
    }

    public function findAll(): array
    {
        return array_values($this->todos);
    }
}