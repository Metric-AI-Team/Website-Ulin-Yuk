<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('configurations')->insert([
            [
                'id'                         => '1',
                'config_key'                 => 'ngrok',
                'config_value'               => '',
                'created_at'                 => date('Y-m-d H:i:s'),
                'updated_at'                 => date('Y-m-d H:i:s')
            ],

        ]);
    }
}
