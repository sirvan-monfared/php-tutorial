<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;

class HomeController extends BaseController
{
    public function index()
    {
        $this->view('admin.home', [
            'totalIncome' => (new Order)->totalIncome(),
            'totalOrders' => (new Order)->totalOrders(),
            'totalProducts' => (new Product)->total(),
            'totalUsers' => (new User)->total(),
            'mostPurchased' => (new Order())->mostPurchased(),
            'recentOrderItems' => (new OrderItem())->all(limit: 4)
        ]);
    }
}