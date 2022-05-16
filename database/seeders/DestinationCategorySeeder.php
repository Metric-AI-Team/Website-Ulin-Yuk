<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destination_categories')->insert([
            [
                'destination_category_id'    => '1',
                'destination_category_name'  => 'Keluarga',
                'created_at'                 => date('Y-m-d H:i:s'),
                'updated_at'                 => date('Y-m-d H:i:s')
            ],

            [
                'destination_category_id'    => '2',
                'destination_category_name'  => 'Sejarah',
                'created_at'                 => date('Y-m-d H:i:s'),
                'updated_at'                 => date('Y-m-d H:i:s')
            ],

            [
                'destination_category_id'    => '3',
                'destination_category_name'  => 'Honeymoon',
                'created_at'                 => date('Y-m-d H:i:s'),
                'updated_at'                 => date('Y-m-d H:i:s')
            ],

        ]);
    }
}
