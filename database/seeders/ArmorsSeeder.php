<?php

namespace Database\Seeders;

use App\Models\Armors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArmorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $armors = [

            [
                'id' => 1,
                'armor_name' => 'Acolchoada',
                'armor_type' => 'Leve',
                'class_armor' => '11 + DES',
                'requirements' => 'Nenhum',
                'description' => 'Armadura acolchoada consiste em camadas estofadas de tecido e forro',
                'penalty' => 'Normal',
                'cost' => '5po',
                'Weight' => '4k',
            ],
            [
                'id' => 2,
                'armor_name' => 'Couro',
                'armor_type' => 'Leve',
                'class_armor' => '11 + DES',
                'requirements' => 'Nenhum',
                'description' => 'Os protetores de peitoral e ombros desta armadura são feitos de peças de couro que foram reforçadas ao serem curtidas em óleo. O restante da armadura é feito de materiais mais macios e ﬂexíveis.',
                'penalty' => 'Normal',
                'cost' => '10po',
                'Weight' => '5k',
            ],
            [
                'id' => 3,
                'armor_name' => 'Couro Batido',
                'armor_type' => 'Leve',
                'class_armor' => '12 + DES',
                'requirements' => 'Nenhum',
                'description' => 'Feita de um couro mais rígido, porém ﬂexível, reforçado com rebites próximos uns dos outros ou com cravos.',
                'penalty' => 'Normal',
                'cost' => '45po',
                'Weight' => '6,5k',
            ],
            [
                'id' => 4,
                'armor_name' => 'Peles',
                'armor_type' => 'Média',
                'class_armor' => '12 + DES (máx. 2)',
                'requirements' => 'Nenhum',
                'description' => 'Esta armadura rústica consiste em peles e couros grossos. Geralmente é usada por tribos bárbaras, humanoides malignos e outros povos que não têm acesso às ferramentas e materiais necessários para a criação de armaduras melhores.',
                'penalty' => 'Normal',
                'cost' => '10po',
                'Weight' => '6k',
            ],
            [
                'id' => 5,
                'armor_name' => 'Camisa de Malha',
                'armor_type' => 'Média',
                'class_armor' => '13 + DES (máx. 2)',
                'requirements' => 'Nenhum',
                'description' => 'Feita de anéis de metal interligados, é basicamente um camisão de malha usado entre camadas de tecido ou couro. Esta armadura oferece uma proteção limitada para a parte superior do corpo e permite que o som dos anéis se esfregando uns contra os outros seja abafado pelas camadas exteriores.',
                'penalty' => 'Normal',
                'cost' => '50po',
                'Weight' => '10k',
            ],
            [
                'id' => 6,
                'armor_name' => 'Escamas',
                'armor_type' => 'Média',
                'class_armor' => '14 + DES (máx. 2)',
                'requirements' => 'Nenhum',
                'description' => 'Esta armadura é composta por um casaco e perneiras (e, talvez, por um saiote) feitos de couro   e cobertos com camadas sobrepostas de peças de metal que lembram as escamas de um peixe. O traje inclui manoplas.',
                'penalty' => 'Desvantagem',
                'cost' => '50po',
                'Weight' => '22,5k',
            ],
            [
                'id' => 7,
                'armor_name' => 'Peitoral de Aço',
                'armor_type' => 'Média',
                'class_armor' => '14 + DES (máx. 2)',
                'requirements' => 'Nenhum',
                'description' => 'Esta armadura é composta por um pedaço de metal revestido de couro que se ajusta ao peito. Embora deixe as pernas e braços relativamente desprotegidos, esta armadura fornece boa proteção para os órgãos vitais do usuário, deixando-o relativamente com pouca carga.',
                'penalty' => 'Normal',
                'cost' => '400po',
                'Weight' => '10k',
            ],
            [
                'id' => 8,
                'armor_name' => 'Meia-Armadura',
                'armor_type' => 'Média',
                'class_armor' => '15 + DES (máx. 2)',
                'requirements' => 'Nenhum',
                'description' => 'Esta armadura consiste em placas de metal moldadas que cobrem a maior parte do corpo do usuário. Ela não inclui proteção para as pernas a não ser por tornozeleiras simples, presas com tiras de couro.',
                'penalty' => 'Desvantagem',
                'cost' => '750po',
                'Weight' => '20k',
            ],
            [
                'id' => 9,
                'armor_name' => 'Cota de Anéis',
                'armor_type' => 'Pesada',
                'class_armor' => '14',
                'requirements' => 'Nenhum',
                'description' => 'Uma armadura de couro com anéis pesados costurados em toda a sua extensão. Os anéis ajudam a reforçar a armadura contra golpes de espadas e machado. A cota de anéis é inferior à cota de malha, em geral sendo usada apenas por aqueles que não podem comprar uma armadura melhor.',
                'penalty' => 'Desvantagem',
                'cost' => '30po',
                'Weight' => '20k',
            ],
            [
                'id' => 10,
                'armor_name' => 'Cota de Malha',
                'armor_type' => 'Pesada',
                'class_armor' => '16',
                'requirements' => 'FOR 13',
                'description' => 'Feita de anéis de metal interligados, a cota de malha inclui uma camada de tecido acolchoado usada sob a cota para evitar o atrito e amortecer o impacto dos golpes. O traje inclui manoplas.',
                'penalty' => 'Desvantagem',
                'cost' => '75po',
                'Weight' => '22,5k',
            ],
            [
                'id' => 11,
                'armor_name' => 'Cota de Talas',
                'armor_type' => 'Pesada',
                'class_armor' => '17',
                'requirements' => 'FOR 15',
                'description' => 'Esta armadura é feita de finas tiras verticais de metal, rebitadas em um revestimento protetor de couro que, por sua vez, fica sobre um enchimento de tecido. Uma cota de malha ﬂexível protege as articulações.',
                'penalty' => 'Desvantagem',
                'cost' => '200po',
                'Weight' => '30k',
            ],
            [
                'id' => 12,
                'armor_name' => 'Armadura de Placas',
                'armor_type' => 'Pesada',
                'class_armor' => '18',
                'requirements' => 'FOR 15',
                'description' => 'Esta armadura consiste em placas de metal moldadas e conectadas de modo a cobrir todo o corpo do usuário. O conjunto de placas inclui manoplas, pesadas botas de couro, um elmo com visor e espessas camadas de enchimento por baixo da armadura. Cintas e fivelas ajudam a distribuir o seu peso pelo corpo.',
                'penalty' => 'Desvantagem',
                'cost' => '1500po',
                'Weight' => '32,5k',
            ],
            [
                'id' => 13,
                'armor_name' => 'Escudo',
                'armor_type' => 'Escudo',
                'class_armor' => '+2',
                'requirements' => 'Nenhum',
                'description' => null,
                'penalty' => 'Normal',
                'cost' => '10po',
                'Weight' => '3k',
            ],  
            // [
            //     'id' => 14,
            //     'armor_name' => '',
            //     'armor_type' => '',
            //     'class_armor' => '',
            //     'requirements' => '',
            //     'description' => '',
            //     'penalty' => '',
            //     'cost' => '',
            //     'Weight' => '',
            // ],
        ];

            foreach($armors as $armor){
                Armors::updateOrCreate(['id'=>$armor['id']], $armor);
            }
    }
}
