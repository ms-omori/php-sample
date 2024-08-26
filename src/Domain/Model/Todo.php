<?php

namespace App\Domain\Model;

class Todo
{
    private string $id;
    private string $user_id;
    private string $title;
    private bool $completed;

    public function __construct(string $id, string $user_id, string $title, bool $completed = false)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->title = $title;
        $this->completed = $completed;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getUserId(): string
    {
        return $this->user_id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function isCompleted(): bool
    {
        return $this->completed;
    }

    public function complete(): void
    {
        $this->completed = true;
    }
}
