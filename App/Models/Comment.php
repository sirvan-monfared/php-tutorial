<?php

namespace App\Models;

class Comment extends Model
{
    protected string $table = 'comments';

    CONST PENDING = 1;
    CONST ACCEPTED = 2;
    CONST SPAM = 3;

    protected ?User $user = null;
    protected ?Product $product = null;

    public function insert(array $data, $user_id, $product_id): ?Comment
    {
        return $this->create([
            'user_id' =>  $user_id,
            'product_id' => $product_id,
            'body' => $data['body'],
            'rating' => (int) $data['rating'],
            'status' => self::PENDING
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

    public function status(): string
    {
        return match($this->status) {
            self::PENDING => '<span class="badge badge-warning">در انتظار بررسی</span>',
            self::ACCEPTED => '<span class="badge badge-success">تایید شده</span>',
            self::SPAM => '<span class="badge badge-danger">هرزنامه</span>',
        };
    }

    public function forProduct(int $product_id): array
    {
        $sql = "SELECT * FROM {$this->table} WHERE `product_id`=:product_id AND `status`=:status";

        return $this->db->prepare($sql, [
            'product_id' => $product_id,
            'status' => Comment::ACCEPTED
        ], __CLASS__)->all();
    }
}