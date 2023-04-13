<?php

namespace Database\Seeders;

use App\Models\Wpn_Properties;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WpnPropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = [
            [
                'id' => 1,
                'property_name' => 'Acuidade',
            ],
            [
                'id' => 2,
                'property_name' => 'Alcance',
            ],
            [
                'id' => 3,
                'property_name' => 'Arremesso',
            ],
            [
                'id' => 4,
                'property_name' => 'Distância',
            ],
            [
                'id' => 5,
                'property_name' => 'Duas Mãos',
            ],
            [
                'id' => 6,
                'property_name' => 'Especial',
            ],
            [
                'id' => 7,
                'property_name' => 'Leve',
            ],
            [
                'id' => 8,
                'property_name' => 'Munição',
            ],
            [
                'id' => 9,
                'property_name' => 'Pesada',
            ],
            [
                'id' => 10,
                'property_name' => 'Recarga',
            ],
            [
                'id' => 11,
                'property_name' => 'Versátil',
            ],     
        ];
        foreach($properties as $property){
            Wpn_Properties::updateOrCreate(['id'=>$property['id']], $property);
        }
    }
}
