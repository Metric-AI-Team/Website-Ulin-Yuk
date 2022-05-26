<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vouchers')->insert([
            [
                'voucher_code'               => 'v-10ka',
                'voucher_saldo'              => '10000',
                'created_at'                 => date('Y-m-d H:i:s'),
                'updated_at'                 => date('Y-m-d H:i:s')
            ],

            [
                'voucher_code'               => 'v-20ka',
                'voucher_saldo'              => '20000',
                'created_at'                 => date('Y-m-d H:i:s'),
                'updated_at'                 => date('Y-m-d H:i:s')
            ],

            [
                'voucher_code'               => 'v-30ka',
                'voucher_saldo'              => '30000',
                'created_at'                 => date('Y-m-d H:i:s'),
                'updated_at'                 => date('Y-m-d H:i:s')
            ],

            [
                'voucher_code'               => 'v-40ka',
                'voucher_saldo'              => '40000',
                'created_at'                 => date('Y-m-d H:i:s'),
                'updated_at'                 => date('Y-m-d H:i:s')
            ],

            [
                'voucher_code'               => 'v-50ka',
                'voucher_saldo'              => '50000',
                'created_at'                 => date('Y-m-d H:i:s'),
                'updated_at'                 => date('Y-m-d H:i:s')
            ],

        ]);
    }
}
