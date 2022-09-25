<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_minuman = DB::table('category')->where('category_name', 'minuman')->first();
        $category_makanan = DB::table('category')->where('category_name', 'makanan')->first();

        $minuman = [
            [
                'category_id' => $category_minuman->id,
                'product_name' => 'Kopi Hitam',
                'sku' => 'kp-001',
                'barcode' => '',
                'qty' => 100,
                'price' => 4500,
                'description' => 'Ini deskripsi kopi hitam',
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'category_id' => $category_minuman->id,
                'product_name' => 'Kopi Susu',
                'sku' => 'kp-002',
                'barcode' => '',
                'qty' => 100,
                'price' => 6500,
                'description' => 'Ini deskripsi kopi susu',
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'category_id' => $category_minuman->id,
                'product_name' => 'Cappucinno',
                'sku' => 'cap-001',
                'barcode' => '',
                'qty' => 100,
                'price' => 8500,
                'description' => 'Ini deskripsi cappucinno',
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ]
        ];

        // insert kategori minuman
        DB::table('product')->insert($minuman);

        $makanan = [
            [
                'category_id' => $category_makanan->id,
                'product_name' => 'Tongseng Kadal',
                'sku' => 'food-001',
                'barcode' => '',
                'qty' => 10,
                'price' => 18500,
                'description' => 'Ini deskripsi tongseng kadal',
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'category_id' => $category_makanan->id,
                'product_name' => 'Nasi Kambing Rusia',
                'sku' => 'food-002',
                'barcode' => '',
                'qty' => 30,
                'price' => 20500,
                'description' => 'Ini deskripsi nasi kambing rusia',
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'category_id' => $category_makanan->id,
                'product_name' => 'Pecel Argentina',
                'sku' => 'food-003',
                'barcode' => '',
                'qty' => 15,
                'price' => 12500,
                'description' => 'Ini deskripsi pecel argentina',
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ]
        ];

        // insert kategori makanan
        DB::table('product')->insert($makanan);
    }
}
