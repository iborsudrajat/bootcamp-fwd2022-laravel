<?php

namespace Database\Seeders;

use App\Models\MasterData\ConfigPayment;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // created data here
       $config_payment = [
        [
            'fee' => '150000',
            'vat' => '20', // vat is percentage
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        
    ];

    // this array $config_payment will be insert to table 'config_payment'
    ConfigPayment::insert($config_payment);
    }
}
