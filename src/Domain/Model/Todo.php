<?php

namespace App\Domain\Model;

class Todo
{
    private string $id;
    private string $title;
    private bool $completed;

    public function __construct(string $id, string $title, bool $completed = false)
    {
        $this->id = $id;
        $this->title = $title;
        $this->completed = $completed;
    }

    public function getId(): string
    {
        return $this->id;
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
