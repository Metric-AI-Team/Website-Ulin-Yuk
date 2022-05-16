<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CulinaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('culinary_categories')->insert([
            [
                'culinary_category_id'       => '1',
                'culinary_category_name'     => 'Streetfood',
                'created_at'                 => date('Y-m-d H:i:s'),
                'updated_at'                 => date('Y-m-d H:i:s')
            ],

            [
                'culinary_category_id'       => '2',
                'culinary_category_name'     => 'Makanan Khas',
                'created_at'                 => date('Y-m-d H:i:s'),
                'updated_at'                 => date('Y-m-d H:i:s')
            ],

            [
                'culinary_category_id'       => '3',
                'culinary_category_name'     => 'Oleh-oleh Bandung',
                'created_at'                 => date('Y-m-d H:i:s'),
                'updated_at'                 => date('Y-m-d H:i:s')
            ],

        ]);
    }
}
