<?php

namespace App\Domain\Repository;

use App\Domain\Model\Todo;

interface TodoRepositoryInterface
{
    public function save(Todo $todo): void;
    public function findById(string $id): ?Todo;
    public function findAll(): array;
}