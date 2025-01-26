<?php

namespace Database\Seeders;

use App\Models\Product; // Import the Product model
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Predefined array of 30 device names
        $deviceNames = [
            'Laptop',
            'Smartphone',
            'Tablet',
            'Monitor',
            'Keyboard',
            'Mouse',
            'Printer',
            'Scanner',
            'Router',
            'Smartwatch',
            'Headphones',
            'Speaker',
            'Camera',
            'Drone',
            'Projector',
            'External Hard Drive',
            'USB Flash Drive',
            'Graphics Card',
            'Motherboard',
            'Processor',
            'RAM',
            'Power Supply',
            'Cooling Fan',
            'SSD',
            'HDD',
            'Microphone',
            'Webcam',
            'Earbuds',
            'Smart Home Hub',
            'Fitness Tracker'
        ];

        // Predefined products
        $products = [
            ['name' => 'Laptop', 'price' => 1200.99],
            ['name' => 'Smartphone', 'price' => 699.49],
            ['name' => 'Tablet', 'price' => 329.99],
        ];
        for ($i = 1; $i <= 10000; $i++) {
            $products[] = [
                'name' => $deviceNames[array_rand($deviceNames)], // Randomly pick a device name
                'price' => rand(100, 10000) / 100, // Random price between 1.00 and 100.00
            ];
        }

        // Insert all products in a single query
        Product::insert($products);
    }
}
