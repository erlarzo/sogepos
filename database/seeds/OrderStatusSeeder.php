<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderstatus = [
            [
                'order_status_name' => 'Sedang diproses',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'order_status_name' => 'Sudah diproses',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'order_status_name' => 'Selesai',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
        ];

        DB::table('order_status')->insert($orderstatus);
    }
}
