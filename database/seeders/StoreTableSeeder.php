<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stores = \App\Models\Store::all();

        foreach($stores as $store){
            $product = \App\Models\Product::factory()->make();
            $store->products()->save($product);
        }        
    }
}
