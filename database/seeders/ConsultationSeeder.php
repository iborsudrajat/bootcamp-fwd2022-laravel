<?php

namespace Database\Seeders;

use App\Models\MasterData\Consulatation;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // created data here
       $consultation = [
        [
            'name' => 'Jantung Sesal',
            
        ],
        [
            'name' => 'Tekanan Darah Tinggi',
            
        ],
        [
            'name' => 'Gangguan Irama Jantung',
            
        ],
        
    ];

    // this array $consultation will be insert to table 'consultation'
    Consultation::insert($consultation);
    }
    
}
