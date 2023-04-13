<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    public function run()
    {
        $classes = [
            [
                'id' => 1,
                'class_name' => 'Bárbaro',
            ],
            [
                'id' => 2,
                'class_name' => 'Bardo',
            ],
            [
                'id' => 3,
                'class_name' => 'Bruxo',
            ],
            [
                'id' => 4,
                'class_name' => 'Clérigo',
            ],
            [
                'id' => 5,
                'class_name' => 'Druida',
            ],
            [
                'id' => 6,
                'class_name' => 'Feiticeiro',
            ],
            [
                'id' => 7,
                'class_name' => 'Guerreiro',
            ],
            [
                'id' => 8,
                'class_name' => 'Ladino',
            ],
            [
                'id' => 9,
                'class_name' => 'Mago',
            ],
            [
                'id' => 10,
                'class_name' => 'Monge',
            ],
            [
                'id' => 11,
                'class_name' => 'Paladino',
            ],
            [
                'id' => 12,
                'class_name' => 'Patrulheiro',
            ],
            
        ];
        foreach($classes as $class){
            Classes::updateOrCreate(['id'=>$class['id']], $class);
        }
    }
}
