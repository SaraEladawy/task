<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = Product::create([
            'price' => 20,
        ]);
        $product->product_descriptions()->create([
            'name' => 'first product',
            'language_id' => 1, 
        ]);

        $product = Product::create([
            'price' => 40,
        ]);
        $product->product_descriptions()->create([
            'name' => 'second product',
            'language_id' => 1, 
        ]);

        $product = Product::create([
            'price' => 50,
        ]);
        $product->product_descriptions()->create([
            'name' => 'third product',
            'language_id' => 1, 
        ]);

        $product = Product::create([
            'price' => 90,
        ]);
        $product->product_descriptions()->create([
            'name' => 'forth product',
            'language_id' => 1, 
        ]);
    }
}
