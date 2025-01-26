<?php

namespace Database\Seeders;

use App\Models\Product; // Import the Product model
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Laptop', 'price' => 1200.99]);
        Product::create(['name' => 'Smartphone', 'price' => 699.49]);
        Product::create(['name' => 'Tablet', 'price' => 329.99]);
       
        for ($i = 1; $i <= 200; $i++) {
            Product::create([
                'name' => 'Product ' . $i, // Example: "Product 1", "Product 2", etc.
                'price' => rand(100, 10000) / 100, // Random price between 1.00 and 100.00
            ]);
        }
    }
}