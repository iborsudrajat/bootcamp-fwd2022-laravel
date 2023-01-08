<?php

namespace Database\Seeders;

use App\Models\MasterData\TypeUser;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // created data here
       $type_user = [
        [
            'name' => 'Admin',
            
        ],
        [
            'name' => 'Dokter',
            
        ],
        [
            'name' => 'Pasien',
            
        ],
        
    ];

    // this array $type_user will be insert to table 'type_user'
    TypeUser::insert($type_user);
    }
    
}
