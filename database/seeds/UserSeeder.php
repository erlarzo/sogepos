<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // get role_id
        $admin_id = Role::where('role_name', 'admin')->first()->id;
        $owner_id = Role::where('role_name', 'owner')->first()->id;
        $cashier_id = Role::where('role_name', 'cashier')->first()->id;
        $kitchen_id = Role::where('role_name', 'kitchen')->first()->id;

        // make default user or admin
        $user = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'phone' => '0812345678',
                'password' => Hash::make('admin'),
                'role_id' => $admin_id,
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'name' => 'Owner',
                'username' => 'owner',
                'email' => 'owner@gmail.com',
                'phone' => '0811111111',
                'password' => Hash::make('owner'),
                'role_id' => $owner_id,
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'name' => 'Cashier',
                'username' => 'kasir',
                'email' => 'kasir@gmail.com',
                'phone' => '0822222222',
                'password' => Hash::make('kasir'),
                'role_id' => $cashier_id,
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'name' => 'Dapur',
                'username' => 'dapur',
                'email' => 'dapur@gmail.com',
                'phone' => '0833333333',
                'password' => Hash::make('dapur'),
                'role_id' => $kitchen_id,
                'is_active' => 1,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ]
        ];

        DB::table('user')->insert($user);
    }
}
