<?php

namespace Database\Seeders;

use App\Models\Background;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $backgrounds = [
            [
                'id' => 1,
                'bg_name' => 'Acólito',
            ],
            [
                'id' => 2,
                'bg_name' => 'Acadêmico recluso',
            ],
            [
                'id' => 3,
                'bg_name' => 'Agente da Facção',
            ],
            [
                'id' => 4,
                'bg_name' => 'Artesão de Guilda',
            ],
            [
                'id' => 5,
                'bg_name' => 'Artista',
            ],
            [
                'id' => 6,
                'bg_name' => 'Caçador de recompensas',
            ],
            [
                'id' => 7,
                'bg_name' => 'Cavaleiro da Ordem',
            ],
            [
                'id' => 8,
                'bg_name' => 'Charlatão',
            ],
            [
                'id' => 9,
                'bg_name' => 'Cortesão',
            ],
            [
                'id' => 10,
                'bg_name' => 'Criminoso',
            ],
            [
                'id' => 11,
                'bg_name' => 'Eremita',
            ],
            [
                'id' => 12,
                'bg_name' => 'Forasteiro',
            ],
            [
                'id' => 13,
                'bg_name' => 'Herdeiro',
            ],
            [
                'id' => 14,
                'bg_name' => 'Herói do povo',
            ],
            [
                'id' => 15,
                'bg_name' => 'Marinheiro',
            ],
            [
                'id' => 16,
                'bg_name' => 'Mercenário veterano',
            ],
            [
                'id' => 17,
                'bg_name' => 'Nobre',
            ],
            [
                'id' => 18,
                'bg_name' => 'Órfão',
            ],
            [
                'id' => 19,
                'bg_name' => 'Sábio',
            ],
            [
                'id' => 20,
                'bg_name' => 'Soldado',
            ],
            [
                'id' => 21,
                'bg_name' => 'Viajante distante',
            ],
            [
                'id' => 22,
                'bg_name' => 'Vigia da cidade',
            ],
        ];
        foreach($backgrounds as $background){
            Background::updateOrCreate(['id'=>$background['id']], $background);
        }
    }
}
