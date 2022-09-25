<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // MENU CATEGORY
        $product = [
            [
                'category_name' => 'makanan',
                'category_label' => 'Makanan',
                'group_by' => 'product',
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'category_name' => 'minuman',
                'category_label' => 'Minuman',
                'group_by' => 'product',
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ]
        ];
        // insert kategori product
        DB::table('category')->insert($product);

        // 
        $payment = [
            [
                'category_name' => 'cash',
                'category_label' => 'Cash',
                'group_by' => 'payment',
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'category_name' => 'debit_card_bca',
                'category_label' => 'Kartu Debit BCA',
                'group_by' => 'payment',
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'category_name' => 'debit_card_mandiri',
                'category_label' => 'Kartu Debit Mandiri',
                'group_by' => 'payment',
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'category_name' => 'debit_card_bni',
                'category_label' => 'Kartu Debit BNI',
                'group_by' => 'payment',
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'category_name' => 'gopay',
                'category_label' => 'Gopay',
                'group_by' => 'payment',
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'category_name' => 'ovo',
                'category_label' => 'OVO',
                'group_by' => 'payment',
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ]
        ];

        // insert kategori payment
        DB::table('category')->insert($payment);

        // Order type
        $order_type = [
            [
                'category_name' => 'dine_in',
                'category_label' => 'Dine In',
                'group_by' => 'order_type',
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'category_name' => 'take_away',
                'category_label' => 'Take Away',
                'group_by' => 'order_type',
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ]
        ];
        // insert kategori order_type
        DB::table('category')->insert($order_type);
    }
}
