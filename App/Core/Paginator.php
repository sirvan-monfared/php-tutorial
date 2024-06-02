<?php

namespace App\Core;

class Paginator
{
    protected string $url;
    protected int $page_number;

    public function __construct(protected int $per_page = 10, protected int $total = 0)
    {
        $this->url = currentUrl();
        $this->page_number = intval($_GET['page'] ?? 1);
    }

    public function perPage(): int
    {
        return $this->per_page;
    }

    public function hasPrevPage(): bool
    {
        return $this->page_number > 1;
    }

    public function hasNextPage(): bool
    {
        return $this->page_number < $this->lastPage();
    }

    public function offset(): int
    {
        return ($this->page_number - 1) * $this->per_page;
    }

    public function lastPage(): int
    {
        return ceil($this->total / $this->per_page);
    }

    public function prevUrl(): string
    {
        return $this->generateUrl($this->page_number - 1);
    }

    public function nextUrl(): string
    {
        return $this->generateUrl($this->page_number + 1);
    }

    public function generateUrl($page_number): string
    {
        return "{$this->url}?page={$page_number}";
    }
}