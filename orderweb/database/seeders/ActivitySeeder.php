<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Activity::insert([
           [ 
            'descripcion'=> 'Actividad de prueba 1',
            'hours' => 8,
            'technician_id' => 1,
            'type_activity_id' => 1
           ],
           [ 
             'description'      => 'Acttividad de prueba 2',
             'hours'            => 16,
             'technician_id'    => 1,
             'type_activity-id' => 2
           ]
        ]);
    }
}
