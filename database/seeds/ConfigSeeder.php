<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
        // 
        $config = [
            [
                'config_name' => 'company_name',
                'config_label' => 'Company Name',
                'value' => 'SOGE POS',
                'notes' => '',
                'group_by' => 'company',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'config_name' => 'company_address',
                'config_label' => 'Company Address',
                'value' => 'Jl. Jalan Bersamamu, Mojokerto, Jawa Timur',
                'notes' => '',
                'group_by' => 'company',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'config_name' => 'company_phone',
                'config_label' => 'Company Phone',
                'value' => '0812123434',
                'notes' => '',
                'group_by' => 'company',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'config_name' => 'company_email',
                'config_label' => 'Company Email',
                'value' => 'contact@sogepos.com',
                'notes' => '',
                'group_by' => 'company',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'config_name' => 'company_website',
                'config_label' => 'Company Website',
                'value' => 'https://sogepos.com',
                'notes' => '',
                'group_by' => 'company',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'config_name' => 'invoice_prefix',
                'config_label' => 'Invoice Prefix',
                'value' => 'SOGE/INV-',
                'notes' => '',
                'group_by' => 'invoice',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'config_name' => 'invoice_postfix',
                'config_label' => 'Invoice Postfix',
                'value' => '',
                'notes' => '',
                'group_by' => 'invoice',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'config_name' => 'invoice_note',
                'config_label' => 'Invoice Note',
                'value' => 'Terimakasih telah berkunjung!<br> Share pengalamanmu dengan hashtag #sogepos',
                'notes' => '',
                'group_by' => 'invoice',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
        ];

        // insert config
        DB::table('config')->insert($config);
    }
}
