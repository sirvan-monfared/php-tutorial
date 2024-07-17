<?php

namespace App\Models;

use App\Core\Database;
use App\Enums\OrderStatus;

class Order extends Model
{
    protected string $table = 'orders';

    protected array $order_items = [];
    protected ?User $user = null;
    protected ?Shipment $shipment = null;

    public function insert($amount): ?Order
    {
        return $this->create([
            'user_id' => auth()->user()->id,
            'shipment_id' => null,
            'amount' => $amount,
            'gateway' => null,
            'status' => OrderStatus::NOT_PAID->value
        ]);
    }

    public function updatePaymentInfo($ref_id, $payment_order_id, $gateway_code): Order
    {
        return $this->update([
            'gateway' => $gateway_code,
            'ref_id' => $ref_id,
            'payment_order_id' => $payment_order_id,
            'updated_at' => now(),
            'id' => $this->id
        ]);
    }

    public function findByPaymentInfo($ref_id, $payment_order_id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE `ref_id`=:ref_id AND `payment_order_id`=:payment_order_id AND status=:status LIMIT 1";

        return $this->db->prepare($sql, [
            'ref_id' => $ref_id,
            'payment_order_id' => $payment_order_id,
            'status' => OrderStatus::NOT_PAID->value
        ], __CLASS__)->find();
    }

    public function items(): array
    {
        if (! $this->order_items) {
            $this->order_items = (new OrderItem())->forOrder($this->id);
        }

        return $this->order_items;
    }

    public function changeStatusToPaid(string $track_id): static
    {
        return $this->update([
            'status' => OrderStatus::PAID->value,
            'track_id' => $track_id,
            'updated_at' => now(),
            'id' => $this->id
        ]);
    }

    public function changeStatusToFailed(string $track_id): static
    {
        return $this->update([
            'status' => OrderStatus::FAILED->value,
            'track_id' => $track_id,
            'id' => $this->id
        ]);
    }

    public function isPaid(): bool
    {
        return $this->status === OrderStatus::PAID->value;
    }

    public function editLink(): string
    {
        return route('admin.order.edit', ['id' => $this->id]);
    }

    public function status(): OrderStatus
    {
        return OrderStatus::from($this->status);
    }

    public function updateStatus(array $data): Order
    {
        return $this->update([
            'status' => $data['status'],
            'payment_order_id' => $data['payment_order_id'],
            'track_id' => $data['track_id']
        ]);
    }

    public function hasShipment(): bool
    {
        return !! $this->shipment_id;
    }

    public function user(): ?User
    {
        if (! $this->user) {
            $this->user = (new User)->find($this->user_id);
        }

        return $this->user;
    }

    public function shipment(): ?Shipment
    {
        if (! $this->hasShipment()) return null;

        if (! $this->shipment) {
            $this->shipment = (new Shipment)->find($this->shipment_id);
        }

        return $this->shipment;
    }

    public function createNewShipment(): Order
    {
        $shipment = (new Shipment)->create([
            'user_id' => $this->user_id,
            'address' => $this->user()?->address ?: ' ',
            'status' => Shipment::PROCESSING
        ]);

        return $this->update([
            'shipment_id' => $shipment->id
        ]);
    }

    public function paidForUser(int $id): array
    {
        $sql = "SELECT * FROM {$this->table} WHERE user_id=:user_id AND status=:status";

        return $this->db->prepare($sql, [
            'user_id' => $id,
            'status' => OrderStatus::PAID->value
        ], __CLASS__)->all();
    }

    public function viewLink(): string
    {
        return route('dashboard.order.show', ['id' => $this->id]);
    }

    public function totalIncome()
    {
        $sql = "SELECT SUM(`amount`) AS total FROM {$this->table} WHERE status=:status LIMIT 1";

        return $this->db->prepare($sql, [
            'status' => OrderStatus::PAID->value
        ], __CLASS__)->find()->total;
    }

    public function totalOrders()
    {
        $sql = "SELECT COUNT(`id`) AS count FROM {$this->table} WHERE status=:status LIMIT 1";

        return $this->db->prepare($sql, [
            'status' => OrderStatus::PAID->value
        ], __CLASS__)->find()->count;
    }

    public function mostPurchased($limit = 3)
    {
        $sql = "
            SELECT oi.product_id,SUM(oi.quantity) AS sum, SUM(oi.unit_price) AS total_price FROM orders AS o
            LEFT JOIN order_items AS oi
                ON oi.order_id=o.id
            GROUP BY oi.product_id
            ORDER BY sum DESC LIMIT {$limit}
        ";

        return $this->db->prepare($sql, [], OrderItem::class)->all();
    }

    public function topPurchasedProducts(int $limit)
    {
        $sql = "
            SELECT p.*, oi.product_id, SUM(oi.quantity) AS sum FROM orders AS o
            LEFT JOIN order_items AS oi
                ON oi.order_id=o.id
            LEFT JOIN products AS p
                ON p.id=oi.product_id
            GROUP BY oi.product_id
            ORDER BY sum DESC LIMIT {$limit}
        ";

        return $this->db->prepare($sql, [], Product::class)->all();
    }

    public function filtered(array $data)
    {
        $sql = "SELECT * FROM {$this->table} WHERE 1";
        $values = [];

        if ($data['status'] ?? false) {
            $sql .= " AND status=:status";
            $values['status'] = $data['status'];
        }

        return $this->db->paginate($sql, $values, __CLASS__);
    }
}