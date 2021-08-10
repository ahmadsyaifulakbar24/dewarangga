<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'code_product' =>  'SYH',
            'product_name' => 'Syariah',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'code_product' =>  'TFS',
            'product_name' => 'Trade Finance & Service',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'code_product' =>  'PJ',
            'product_name' => 'Pinjaman',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'code_product' =>  'SPN',
            'product_name' => 'Simpanan',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'code_product' =>  'VLS',
            'product_name' => 'Valas',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
