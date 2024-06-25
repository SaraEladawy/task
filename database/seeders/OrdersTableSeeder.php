<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'user_id' => 1,
            'product_id' => 1,
            'total' => 20
        ]);

        Order::create([
            'user_id' => 2,
            'product_id' => 2,
            'quantity' => 2,
            'total' => 80
        ]);

        Order::create([
            'user_id' => 3,
            'product_id' => 3,
            'total' => 50
        ]);

        Order::create([
            'user_id' => 4,
            'product_id' => 4,
            'total' => 90
        ]);
    }
}
