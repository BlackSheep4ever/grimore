<?php

namespace Database\Seeders;

use App\Models\Spells;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpellsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spells = [

            [
                'id' => 1,
                'spell_class' => 'Artificer, Sorcerer, Wizard',
                'spell_level' => 'Cantrip',
                'spell_name' => 'Acid Splash',
                'spell_school' => 'Conjuration',
                'casting_time' => '1 action',
                'range' => '60 feet',
                'duration' => 'Instantaneous',
                'components' => ' V, S',
                'description' =>
                'You hurl a bubble of acid. Choose one creature you can see within range, or choose two creatures you can see within range that are within 5 feet of each other. A target must succeed on a Dexterity saving throw or take 1d6 acid damage.

                At Higher Levels. This spells damage increases by 1d6 when you reach 5th level (2d6), 11th level (3d6), and 17th level (4d6).',
                'source' => 'Player Handbook',
                'tag' => 'attribute, skill'
            ],
        ];

            foreach($spells as $spell){
                Spells::updateOrCreate(['id'=>$spell['id']], $spell);
            }
    }
}
