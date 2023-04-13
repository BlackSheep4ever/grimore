<?php

namespace Database\Seeders;

use App\Models\Feat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FeatsSeeder extends Seeder
{
    public function run()
    {

        $feats = [

            [
                'id' => 1,
                'feat_name' => 'Adepto Elemental',
                'requirements' => 'Capacidade de conjurar pelo menos uma magia',
                'description' => 'Escolha um dano entre ácido, fogo, frio, eletricidade e trovão. Sempre que rolar dano desse tipo com suas magias você trata qualquer 1 rolado como 2. Adicionalmente suas magias desse tipo ignoram Resistência (mas não Imunidade). Pode ser escolhido diversas vezes, cada vez para um elemento diferente.',
                'source' => 'Player Handbook',
                'tag' => 'attk, roll, res, class'
            ],
            [
                'id' => 2,
                'feat_name' => 'Adepto Marcial',
                'requirements' => null,
                'description' => 'Seu treinamento marcial lhe garante os seguintes benefícios.
                -Aprende duas Manobras de guerreiro Mestre da Batalha.
                -Caso possua Superioridade ganha mais um uso.
                -Caso não possua recebe um uso e valor d6.',
                'source' => 'Player Handbook',
                'tag' => 'attk, roll'
            ],
            [
                'id' => 3,
                'feat_name' => 'Adepto Metamágico',
                'requirements' => 'Magia ou magia de Pacto',
                'description' => 'Você aprendeu a controlar a magia, e recebe os seguintes benefícios.
                -Aprende duas opções metamágicas de Feiticeiro. Sempre que recebe aumento de atributo pode trocar uma opção.
                -Recebe 2 Pontos de Feitiçaria que pode usar para ativar metamagia.',
                'source' => 'Player Handbook',
                'tag' => 'class'
            ],
            [
                'id' => 4,
                'feat_name' => 'Adepto Místico',
                'requirements' => 'Magia ou magia de Pacto',
                'description' => 'Recebe uma Invocação Mística de Bruxo. Caso tenha algum pré-requisito, só pode escolhe-la se for um Bruxo que atenda esse pré-requisito. Sempre que sobre de nível pode trocar a Invocação.',
                'source' => 'Player Handbook',
                'tag' => 'class'
            ],
            [
                'id' => 5,
                'feat_name' => 'Agarrador',
                'requirements' => 'FOR 13',
                'description' => 'Você desenvolveu a perícia de manter oponentes presos, e recebe os seguintes benefícios.
                -Vantagem em ataque contra oponentes que esteja agarrando.
                -Pode usar uma ação para prender alvo agarrado. Caso obtenha sucesso ambos ficam Presos até o fim do agarrar.
                -Criaturas maiores que você não escapam automaticamente de seu agarre.',
                'source' => 'Player Handbook',
                'tag' => 'attk, roll, attr'
            ],
            [
                'id' => 6,
                'feat_name' => 'Defensive Duelist',
                'requirements' => 'Dexterity 13 or higher',
                'description' => 'Add your proficiency bonus to your AC as a reaction',
                'source' => 'Player Handbook',
                'tag' => 'ac, special'
            ],
            [
                'id' => 7,
                'feat_name' => 'Alerta',
                'requirements' => null,
                'description' => 'Sempre alerta ao perigo você recebe os seguintes benefícios.
                -+5 para Iniciativa.
                -Não pode ser surpreso.
                -Oponentes não recebem Vantagem para te atacar quando escondidos.',
                'source' => 'Player Handbook',
                'tag' => 'add_ini, roll, special'
            ],
            [
                'id' => 8,
                'feat_name' => 'Ambidestria',
                'requirements' => null,
                'description' => 'Você é um mestre em lutar com duas armas e recebe os seguintes benefícios.
                -+1 CA quando usando duas armas.
                -Pode usar armas que não sejam Leves ao lutar com duas armas.
                -Pode sacar e guardar duas armas no mesmo tempo que demora para fazê-lo com apenas uma.',
                'source' => 'Player Handbook',
                'tag' => 'ca, special'
            ],
            [
                'id' => 9,
                'feat_name' => 'Atacante Selvagem',
                'requirements' => null,
                'description' => 'Uma vez por turno você pode re-rolar dano causado em corpo-a-corpo.',
                'source' => 'Player Handbook',
                'tag' => 'attk, roll'
            ],
            [
                'id' => 10,
                'feat_name' => 'Atirador de Elite',
                'requirements' => null,
                'description' => 'Você se tornou um mestre com armas à distância e pode acertar disparos que outros consideram impossíveis, recebendo os seguintes benefícios.
                -Atacar em alcance longo não impõe Desvantagem em seu ataque.
                -Seus ataques à distância ignoram Meia Cobertura e Cobertura (mas não cobertura total).
                -Quando usa uma arma à distância em que seja proficiente, pode receber -5 para o ataque para adicionar dado+DES para o dano.',
                'source' => 'Player Handbook',
                'tag' => 'atk, roll, special'
            ],
            [
                'id' => 11,
                'feat_name' => 'Atleta',
                'requirements' => null,
                'description' => 'Você passou por um extenso treinamento físico e recebe os seguintes benefícios.
                -+1 FOR ou DES.
                -Levantar-se custa apenas 1,5m de movimento (e não metade).
                -Escala em velocidade normal.
                -Pode fazer salto correndo com apenas 1,5m de impulso.',
                'source' => 'Player Handbook',
                'tag' => 'attr, mov, special'
            ],
            [
                'id' => 12,
                'feat_name' => 'Ator',
                'requirements' => null,
                'description' => 'Hábil em imitação e drama, você recebe os seguintes benefícios.
                -+1 CAR.
                -Vantagem em testes de Atuação e Enganação quando se passando por outra pessoa.
                -Após um minuto de estudo pode imitar a voz de outra pessoa ou som de uma criatura. Teste seu de Enganação vs Intuição do ouvinte permite reconhecer a falsidade.',
                'source' => 'Player Handbook',
                'tag' => 'attr, roll, special'
            ],
            [
                'id' => 13,
                'feat_name' => 'Briga de Taverna',
                'requirements' => null,
                'description' => 'Acostumado a resolver as coisas com qualquer coisa às mãos, você recebe os seguintes benefícios.
                -+1 FOR ou CON.
                -Proficiência com armas improvisadas e desarmados.
                -Seus desarmados causam d4.
                -Ao acertar um alvo com desarmado ou armas improvisadas pode usar uma Ação Bônus para agarrar ele.',
                'source' => 'Player Handbook',
                'tag' => 'attr, prof_unarm, special'
            ],
            [
                'id' => 14,
                'feat_name' => 'Chef',
                'requirements' => null,
                'description' => 'Você se tornou um mestre das artes culinárias, e recebe os seguintes benefícios.
                -+1 SAB ou CON.
                -Proficiência com utensílios de cozinha.
                -Como parte de Descanso Curto pode cozinhar para até 4+Prof pessoas. Caso aliado que coma recuperar PA durante um Descanso Curto, ele recupera +1d8.
                -Com 1 hora de trabalho ou ao fim de um Descanso Curto, pode cozinhar até proficiência lanches, que duram até 8 horas. Criatura pode usar Ação Bônus para comer um dos lanches e receber Prof PA temporários.',
                'source' => 'Player Handbook',
                'tag' => 'attr, prof_kit, special'
            ],
            [
                'id' => 15,
                'feat_name' => 'Combatente Montado',
                'requirements' => null,
                'description' => 'Você é perigoso de enfrentar enquanto montado, e recebe os seguintes benefícios.
                -Vantagem em ataque contra oponentes a pé menores que sua montaria.
                -Força um ataque voltado contra sua montaria contra você.
                -Sua montaria recebe a habilidade Evasão.',
                'source' => 'Player Handbook',
                'tag' => 'attk, roll, special'
            ],
            [
                'id' => 16,
                'feat_name' => 'Conjurador de Guerra',
                'requirements' => 'Capacidade de conjurar magias',
                'description' => 'Você praticou conjurar magias em meio ao combate, aprendendo técnicas que lhe garantem os seguintes benefícios.
                -Vantagem para testes de não perder concentração em magias.
                -Ter as mãos ocupadas por armas ou escudos não impede que faça componentes gestuais.
                -Quando um alvo provoca um Ataque de Oportunidade por movimento, pode usar Reação para conjurar uma magia contra o alvo. Essa magia deve ser de conjuração de uma ação e que afete apenas a criatura.',
                'source' => 'Player Handbook',
                'tag' => 'class, skill, special'
            ],
            [
                'id' => 17,
                'feat_name' => 'Conjurador de Ritual',
                'requirements' => 'INT ou SAB 13+.',
                'description' => 'Escolha uma classe conjuradora. Você aprende a conjurar rituais dessa classe e recebe um livro ritual com duas magias de nível 1 dessa classe com o descritor Ritual. Você pode adicionar magias ao seu livro ao custo normal (50pp e duas horas pro nível da magia). Você é capaz de conjurar rituais de nível até ½ seu nível (arredondado para cima).',
                'source' => 'Player Handbook',
                'tag' => 'class, special'
            ],
            [
                'id' => 18,
                'feat_name' => 'Curandeiro',
                'requirements' => null,
                'description' => 'Você é um fisiologista hábil, capaz de fechar ferimentos rapidamente, e recebe os seguintes benefícios.
                -Quando usa um kit de curandeiro para estabilizar um alvo morrendo, ele também cura 1 PA.
                -Com uma ação pode gastar uma carga de kit de curandeiro para curar alvo tocado 1d6 + 4 + Nível dela. Utilizável uma vez por descanso curto por alvo.',
                'source' => 'Player Handbook',
                'tag' => 'roll, prof_kit, special'
            ],
            [
                'id' => 19,
                'feat_name' => 'Duelista Defensivo',
                'requirements' => 'DES 13+.',
                'description' => 'Quando usando uma arma Ágil e é atacado, com uma Reação adiciona proficiência para CA contra esse ataque.',
                'source' => 'Player Handbook',
                'tag' => 'ca, prof_level'
            ],
            [
                'id' => 20,
                'feat_name' => 'Durão',
                'requirements' => null,
                'description' => 'Recebe +2 PA por nível.',
                'source' => 'Player Handbook',
                'tag' => 'char_level, pv'
            ],
            [
                'id' => 21,
                'feat_name' => 'Durável',
                'requirements' => null,
                'description' => 'Firme e resilente, você recebe os seguintes benefícios.
                -+1 CON.
                -Ao rolar um Dado de Cura, o valor mínimo que recupera com o dado é igual a CON.',
                'source' => 'Player Handbook',
                'tag' => 'attr, roll'
            ],
            [
                'id' => 22,
                'feat_name' => 'Envenenador',
                'requirements' => null,
                'description' => 'Você pode preparar e usar venenos mortais, e recebe os seguintes benefícios.
                -Seus ataques ignoram resistência à dano venenoso.
                -Aplica veneno com ação bônus ao invés de ação.
                -Proficiência com kit de envenenador.
                -Com 1 hora de trabalho e 50po de materiais, cria Prof doses de veneno potente. Esse veneno permanece aplicado por 1 minuto ou até acertar um ataque com a arma. Alvo afetado sofre 2d8 venenoso e fica envenenado até fim de seu próximo turno (CON CD 14 nega).',
                'source' => 'Player Handbook',
                'tag' => 'attk, prof_kit, special'
            ],
            [
                'id' => 23,
                'feat_name' => 'Esmagador',
                'requirements' => null,
                'description' => 'Você praticou a arte de esmagar seus inimigos, e recebe os seguintes benefícios.
                -+1 FOR ou CON.
                -Uma vez por turno ao acertar alvo com ataque de esmagamento, pode movê-lo 1,5m para posição vazia, desde que alvo não seja mais que duas categorias de tamanho maior que você.
                -Quando consegue um decisivo com arma de esmagamento, ataques contra alvo tem Vantagem até começo do próximo turno.',
                'source' => 'Player Handbook',
                'tag' => 'attr, attk, roll, special'
            ],
            [
                'id' => 24,
                'feat_name' => 'Especialista em Besta',
                'requirements' => null,
                'description' => 'Graças à sua extensa prática com bestas, você recebe os seguintes benefícios.
                -Ignora a qualidade Recarregar de bestas de mão e leves em que for proficiente.
                -Estar adjacente a um alvo não lhe impõe Desvantagem em ataques com besta.
                -Quando ataca com uma arma de uma mão com uma Ação Bônus pode atirar com uma besta de mão.',
                'source' => 'Player Handbook',
                'tag' => 'special'
            ],
            [
                'id' => 25,
                'feat_name' => 'Especialista em Perícia',
                'requirements' => null,
                'description' => 'Você aprimorou suas habilidades com uma perícia, e recebe os seguintes benefícios.
                -+1 para um atributo.
                -Proficiência em uma perícia.
                -Escolha uma perícia em que seja proficiente; você passa a dobrar o valor de proficiência para esses testes.',
                'source' => 'Player Handbook',
                'tag' => 'attr, prof_skill'
            ],
            [
                'id' => 26,
                'feat_name' => 'Explorador de Masmorra',
                'requirements' => null,
                'description' => 'Alerta ao sinal de armadilhas e portas secretas encontradas em muitas masmorras, você recebe os seguintes benefícios.
                -Vantagem em Investigação e Percepção para detectar portas secretas.
                -Vantagem em resistência contra armadilhas.
                -Resistência à dano de armadilhas.
                -Pode procurar armadilhas em deslocamento total.',
                'source' => 'Player Handbook',
                'tag' => 'roll, res, special'
            ],
            [
                'id' => 27,
                'feat_name' => 'Furtivo',
                'requirements' => 'DES 13.',
                'description' => 'Você é hábil em mover-se pelas sombras, e recebe os seguintes benefícios.
                -Pode se esconder quando apenas levemente obscurecido.
                -Quando escondido e erra um ataque a distância sua posição não é revelada.
                -Luz Baixa não impõe Desvantagem em Percepção de visão para você.',
                'source' => 'Player Handbook',
                'tag' => 'roll, special'
            ],
            [
                'id' => 28,
                'feat_name' => 'Hábil',
                'requirements' => null,
                'description' => 'Recebe Proficiência em três perícias ou ferramentas.',
                'source' => 'Player Handbook',
                'tag' => 'prof_skill, prof_kit'
            ],
            [
                'id' => 29,
                'feat_name' => 'Iniciado Artífice',
                'requirements' => null,
                'description' => 'Você desenvolveu um pouco da criatividade de artífices, e recebe os seguintes benefícios.
                -Aprende um truque da lista de Artífice.
                -Conhece uma magia de nível 1 de Artífice que pode usar uma vez por dia. Sua chave de conjuração é a INT.
                -Recebe proficiência com uma ferramenta de artesão, que pode usar como foco de conjuração para classes baseadas em INT.',
                'source' => 'Player Handbook',
                'tag' => 'class, prof_kit, add_magic'
            ],
            [
                'id' => 30,
                'feat_name' => 'Iniciado Combatente',
                'requirements' => 'Proficiência com uma arma marcial.',
                'description' => 'Aprende um Estilo de Combate da lista de Guerreiro. Em níveis que recebe Aumento de Atributo pode trocar esse estilo por outro.',
                'source' => 'Player Handbook',
                'tag' => 'prof_weapon, class'
            ],
            [
                'id' => 31,
                'feat_name' => 'Iniciado Mágico',
                'requirements' => null,
                'description' => 'Escolha uma classe conjuradora total. Você escolhe dois truques da lista dessa classe, bem como uma magia de nível 1 dessa classe a qual pode usar uma vez por dia. Sua chave de conjuração é a mesma da classe.',
                'source' => 'Player Handbook',
                'tag' => 'class'
            ],
            [
                'id' => 32,
                'feat_name' => 'Investida',
                'requirements' => null,
                'description' => 'Ao usar a ação Corrida, você pode usar uma Ação Bônus para fazer um ataque ou Encontrão contra uma criatura. Caso tenha se movido pelo menos 3m em linha reta antes desse ataque você recebe +5 para o dano ou empurra o alvo 3m.',
                'source' => 'Player Handbook',
                'tag' => 'attk, special'
            ],
            [
                'id' => 33,
                'feat_name' => 'Líder Inspirador',
                'requirements' => 'CAR 13.',
                'description' => 'Uma vez por descanso curto pode passar 10 minutos inspirando até seis criaturas (incluindo você) a até 9m. Cada alvo recebe PA temporário igual a seu Nível + CAR.',
                'source' => 'Player Handbook',
                'tag' => 'attr, pv'
            ],
            [
                'id' => 34,
                'feat_name' => 'Linguista',
                'requirements' => null,
                'description' => ' Você estudou idiomas e códigos, e recebe os seguintes benefícios.
                -+1 INT.
                -Aprende três idiomas.
                -Pode criar um código. Outros só podem decifrá-lo caso passem em INT CD 8 + Prof + INT, ou com magia.',
                'source' => 'Player Handbook',
                'tag' => 'attr, lng, special'
            ],
            [
                'id' => 35,
                'feat_name' => 'Marca Aberrante',
                'requirements' => 'Não ter Marca.',
                'description' => '-+1 CON.
                -Aprende um truque de Feiticeiro.
                -Aprende uma magia de nível 1 de Feiticeiro, que pode usar uma vez por Descanso.
                -Quando conjura a magia de nível 1 pode gastar 1 Dado de Vida; se rolar par recebe o valor rolado em PA temporários; se rolar impar uma criatura aleatória a até 9m sofre valor rolado em dano de energia. Se não houver nenhuma, você sofre.',
                'source' => 'Player Handbook',
                'tag' => 'attr, class, add_magic'
            ],
            [
                'id' => 36,
                'feat_name' => 'Matador de Magos',
                'requirements' => null,
                'description' => 'Você praticou técnicas úteis em corpo-a-corpo contra conjuradores, e recebe os seguintes benefícios.
                -Quando um alvo adjacente conjura uma magia com uma Reação pode fazer um ataque.
                -Quando acerta um alvo concentrando em uma magia ele tem Desvantagem para o teste de manter a concentração.
                -Recebe Vantagem em testes de resistência contra magias conjuradas por conjuradores adjacentes.',
                'source' => 'Player Handbook',
                'tag' => 'attk, roll, res'
            ],
            [
                'id' => 37,
                'feat_name' => 'Mente Afiada',
                'requirements' => null,
                'description' => 'Sua mente lembra-se de tempo, direção e detalhe com imensa precisão, garantindo-lhe os seguintes benefícios.
                -+1 INT.
                -Sempre sabe para onde é Norte.
                -Sempre sabe o número de horas até o próximo amanhecer ou anoitecer.
                -Lembra-se perfeitamente de tudo que viu ou ouviu no último mês.',
                'source' => 'Player Handbook',
                'tag' => 'attr, special'
            ],
            [
                'id' => 38,
                'feat_name' => 'Mestre de Arma Pesada',
                'requirements' => null,
                'description' => 'Você aprendeu a usar o peso da arma como vantagem e recebe os seguintes benefícios.
                -Em seu turno, ao conseguir um crítico ou reduzir um alvo a 0 ou menos em corpo-a-corpo, pode fazer um ataque adicional com uma Ação Bônus.
                -Quando usa uma arma pesada em que seja proficiente, pode receber -5 para o ataque para adicionar +10 para o dano.',
                'source' => 'Player Handbook',
                'tag' => 'attk, special'
            ],
            [
                'id' => 39,
                'feat_name' => 'Mestre de Armadura Média',
                'requirements' => 'Proficiência com armadura média.',
                'description' => 'Você praticou movimento dentro de armaduras médias e recebe os seguintes benefícios.
                -Armaduras médias não impõe Desvantagem em Furtividade.
                -Bônus Máximo de DES aumenta para 3.',
                'source' => 'Player Handbook',
                'tag' => 'prof_armor, penalty, ca'
            ],
            [
                'id' => 40,
                'feat_name' => 'Mestre de Armadura Pesada',
                'requirements' => 'Proficiência com armadura pesada.',
                'description' => 'Você é hábil em usar sua armadura para desviar de golpes que matariam outros e recebe os seguintes benefícios.
                -+1 FOR.
                -Reduz dano Cortante, Perfurante e Esmagamento de armas não mágicas em 3.',
                'source' => 'Player Handbook',
                'tag' => 'prof_armor, attr, rd'
            ],
            [
                'id' => 41,
                'feat_name' => 'Mestre do Escudo',
                'requirements' => null,
                'description' => 'Você usa escudos não apenas para proteção mas para ataque, e recebe os seguintes benefícios quando usando um escudo.
                -Ao fazer um ataque pode fazer um Encontrão com uma Ação Bônus.
                -Adiciona o bônus do escudo para testes de resistência de DES conta uma magia ou efeito que afete apenas você.
                -Ao passar em um teste de DES em que sofre apenas metade do dano, pode usar uma Reação para não sofrer dano nenhum ao colocar o escudo entre você e o perigo.',
                'source' => 'Player Handbook',
                'tag' => 'attk, save, special'
            ],
            [
                'id' => 42,
                'feat_name' => 'Mestre em Armas',
                'requirements' => null,
                'description' => 'Você praticou extensivamente com uma variedade de armas, recebendo os seguintes benefícios.
                -+1 FOR ou DES.
                -Proficiência com 4 armas de sua escolha.',
                'source' => 'Player Handbook',
                'tag' => 'attr, prof_weapon'
            ],            
            [
                'id' => 43,
                'feat_name' => 'Mestre de Haste',
                'requirements' => null,
                'description' => 'Você consegue manter oponentes afastados com armas de alcance, e recebe os seguintes benefícios.
                -Quando ataca apenas com uma arma de haste ou cajado, pode fazer um ataque adicional com uma Ação Bônus. Esse ataque causa d4 de esmagamento.
                -Quando usando uma arma de haste, alvos provocam ataque de oportunidade ao entrar em seu alcance.',
                'source' => 'Player Handbook',
                'tag' => 'attk, special'
            ],            
            [
                'id' => 44,
                'feat_name' => 'Mobilidade',
                'requirements' => null,
                'description' => 'Você é excepcionalmente veloz, e recebe os seguintes benefícios.
                -+3m de deslocamento.
                -Ao usar a ação Corrida terreno ruim não custa deslocamento extra.
                -Após atacar um alvo não provoca ataques de oportunidade dele pelo resto do turno, tendo acertado ou não.',
                'source' => 'Player Handbook',
                'tag' => 'mov, special'
            ],            
            [
                'id' => 45,
                'feat_name' => 'Observador',
                'requirements' => null,
                'description' => 'Rápido em notar os detalhes do ambiente, você recebe os seguintes benefícios.
                -+1 INT ou SAB.
                -Caso possa ver a boca do alvo enquanto ele fala um idioma que entenda, você é capaz de interpretar o que ele diz ao ler seus lábios.
                -+5 para Percepção e Investigação passivos.',
                'source' => 'Player Handbook',
                'tag' => 'attr, add_skill, special'
            ],            
            [
                'id' => 46,
                'feat_name' => 'Perfurador',
                'requirements' => null,
                'description' => 'Você alcança grande precisão em combate, e recebe os seguintes benefícios.
                -+1 FOR ou DES.
                -Uma vez por turno ao acertar alvo com ataque de perfuração, pode re-rolar o dano e ficar com o segundo resultado.
                -Quando consegue um decisivo com arma perfurante, causa um dado de dano adicional.',
                'source' => 'Player Handbook',
                'tag' => 'attr, attk, roll'
            ],            
            [
                'id' => 47,
                'feat_name' => 'Pistoleiro',
                'requirements' => null,
                'description' => 'Você tem mãos e olhos rápidos para armas de fogo, recebe os seguintes benefícios.
                -+1 DES.
                -Proficiência em armas de fogo.
                -Ignora a qualidade Recarregar de armas de fogo.
                -Estar adjacente a um alvo não lhe impõe Desvantagem em ataques com besta.',
                'source' => 'Player Handbook',
                'tag' => 'attr, special'
            ],            
            [
                'id' => 48,
                'feat_name' => 'Retalhador',
                'requirements' => null,
                'description' => 'Você aprendeu a cortar com os maiores resultados, e recebe os seguintes benefícios.
                -+1 FOR ou DES.
                -Uma vez por turno ao acertar alvo com ataque de perfuração, reduz deslocamento de alvo em 3m até começo de seu próximo turno.
                -Quando consegue um decisivo com arma cortante, alvo tem Desvantagem em ataques até começo de seu próximo turno.',
                'source' => 'Player Handbook',
                'tag' => 'attr, attk'
            ],            
            [
                'id' => 49,
                'feat_name' => 'Resilente',
                'requirements' => null,
                'description' => 'Escolha um atributo. Você recebe os seguintes benefícios.
                -+1 para o atributo escolhido.
                -Proficiência no teste de resistência desse atributo.',
                'source' => 'Player Handbook',
                'tag' => 'attr, prof_attr'
            ],            
            [
                'id' => 50,
                'feat_name' => 'Sentinela',
                'requirements' => null,
                'description' => 'Você aprendeu a técnica de tirar vantagem de todas as falhas na defesa de um oponente, e recebe os seguintes benefícios.
                -Ao acertar um ataque de oportunidade, o deslocamento do alvo torna-se 0 pelo resto do turno.
                -Alvos adjacentes provocam ataque de oportunidade mesmo que usem a ação Fuga.
                -Quando um alvo adjacente ataca outra criatura, com uma Reação pode atacar o alvo.',
                'source' => 'Player Handbook',
                'tag' => 'attk, special'
            ],            
            [
                'id' => 51,
                'feat_name' => 'Sniper Mágico',
                'requirements' => 'Habilidade de conjurar ao menos uma magia.',
                'description' => 'Você aprendeu técnicas para aprimorar seus ataques mágicos, recebendo os seguintes benefícios.
                -Dobra o alcance de magias que exigem um ataque.
                -Ignora Meia-Cobertura e Cobertura com magias com ataque.
                -Aprende um Truque que exija um ataque, de qualquer classe.',
                'source' => 'Player Handbook',
                'tag' => 'class, attk'
            ],            
            [
                'id' => 52,
                'feat_name' => 'Sortudo',
                'requirements' => null,
                'description' => 'Você tem momentos inexplicáveis de sorte que vêm na hora certa. Você possui 3 pontos de sorte por dia. Sempre que faz um teste, pode gastar um ponto para rolar 1d20 extra para o teste e ficar com o de sua preferência. Adicionalmente, ao ser atacado você pode gastar um ponto de sorte com uma reação para rolar 1d20. Você escolhe se o alvo vai usar a rolagem original ou essa rolagem.',
                'source' => 'Player Handbook',
                'tag' => 'roll'
            ],            
            [
                'id' => 53,
                'feat_name' => 'Telecinesta',
                'requirements' => null,
                'description' => 'Você aprendeu a mover coisas com sua mente, e recebe os seguintes benefícios.
                -+1 INT, SAB ou CAR.
                -Conhece o truque Mãos Mágicas, baseado em atributo aumentado, que é invisível e sem componentes verbais ou gestuais. Se já conhece esse truque, aumenta alcance em 9m.
                -Com ação bônus empurra alvo visível a até 9m 1,5m para mais perto ou mais longe (FOR baseada em atributo aumentado nega).',
                'source' => 'Player Handbook',
                'tag' => 'attr, add_magic'
            ],            
            [
                'id' => 54,
                'feat_name' => 'Telepata',
                'requirements' => null,
                'description' => 'Você desperta a habilidade de conectar mentalmente com outros, e recebe os seguintes benefícios.
                -+1 INT, SAB ou CAR.
                -Pode falar telepaticamente com alvo visível a 18m, desde que dividam um idioma. Isso não garante habilidade de alvo responder mentalmente.
                -Aprende Detectar Pensamento, que pode usar 1 vez dia sem componentes, baseada no atributo aumentado.
                -Também adiciona essa magia para suas magias conhecidas/preparadas, sem contar para o limite.',
                'source' => 'Player Handbook',
                'tag' => 'attr, add_magic'
            ],            
            [
                'id' => 55,
                'feat_name' => 'Tocado por Fadas',
                'requirements' => null,
                'description' => 'Sua exposição ao mundo das fadas lhe garante os seguintes benefícios.
                -+1 INT, SAB ou CAR.
                -Aprende a magia Passo da Neblina, e uma outra magia de nível 1 de Adivinhação ou Encantamento, que pode usar 1x dia cada, baseada no atributo aumentado.
                -Também adiciona essas magias para suas magias conhecidas/preparadas, sem contar para o limite.',
                'source' => 'Player Handbook',
                'tag' => 'attr, add_magic'
            ],            
            [
                'id' => 56,
                'feat_name' => 'Tocado por Sombras',
                'requirements' => null,
                'description' => 'Sua exposição ao mundo das sombras lhe garante os seguintes benefícios.
                -+1 INT, SAB ou CAR.
                -Aprende a magia Invisibilidade e uma outra magia de nível 1 de Ilusão ou Necromancia, que pode usar 1x dia cada, baseada no atributo aumentado.
                -Também adiciona essas magias para suas magias conhecidas/preparadas, sem contar para o limite.',
                'source' => 'Player Handbook',
                'tag' => 'attr, add_magic'
            ],            
            [
                'id' => 57,
                'feat_name' => 'Usar Armadura Leve',
                'requirements' => null,
                'description' => 'Você treinou no uso de armaduras leves e recebe os seguintes benefícios.
                -+1 FOR ou DES.
                -Proficiência em armadura leve.',
                'source' => 'Player Handbook',
                'tag' => 'attr, prof_armor'
            ],            
            [
                'id' => 58,
                'feat_name' => 'Usar Armadura Média',
                'requirements' => 'Proficiência com armadura leve.',
                'description' => 'Você treinou no uso de armaduras médias e recebe os seguintes benefícios.
                -+1 FOR ou DES.
                -Proficiência em armadura média e escudos.',
                'source' => 'Player Handbook',
                'tag' => 'attr, prof_armor'
            ],            
            [
                'id' => 59,
                'feat_name' => 'Usar Armadura Pesada',
                'requirements' => 'Proficiência em armadura média.',
                'description' => 'Você treinou no uso de armaduras leves e recebe os seguintes benefícios.
                -+1 FOR.
                -Proficiência em armadura pesada.',
                'source' => 'Player Handbook',
                'tag' => 'attr, prof_armor'
            ],
            [
                'id' => 60,
                'feat_name' => 'Agilidade Baixa',
                'requirements' => 'Anão ou raça Pequena.',
                'description' => 'Você é ágil pra seu povo, e recebe os seguintes benefícios.
                -+1 FOR ou DES.
                -+1,5m movimento
                -Proficiência em Atletismo ou Acrobacia.
                -Vantagem para testes a fim de escapar de agarrar.',
                'source' => 'Xanathar’s Guide to Everything',
                'tag' => 'racial, attr, mov, prof_skill, roll'
            ],
            [
                'id' => 61,
                'feat_name' => 'Alta Magia Drow',
                'requirements' => 'Elfo Negro.',
                'description' => 'Você pode usar Detectar Magia à vontade. Também pode usar Levitar e Dissipar Magia uma vez por dia cada, baseadas em CAR.',
                'source' => 'Xanathar’s Guide to Everything',
                'tag' => 'racial, special'
            ],
            [
                'id' => 62,
                'feat_name' => 'Chamas de Phlegethos',
                'requirements' => 'Tiefling.',
                'description' => 'Você aprende a controlar fogo infernal, e recebe os seguintes benefícios.
                -+1 INT ou CAR.
                -Re-rola 1s em dano de magias de fogo.
                -Quando usa magia de fogo pode se cobrir de fogo até o fim do próximo turno. Durante esse tempo chamas fazem luz brilhante a 9m e baixa a mais 9m, e criaturas adjacentes sofrem 1d4 fogo ao lhe atacar em corpo-a-corpo.',
                'source' => 'Xanathar’s Guide to Everything',
                'tag' => 'racial, attr, roll, special'
            ],
            [
                'id' => 63,
                'feat_name' => 'Constituição Infernal',
                'requirements' => 'Tiefling.',
                'description' => 'Você tem resiliência como de alguns infernais, e recebe os seguintes benefícios.
                -+1 CON.
                -Resistência a dano de frio e venenoso.
                -Vantagem em Resistência contra veneno.',
                'source' => 'Xanathar’s Guide to Everything',
                'tag' => 'racial, attr, res, roll'
            ],
            [
                'id' => 64,
                'feat_name' => 'Couro Dracônico',
                'requirements' => 'Draconato.',
                'description' => 'Você manifesta escamas e garras recebendo os seguintes benefícios.
                -+1 FOR, CAR ou CON.
                -Quando não usando armadura sua CA é 13 + DES. Ainda pode se beneficiar de escudo.
                -Com ação estende ou oculta garras. Com garras estendidas desarmados causam 1d4 cortante.',
                'source' => 'Xanathar’s Guide to Everything',
                'tag' => 'racial, attr, ca, prof_weapon'
            ],
            [
                'id' => 65,
                'feat_name' => 'Fortitude Enânica',
                'requirements' => 'Anão.',
                'description' => 'Você tem o sangue de heróis nas veias, e recebe os seguintes benefícios.
                -+1 CON.
                -Quando faz Esquiva, pode gastar Dados de Vida para se curar.',
                'source' => 'Xanathar’s Guide to Everything',
                'tag' => 'racial, attr, special'
            ],
            [
                'id' => 66,
                'feat_name' => 'Furia Orc',
                'requirements' => 'Meio-Orc.',
                'description' => 'Você tem fúria incansável, e recebe os seguintes benefícios.
                -+1 FOR ou CON.
                -Uma vez por descanso, causa dado adicional com ataque armado.
                -Criaturas do tipo tem Desvantagem para ataques de oportunidade contra você.
                -Ao usar Tolerância Infindável pode fazer um ataque com uma reação.',
                'source' => 'Xanathar’s Guide to Everything',
                'tag' => 'racial, attr, attk, roll'
            ],
            [
                'id' => 67,
                'feat_name' => 'Lâmina Revenante',
                'requirements' => 'Elfo.',
                'description' => 'Você tem maestria com a espada de duas lâminas
                -+1 FOR ou CON.
                -Quando usando uma espada de duas lâminas com as duas mãos, recebe +1 CA.
                -Espadas de duas lâminas são Ágeis para você.',
                'source' => 'Xanathar’s Guide to Everything',
                'tag' => 'racial, attr, ca, weapon_property'
            ],
            [
                'id' => 68,
                'feat_name' => 'Magia Silvestre',
                'requirements' => 'Elfo Silvestre.',
                'description' => 'Você aprende a magia do ermo, e recebe os seguintes benefícios.
                -Aprende um truque de druida.
                -Pode usar Passolargo e Passo sem Pegadas uma vez por dia cada, baseados em SAB.',
                'source' => 'Xanathar’s Guide to Everything',
                'tag' => 'racial, add_magic'
            ],
            [
                'id' => 69,
                'feat_name' => 'Magia Svirfneblin',
                'requirements' => 'Gnomo da Profundeza.',
                'description' => 'Você tem a magia de seus ancestrais e pode conjurar Anti-Detecção em você à vontade, sem componente material. Também pode conjurar cada uma das seguintes magias uma vez por dia: Cegueira/Surdez, Nublar e Disfarçar-se.',
                'source' => 'Xanathar’s Guide to Everything',
                'tag' => 'racial, add_magic'
            ],
            [
                'id' => 70,
                'feat_name' => 'Medo Dracônico',
                'requirements' => 'Draconato.',
                'description' => 'Você irradia ameaça e recebe os seguintes benefícios.
                -+1 FOR, CAR ou CON.
                -Ao invés de soprar energia, você ruge. Alvos escolhidos a até 9m ficam Assustados por 1 minuto. Resistência de SAB baseada em CAR nega. Recebe um novo teste cada vez que sofre dano.',
                'source' => 'Xanathar’s Guide to Everything',
                'tag' => 'racial, attr, special'
            ],
            [
                'id' => 71,
                'feat_name' => 'Precisão Elfica',
                'requirements' => 'Elfo ou Meio-Elfo.',
                'description' => 'Você tem precisão com ataques de não usam força bruta, e recebe os seguintes benefícios.
                -+1 DES, INT, SAB ou CAR.
                -Quando ataca com Vantagem com DES, INT, SAB ou CAR, pode re-rolar um dos dados.',
                'source' => 'Xanathar’s Guide to Everything',
                'tag' => 'racial, attr, attk, roll'
            ],
            [
                'id' => 80,
                'feat_name' => 'Prodígio',
                'requirements' => 'Humano ou meio-humano.',
                'description' => 'Você tem dom para aprender coisas, e recebe os seguintes benefícios.
                -Proficiência em uma perícia, em uma ferramenta, e um idioma.
                -Escolha uma perícia que seja proficiente. Dobra essa proficiência.',
                'source' => 'Xanathar’s Guide to Everything',
                'tag' => 'racial, prof_skill, prof_kit, lng'
            ],
            [
                'id' => 81,
                'feat_name' => 'Segunda Chance',
                'requirements' => 'Halfling.',
                'description' => 'Você é favorecido pela sorte quando tentam lhe acertar, e recebe os seguintes benefícios.
                -+1 DES, CON ou CAR.
                -Uma vez por descanso, com uma Reação força atacante visível a re-rolar ataque contra você.',
                'source' => 'Xanathar’s Guide to Everything',
                'tag' => 'racial, attr, roll'
            ],
            [
                'id' => 82,
                'feat_name' => 'Sorte Abundante',
                'requirements' => 'Halfling.',
                'description' => 'Você estende sua sorte extraordinária para outros. Quando aliado visível a até 9m rola 1 em um ataque, teste ou resistência, com reação permite aliado re-rolar o teste. Quando usa essa habilidade não pode usar traço Sortudo até fim do próximo turno.',
                'source' => 'Xanathar’s Guide to Everything',
                'tag' => 'racial, save, roll'
            ],
            [
                'id' => 83,
                'feat_name' => 'Sumir',
                'requirements' => 'Gnomo.',
                'description' => 'Você aprendeu um truque mágico para desaparecer, e recebe os seguintes benefícios.
                -+1 DES ou INT.
                -Uma vez por descanso, imediatamente após sofre dano com Reação fica invisível até fim do próximo turno, até atacar, causar dano ou forçar um teste de resistência.',
                'source' => 'Xanathar’s Guide to Everything',
                'tag' => 'racial, attr, special'
            ],
            [
                'id' => 84,
                'feat_name' => 'Teletransporte Feérico',
                'requirements' => 'Alto Elfo.',
                'description' => 'Você aprendeu poderes pertencentes aos seus parentes Eladrin, e recebe os seguintes benefícios.
                -+1 INT ou CAR.
                -Aprende Silvestre.
                -Pode usar Passo da Neblina uma vez por descanso, baseado em INT.',
                'source' => 'Xanathar’s Guide to Everything',
                'tag' => 'racial, attr, lng, add_magic'
            ],
            [
                'id' => 85,
                'feat_name' => 'Acrobata',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 DES.
                -Proficiência em Acrobacia. Se já proficiente, dobra proficiência.
                -Com ação bônus faz Acrobacia CD 15. Se passar ignora terreno difícil até o fim do turno.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill, special'
            ],
            [
                'id' => 86,
                'feat_name' => 'Agravado',
                'requirements' => 'Anão.',
                'description' => 'Você tem ódio por um tipo de criatura, e recebe os seguintes benefícios.
                -+1 FOR, CON ou SAB.
                -Escolha um tipo de criatura, exatamente como um Inimigo Favorito.
                -Contra esse tipo de criatura seus ataques tem Vantagem no primeiro turno.
                -Criaturas do tipo tem Desvantagem para ataques de oportunidade contra você.
                -Recebe proficiência dupla para testes de INT a fim de recuperar informação desse tipo, mesmo que não seja proficiente normalmente.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, roll, special'
            ],
            [
                'id' => 87,
                'feat_name' => 'Agressividade Orc',
                'requirements' => 'Meio-Orc.',
                'description' => 'Com ação bônus pode se mover, mas apenas para mais perto de um oponente visível.',
                'source' => 'Unearthed Arcana',
                'tag' => 'racial, special'
            ],
            [
                'id' => 88,
                'feat_name' => 'Alquimista',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 INT.
                -Proficiência em Kit de Alquimista. Se já proficiente, dobra proficiência.
                -Com uma ação identifica poção a até 1,5m como se a tivesse provado.
                -Durante descanso curto pode aprimorar poção de cura. Se for bebida em até 1 hora após descanso, seu efeito é maximizado.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_kit, special'
            ],
            [
                'id' => 89,
                'feat_name' => 'Ameaçador',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 CAR.
                -Proficiência em Intimidar. Se já proficiente, dobra proficiência.
                -Quando faz ação Ataque pode substituir um ataque por desmoralizar humanoide a até 9m que possa lhe ver e ouvir. Faça Intimidar contra Intuição. Se passar alvo fica Assustado até o fim do próximo turno. Se falhar alvo não pode ser assustado por você por 1 hora.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill, special'
            ],
            [
                'id' => 90,
                'feat_name' => 'Amigo dos Bichos',
                'requirements' => 'Gnomo da Floresta.',
                'description' => 'Sua união com animais se reforça, e você recebe os seguintes benefícios.
                -Proficiência em Adestrar Animais. Se já proficiente, dobra proficiência.
                -Pode usar Falar com Animais à vontade, e Amizade Animal uma vez por dia, baseada em SAB.',
                'source' => 'Unearthed Arcana',
                'tag' => 'racial, prof_skill, add_magic'
            ],
            [
                'id' => 91,
                'feat_name' => 'Amigo de Todos',
                'requirements' => 'Meio-Elfo.',
                'description' => 'Você tem personalidade magnética, e recebe os seguintes benefícios.
                -+1 CAR.
                -Proficiência em Enganação e Persuasão. Se já proficiente, dobra proficiência.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill'
            ],
            [
                'id' => 92,
                'feat_name' => 'Arcanista',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 INT.
                -Proficiência em Arcanismo. Se já proficiente, dobra proficiência.
                -Aprende Prestidigitação e Detectar Magia. Pode usar Detectar Magia uma vez por dia.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill, add_magic'
            ],
            [
                'id' => 93,
                'feat_name' => 'Artista',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 CAR.
                -Proficiência em Performance. Se já proficiente, dobra proficiência.
                -Quando atuando pode distrair humanoide visível, que lhe veja e ouça. Faça Atuação contra Intuição. Se passar alvo sofre Desvantagem em Percepção e Investigação enquanto atuar.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill, special'
            ],
            [
                'id' => 94,
                'feat_name' => 'Asas Dracônicas',
                'requirements' => 'Draconato.',
                'description' => 'Cresce asas dracônicas, e recebe movimento de voo 6m desde que não usando armadura média nem ultrapassando carga.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, special'
            ],
            [
                'id' => 95,
                'feat_name' => 'Couro Espinhento',
                'requirements' => 'Tiefling.',
                'description' => 'Espinhos estendem-se de sua pele, e você recebe os seguintes benefícios.
                -+1 CAR ou CON.
                -Proficiência em Intimidação. Se já proficiente, dobra proficiência.
                -Com ação bônus pode estender ou ocultar espinhos do corpo. No começo de cada turno que espinhos estiverem à mostra causa 1d6 a criatura que estiver agarrando.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill, special'
            ],
            [
                'id' => 96,
                'feat_name' => 'Criador de Maravilhas',
                'requirements' => 'Gnomo da Rocha.',
                'description' => 'Você é um mestre de invenções, e recebe os seguintes benefícios.
                -+1 DES ou INT.
                -Proficiência dobrada com ferramentas de inventor.
                -Pode criar os seguinte aparelhos adicionais:
                -Alarme: Quando criatura se aproxima a 4,5m sem falar senha faz barulho audível a 90m por 1 minuto.
                -Calculadora: Calcula coisas.
                -Erguedor: Pode erguer 5x capacidade normal.
                -Relógio: Mantém horário preciso.
                -Medidor de Clima: Com ação prevê clima pelas próximas 4 horas, entre nublado, sol/lua, chuva ou neve.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_kit'
            ],
            [
                'id' => 97,
                'feat_name' => 'Diplomata',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 CAR.
                -Proficiência em Diplomacia. Se já proficiente, dobra proficiência.
                -Após 1 minuto de conversa faz Persuasão contra Intuição. Se passar alvo fica Encantado por você enquanto estiver a até 18m e por 1 minuto depois. Falha automaticamente se você ou companheiros estiverem atacando alvo.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill, special'
            ],
            [
                'id' => 98,
                'feat_name' => 'Dedos Rápidos',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 DES.
                -Proficiência em Prestidigitação. Se já proficiente, dobra proficiência.
                -Faz Prestidigitação para plantar algo, esconder item em alguém ou roubar algo com ação bônus.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill, special'
            ],
            [
                'id' => 99,
                'feat_name' => 'Determinação Humana',
                'requirements' => 'Humano.',
                'description' => 'Você tem determinação para alcançar o inalcançável, e recebe os seguintes benefícios.
                -+1 para um atributo.
                -Uma vez por descanso recebe Vantagem para um teste de sua escolha.',
                'source' => 'Unearthed Arcana',
                'tag' => 'racial, attr, roll, special'
            ],
            [
                'id' => 100,
                'feat_name' => 'Furtivo',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 DES.
                -Proficiência em Furtividade. Se já proficiente, dobra proficiência.
                -Quando oculto pode se mover até 3m em terreno aberto sem se revelar, desde que termine movimento em posição em que não esteja claramente visível.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill, special'
            ],
            [
                'id' => 101,
                'feat_name' => 'Gourmand',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 CON.
                -Proficiência em Kit de Cozinheiro. Se já proficiente, dobra proficiência.
                -Com uma ação identifica bebida ou comida a até 1,5m para determinar se está envenenada.
                -Durante descanso longo pode preparar refeição para até 6 criaturas. Beneficiados recuperam 2 DV adicional ao fim do Descanso Longo, bem como recebem Vantagem para resistência de Constituição contra doenças por 24 horas.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill'
            ],
            [
                'id' => 102,
                'feat_name' => 'Historiador',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 INT.
                -Proficiência em História. Se já proficiente, dobra proficiência.
                -Quando faz ação Ajuda pode fazer História CD 15, caso passe alvo recebe bônus igual sua Proficiência.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill, special'
            ],
            [
                'id' => 103,
                'feat_name' => 'Investigador',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 INT.
                -Proficiência em Investigação. Se já proficiente, dobra proficiência.
                -Pode Procurar com ação bônus.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill, special'
            ],
            [
                'id' => 104,
                'feat_name' => 'Ladrão',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 DES.
                -Proficiência em Ferramentas de Ladrão. Se já proficiente, dobra proficiência.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_kit'
            ],
            [
                'id' => 105,
                'feat_name' => 'Língua de Prata',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 CAR.
                -Proficiência em Enganação. Se já proficiente, dobra proficiência.
                -Quando faz ação Ataque pode substituir um ataque por enganar humanoide a até 9m que possa lhe ver e ouvir. Faça Enganação contra Intuição. Se passar não provoca ataques de oportunidade de alvo, e seus ataques contra ele tem Vantagem. Ambos efeitos perduram até o fim do próximo turno ou até usar habilidade em alvo diferente. Se falhar alvo não pode ser enganado por você por 1 hora.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill, special'
            ],
            [
                'id' => 106,
                'feat_name' => 'Mão Pesada',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios com machadinha, machado, martelo de guerra, marreta e machado grande.
                -+1 ataque.
                -Sempre que tiver Vantagem no ataque, derruba oponente caso acertasse com menor dado.
                -Sempre que tiver Desvantagem no ataque, mas teria acertado com maior dado, causa FOR de esmagamento.
                -Quando usa Ajudar, aliado recebe +2 para ataque caso oponente use um escudo.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attk, special'
            ],
            [
                'id' => 107,
                'feat_name' => 'Médico',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 INT.
                -Proficiência em Medicina. Se já proficiente, dobra proficiência.
                -Durante descanso curto pode tratar até seis bestas ou humanoides. Faça Medicina CD 15 para cada alvo. Caso passe um dos Dados de Cura que alvo gastar nesse descanso cura o máximo.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill, special'
            ],
            [
                'id' => 108,
                'feat_name' => 'Mestre do Disfarce',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 CAR.
                -Proficiência em Kit de Disfarce. Se já proficiente, dobra proficiência.
                -Após 8 horas observando alvo pode criar disfarce especial dele. Você pode vesti-lo com apenas uma ação.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_kit, special'
            ],
            [
                'id' => 109,
                'feat_name' => 'Mestre de Lança',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios com lança.
                -+1 ataque.
                -Aumenta dano básico em um passo.
                -Com ação bônus escolha alvo a pelo menos 6m. Caso alvo mova para seu alcance pode fazer ataque de oportunidade contra ele. Caso acerte esse ataque causa um dado a mais.
                -Com ação bônus aumenta alcance da lança para 3m pelo resto do turno.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attk, roll, special'
            ],
            [
                'id' => 110,
                'feat_name' => 'Mestre de Mangual',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios com mangual.
                -+1 ataque.
                -Com ação bônus recebe +2 para ataque contra oponentes com escudo.
                -Oponente acertado em ataque de oportunidade é derrubado. Resistência de FOR baseada em FOR nega.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attk, special'
            ],
            [
                'id' => 111,
                'feat_name' => 'Mestre de Lâminas',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios com espada curta, espada longa, cimitarra, florete e espada de duas mãos.
                -+1 ataque.
                -Com reação recebe +1 CA até começo do próximo turno.
                -Vantagem para ataques de oportunidade.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attk, roll, special'
            ],
            [
                'id' => 112,
                'feat_name' => 'Musculoso',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 FOR.
                -Proficiência em Atletismo. Se já proficiente, dobra proficiência.
                -Conta como uma categoria maior para carga.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill, special'
            ],
            [
                'id' => 113,
                'feat_name' => 'Naturalista',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 INT.
                -Proficiência em Natureza. Se já proficiente, dobra proficiência.
                -Aprende Ofício Druidico e Detectar Veneno e Doença. Pode usar Detectar Veneno e Doença uma vez por dia.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill, add_magic'
            ],
            [
                'id' => 114,
                'feat_name' => 'Perceptivo',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 SAB.
                -Proficiência em Percepção. Se já proficiente, dobra proficiência.
                -Obscurecimento Leve não impõe Desvantagem em Percepção para você.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill, special'
            ],
            [
                'id' => 115,
                'feat_name' => 'Sobrevivencialista',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 SAB.
                -Proficiência em Sobrevivência. Se já proficiente, dobra proficiência.
                -Aprende Alarme. Pode usar Alarme uma vez por dia.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill, add_magic'
            ],
            [
                'id' => 116,
                'feat_name' => 'Teólogo',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 INT.
                -Proficiência em Religião. Se já proficiente, dobra proficiência.
                -Aprende Prestidigitação e Detectar Magia. Pode usar Detectar Magia uma vez por dia.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skill, add_magic'
            ],      
            [
                'id' => 117,
                'feat_name' => 'Tratador Animal',
                'requirements' => null,
                'description' => 'Você recebe os seguintes benefícios.
                -+1 SAB.
                -Proficiência em Adestrar Animais. Se já proficiente, dobra proficiência.
                -Com ação bônus comanda animal amistoso até 18m e que não esteja sob controle de alguém. Decide a ação e movimento dele, ou dá comando geral que criatura segue por 1 minuto.',
                'source' => 'Unearthed Arcana',
                'tag' => 'attr, prof_skil, special'
            ],  
            // [
            //     'id' => 119,
            //     'feat_name' => '',
            //     'requirements' => '',
            //     'description' => '',
            //     'source' => '',
            //     'tag' => 'attr, attk, ca, pv, add_skill, roll(vantagem/desvantagem), reroll(dice) prof_skill, add_magic, add_save, add_damge, add_ini, mov, special'
            // ],         
            ];

        foreach($feats as $feat){
            Feat::updateOrCreate(['id'=>$feat['id']], $feat);
        }

    }
}
