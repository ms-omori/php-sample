<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Model\Todo;
use App\Domain\Repository\TodoRepositoryInterface;

class InMemoryTodoRepository implements TodoRepositoryInterface
{
    private array $todos = [];

    private Database $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function save(Todo $todo): void
    {
        $sql = "INSERT INTO todos (id, user_id, title) VALUES (:id, :title, :user_id)";
        $pdo = $this->database->getConnection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $todo->getId(), 'user_id' => $todo->getUserId(), 'description' => $todo->getTitle()]);
    }

    public function findById(string $id): ?Todo
    {
        $sql = "SELECT * FROM todos WHERE id = :id";
        $pdo = $this->database->getConnection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $todo = $stmt->fetch();
        return $todo ? new Todo($todo['id'], $todo['user_id'], $todo['title']) : null;
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM todos";
        $pdo = $this->database->getConnection();
        $stmt = $pdo->query($sql);
        $todos = $stmt->fetchAll();
        return array_map(fn($todo) => new Todo($todo['id'], $todo['user_id'], $todo['title']), $todos);
    }
}
