<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [

            [
                'id' => 1,
                'skill_name' => 'Acrobacia',
                'attribute' => 'DES',
                'description' => 'Feitos de agilidade como se equilibrar numa corda, acrobacia, escapar de amarras.',
                'skill_class' => 'Guerreiro, Ladino, Monge, Paladino',
                'skill_background' => 'Artista'
            ],
            [
                'id' => 2,
                'skill_name' => 'Adestrar Animais',
                'attribute' => 'SAB',
                'description' => 'Acalmar ou se comunicar com animais, treiná-los e comanda-los a fazer alguma coisa.',
                'skill_class' => 'Bárbaro, Druída, Guerreiro, Patrulheiro',
                'skill_background' => 'Herói do Povo'
            ],
            [
                'id' => 3,
                'skill_name' => 'Arcanismo',
                'attribute' => 'INT',
                'description' => 'Conhecimento sobre magias, itens mágicos, tradições e planos de existência.',
                'skill_class' => 'Bruxo, Druída, Feiticeiro, Mago',
                'skill_background' => 'Acadêmico Recluso, Cavaleiro da Ordem, Herdeiro, Sábio'
            ],
            [
                'id' => 4,
                'skill_name' => 'Atletismo',
                'attribute' => 'FOR',
                'description' => 'Feitos de força, como escalar, saltar, correr e nadar.',
                'skill_class' => 'Bárbaro, Guerreiro, Ladino, Monge, Patrulheiro',
                'skill_background' => 'Forasteiro, Marinheiro, Mercenário Veterano, Soldado, Vigia da Cidade'
            ],
            [
                'id' => 5,
                'skill_name' => 'Atuação',
                'attribute' => 'CAR',
                'description' => 'Arte de entretenimento, como música, dança, canto, poesia, oratória, malabarismo, etc.',
                'skill_class' => 'Ladino',
                'skill_background' => 'Artista'
            ],
            [
                'id' => 6,
                'skill_name' => 'Enganação',
                'attribute' => 'CAR',
                'description' => 'Mentir, blefar e enganação de todo o tipo. Se suas intenções não são honestas, é enganação.',
                'skill_class' => 'Bruxo, Feiticeiro, Ladino',
                'skill_background' => 'Caçador de Recompensas, Charlatão, Criminoso'
            ],
            [
                'id' => 7,
                'skill_name' => 'Furtividade',
                'attribute' => 'DES',
                'description' => 'Esconder-se de oponentes, não fazer barulho, etc.',
                'skill_class' => 'Ladino, Monge, Patrulheiro',
                'skill_background' => 'Caçador de Recompensas, Criminoso, Órfão'
            ],
            [
                'id' => 8,
                'skill_name' => 'História',
                'attribute' => 'INT',
                'description' => 'Eventos históricos, lendas, reinos antigos e etc. Também parece ser usada para identificar lendas de itens mágicos e construções em geral.',
                'skill_class' => 'Bruxo, Clérigo, Guerreiro, Mago, Monge',
                'skill_background' => 'Acadêmico Recluso, Cavaleiro da Ordem, Herdeiro, Nobre, Sábio'
            ],
            [
                'id' => 9,
                'skill_name' => 'Intimidar',
                'attribute' => 'CAR',
                'description' => 'Tentar influenciar alguém com hostilidade e violência, como dar uma surra por informação, torturar, etc.',
                'skill_class' => 'Bárbaro, Bruxo, Feiticeiro, Guerreiro, Ladino, Paladino',
                'skill_background' => 'Soldado'
            ],
            [
                'id' => 10,
                'skill_name' => 'Intuição',
                'attribute' => 'SAB',
                'description' => 'Tentar sentir as intenções de alguém, seja uma pessoa ou grupo, e ter sextos sentidos sobre as coisas.',
                'skill_class' => 'Clérigo, Druída, Feiticeiro, Guerreiro, Ladino, Mago, Paladino, Patrulheiro',
                'skill_background' => 'Acólito, Agente da Facção, Artesão da Guilda, Caçador de Recompensas, Cortesão, Viajante Distante, Vigia da Cidade'
            ],
            [
                'id' => 11,
                'skill_name' => 'Investigação',
                'attribute' => 'INT',
                'description' => 'Ir atrás de pistas. Coisas como procurar marcas num cadáver ou achar uma porta escondida, mas também investigar uma biblioteca atrás de um ritual perdido.',
                'skill_class' => 'Bruxo, Mago, Patrulheiro',
                'skill_background' => null
            ],
            [
                'id' => 12,
                'skill_name' => 'Medicina',
                'attribute' => 'SAB',
                'description' => 'Arte de fisiologia e cura, como primeiros socorros e cirurgia.',
                'skill_class' => 'Clérigo, Druída, Mago, Paladino',
                'skill_background' => 'Eremita'
            ],
            [
                'id' => 13,
                'skill_name' => 'Natureza',
                'attribute' => 'INT',
                'description' => 'Informações sobre terreno, plantas, detalhes geográficos, clima, etc.',
                'skill_class' => 'Bárbaro, Bruxo, Druída, Patrulheiro',
                'skill_background' => 'Acadêmico Recluso'
            ],
            [
                'id' => 14,
                'skill_name' => 'Percepção',
                'attribute' => 'SAB',
                'description' => 'Afiar os sentidos em geral; ouvir do outro lado de porta, notar uma emboscada, sentir cheiro de gás, etc.',
                'skill_class' => 'Bárbaro, Druída, Guerreiro, Ladino, Patrulheiro',
                'skill_background' => 'Marinheiro, Viajante Distante'
            ],
            [
                'id' => 15,
                'skill_name' => 'Persuasão',
                'attribute' => 'CAR',
                'description' => 'Agir com tato e etiqueta, e atos de convencer as pessoas usando de boa fé.',
                'skill_class' => 'Clérigo, Feiticeiro, Ladino, Paladino',
                'skill_background' => 'Artesão da Guilda, Caçador de Recompensas, Cavaleiro da Ordem, Cortesão, Mercenário Veterano, Nobre'
            ],
            [
                'id' => 16,
                'skill_name' => 'Prestidigitação',
                'attribute' => 'DES',
                'description' => 'A arte dos dedos rápidos, como roubar ou sacar armas pequenas sem ser notado.',
                'skill_class' => 'Ladino',
                'skill_background' => 'Charlatão, Órfão'
            ],
            [
                'id' => 17,
                'skill_name' => 'Religião',
                'attribute' => 'INT',
                'description' => 'Conhecimento sobre rituais, orações, itens religiosos, heresias, etc.',
                'skill_class' => 'Bruxo, Clérigo, Druída, Feiticeiro, Mago, Monge, Paladino',
                'skill_background' => 'Acadêmico Recluso, Acólito, Cavaleiro da Ordem, Eremita, Herdeiro'
            ],
            [
                'id' => 18,
                'skill_name' => 'Sobrevivência',
                'attribute' => 'SAB',
                'description' => 'A arte do ermo, rastrear, seguir pistas, achar abrigo, comida, etc.',
                'skill_class' => 'Bárbaro, Druída, Guerreiro, Patrulheiro',
                'skill_background' => 'Forasteiro, Herdeiro, Herói do Povo'
            ],
            // [
            //     'id' => 19,
            //     'skill_name' => '',
            //     'attribute' => '',
            //     'description' => '',
            //     'skill_class' => '',
            //     'skill_background' => ''
            // ],
        ];

            foreach($skills as $skill){
                Skills::updateOrCreate(['id'=>$skill['id']], $skill);
            }
    }
}
