<?php

namespace App\Models;

use App\Enums\CommentStatus;

class Comment extends Model
{
    protected string $table = 'comments';

    protected ?User $user = null;
    protected ?Product $product = null;

    public function insert(array $data, $user_id, $product_id): ?Comment
    {
        return $this->create([
            'user_id' =>  $user_id,
            'product_id' => $product_id,
            'body' => $data['body'],
            'rating' => (int) $data['rating'],
            'status' => CommentStatus::PENDING->value
        ]);
    }

    public function filtered(array $data): object
    {
        $sql = "SELECT * FROM {$this->table} WHERE 1";
        $values = [];

        if ($data['status'] ?? false) {
            $sql .= " AND status=:status";
            $values['status'] = (int) $_GET['status'];
        }

        return $this->db->paginate($sql, $values, __CLASS__);
    }

    public function editLink(): string
    {
        return route('admin.comment.edit', ['id' => $this->id]);
    }

    public function user(): ?User
    {
        if (! $this->user) {
            $this->user = (new User)->find($this->user_id);
        }

        return $this->user;
    }

    public function product(): ?Product
    {
        if (! $this->product) {
            $this->product = (new Product)->find($this->product_id);
        }

        return $this->product;
    }

    public function revise(array $data): Comment
    {
        return $this->update([
            'body' => $data['body'],
            'rating' => (int) $data['rating'],
            'status' => (int) $data['status']
        ]);
    }

    public function status(): CommentStatus
    {
        return CommentStatus::from($this->status);
    }

    public function forProduct(int $product_id): array
    {
        $sql = "SELECT * FROM {$this->table} WHERE `product_id`=:product_id AND `status`=:status";

        return $this->db->prepare($sql, [
            'product_id' => $product_id,
            'status' => CommentStatus::ACCEPTED->value
        ], __CLASS__)->all();
    }

    public function averageRatingForProduct(int $product_id): int
    {
        $sql = "SELECT AVG(rating) AS avg_rate FROM comments WHERE product_id=:product_id LIMIT 1";

        $result = $this->db->prepare($sql, [
            'product_id' => $product_id,
        ], __CLASS__)->find()?->avg_rate;

        return $result ? round($result) : 0;
    }

    public function countForProduct(int $product_id): int
    {
        $sql = "SELECT COUNT(rating) AS count FROM comments WHERE product_id=:product_id LIMIT 1";

        $result = $this->db->prepare($sql, [
            'product_id' => $product_id,
        ], __CLASS__)->find()?->count;

        return $result ? round($result) : 0;
    }
}