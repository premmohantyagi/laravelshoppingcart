<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Product 1',
            'slug' => 'product-1',
            'description' => 'description goes here',
            'price' => 500,
            'image' => 'wireless_speaker.jpg',
            'color' => 'Standard',
            'size' => 'Standard',
        ]);

        DB::table('products')->insert([
            'name' => 'Product 2',
            'slug' => 'product-2',
            'description' => 'description goes here',
            'price' => 600,
            'image' => 'camera.jpg',
            'color' => 'Standard',
            'size' => 'Standard',
        ]);

        DB::table('products')->insert([
            'name' => 'Product 3',
            'slug' => 'product-3',
            'description' => 'description goes here',
            'price' => 3000,
            'image' => 'cctv.jpg',
            'color' => 'Standard',
            'size' => 'Standard',
        ]);

        DB::table('products')->insert([
            'name' => 'Product 4',
            'slug' => 'product-4',
            'description' => 'description goes here',
            'price' => 900,
            'image' => 'hd-tv.jpg',
            'color' => 'Standard',
            'size' => 'Standard',
        ]);

        DB::table('products')->insert([
            'name' => 'Product 5',
            'slug' => 'product-5',
            'description' => 'description goes here',
            'price' => 800,
            'image' => 'hawai-phone.jpg',
            'color' => 'Standard',
            'size' => 'Standard',
        ]);
        DB::table('products')->insert([
            'name' => 'Product 6',
            'slug' => 'product-6',
            'description' => 'description goes here',
            'price' => 1000,
            'image' => 'laptop.jpg',
            'color' => 'Standard',
            'size' => 'Standard',
        ]);

        DB::table('products')->insert([
            'name' => 'Product 7',
            'slug' => 'product-7',
            'description' => 'description goes here',
            'price' => 200,
            'image' => 'smartphone.jpg',
            'color' => 'Standard',
            'size' => 'Standard',
        ]);

        DB::table('products')->insert([
            'name' => 'Product 8',
            'slug' => 'product-8',
            'description' => 'description goes here',
            'price' => 600,
            'image' => 'bluetooth_spekaer.jpg',
            'color' => 'Standard',
            'size' => 'Standard',
        ]);
    }
}
