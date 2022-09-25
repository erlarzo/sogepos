<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'role_name' => 'admin',
                'role_label' => 'Administrator',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'role_name' => 'owner',
                'role_label' => 'Pemilik',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'role_name' => 'cashier',
                'role_label' => 'Kasir',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'role_name' => 'kitchen',
                'role_label' => 'Dapur',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ]
        ];

        DB::table('role')->insert($roles);
    }
}
