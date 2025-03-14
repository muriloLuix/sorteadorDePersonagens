<?php

$operadores = [
    'atacante' => [
        ['nome' => 'Ash', 'arma' => 'R4-C', 'mira' => 'Reflex', 'cano' => 'Silenciador'],
        ['nome' => 'Ash', 'arma' => 'G36C', 'mira' => 'Sem mira (se fodeu)'],
        ['nome' => 'Ash', 'arma' => 'G36C', 'mira' => 'Red Dot', 'cabo' => 'Nenhum'],
        ['nome' => 'Ash', 'arma' => 'M45 MEUSOC', 'cano' => 'Silenciador'],
        ['nome' => 'Thermite', 'arma' => '556xi', 'mira' => 'ACOG'],
        ['nome' => 'Thermite', 'arma' => 'M1014', 'mira' => 'Sem mira (toma essa)', 'cano' => 'Nenhum'],
        ['nome' => 'Sledge', 'arma' => 'L85A2', 'mira' => 'ACOG'],
        ['nome' => 'Sledge', 'arma' => 'M590A1', 'mira' => 'Sem mira (boa sorte)', 'cano' => 'Nenhum'],
        ['nome' => 'Thatcher', 'arma' => 'AR33', 'mira' => 'Holo'],
        ['nome' => 'Thatcher', 'arma' => 'L85A2', 'mira' => 'ACOG', 'cabo' => 'Vertical'],
        ['nome' => 'Zofia', 'arma' => 'M762', 'mira' => 'Reflex'],
        ['nome' => 'Zofia', 'arma' => 'LMG-E', 'mira' => 'ACOG', 'cabo' => 'Angulado'],
        ['nome' => 'Iana', 'arma' => 'ARX200', 'mira' => 'Holo', 'cabo' => 'Vertical'],
        ['nome' => 'Iana', 'arma' => 'G36C', 'mira' => 'Sem mira (boa sorte)', 'cano' => 'Compensador'],
        ['nome' => 'Ace', 'arma' => 'AK-12', 'mira' => 'ACOG', 'cabo' => 'Angulado'],
        ['nome' => 'Ace', 'arma' => 'Mk 17 CQB', 'mira' => 'Reflex', 'cano' => 'Silenciador'],
        ['nome' => 'Hibana', 'arma' => 'Type-89', 'mira' => 'Holo', 'cabo' => 'Vertical'],
        ['nome' => 'Hibana', 'arma' => 'Supernova', 'mira' => 'Sem mira (toma essa)', 'cano' => 'Nenhum'],
        ['nome' => 'Fuze', 'arma' => 'AK-12', 'mira' => 'ACOG', 'cabo' => 'Angulado'],
        ['nome' => 'Fuze', 'arma' => '6P41', 'mira' => 'Reflex', 'cano' => 'Compensador'],
        ['nome' => 'Blitz', 'arma' => 'P12', 'mira' => 'Sem mira (corre, Blitz!)', 'cabo' => 'Nenhum'],
        ['nome' => 'Montagne', 'arma' => 'Le Roc', 'mira' => 'Sem mira (escudo é vida)', 'cabo' => 'Nenhum'],
        ['nome' => 'Twitch', 'arma' => 'F2', 'mira' => 'ACOG', 'cabo' => 'Vertical'],
        ['nome' => 'Twitch', 'arma' => '417', 'mira' => 'Holo', 'cano' => 'Silenciador'],
        ['nome' => 'Dokkaebi', 'arma' => 'Mk 14 EBR', 'mira' => 'ACOG', 'cabo' => 'Angulado'],
        ['nome' => 'Dokkaebi', 'arma' => 'C75 Auto', 'mira' => 'Sem mira (boa sorte)', 'cano' => 'Nenhum'],
        ['nome' => 'Lion', 'arma' => 'V308', 'mira' => 'Holo', 'cabo' => 'Vertical'],
        ['nome' => 'Lion', 'arma' => '417', 'mira' => 'Reflex', 'cano' => 'Compensador'],
        ['nome' => 'Finka', 'arma' => '6P41', 'mira' => 'ACOG', 'cabo' => 'Angulado'],
        ['nome' => 'Finka', 'arma' => 'SASG-12', 'mira' => 'Sem mira (toma essa)', 'cano' => 'Nenhum'],
        ['nome' => 'Nomad', 'arma' => 'AK-74M', 'mira' => 'Holo', 'cabo' => 'Vertical'],
        ['nome' => 'Nomad', 'arma' => 'ARX200', 'mira' => 'ACOG', 'cano' => 'Silenciador'],
        ['nome' => 'Gridlock', 'arma' => 'F90', 'mira' => 'Reflex', 'cabo' => 'Angulado'],
        ['nome' => 'Gridlock', 'arma' => 'M249 SAW', 'mira' => 'ACOG', 'cano' => 'Compensador'],
        ['nome' => 'Nøkk', 'arma' => 'FMG-9', 'mira' => 'Holo', 'cabo' => 'Vertical'],
        ['nome' => 'Nøkk', 'arma' => 'SIX12 SD', 'mira' => 'Sem mira (boa sorte)', 'cano' => 'Nenhum'],
        ['nome' => 'Amaru', 'arma' => 'G8A1', 'mira' => 'ACOG', 'cabo' => 'Angulado'],
        ['nome' => 'Amaru', 'arma' => 'Supernova', 'mira' => 'Sem mira (toma essa)', 'cano' => 'Nenhum'],
        ['nome' => 'Kali', 'arma' => 'CSRX 300', 'mira' => '12x Scope', 'cabo' => 'Nenhum'],
        ['nome' => 'Kali', 'arma' => 'SPSMG9', 'mira' => 'Sem mira (boa sorte)', 'cano' => 'Nenhum'],
        ['nome' => 'Zero', 'arma' => 'SC3000K', 'mira' => 'Holo', 'cabo' => 'Vertical'],
        ['nome' => 'Zero', 'arma' => 'MP7', 'mira' => 'Reflex', 'cano' => 'Silenciador'],
        ['nome' => 'Flores', 'arma' => 'AR33', 'mira' => 'ACOG', 'cabo' => 'Angulado'],
        ['nome' => 'Flores', 'arma' => 'SR-25', 'mira' => 'Sem mira (toma essa)', 'cano' => 'Nenhum'],
        ['nome' => 'Osa', 'arma' => '556xi', 'mira' => 'Holo', 'cabo' => 'Vertical'],
        ['nome' => 'Osa', 'arma' => 'PDW9', 'mira' => 'Reflex', 'cano' => 'Compensador'],
        ['acao' => 'A cada kill, deverá gemer', 'caso nao consiga fazer' => 'Deverá se matar no próximo round'],
        ['acao' => 'Só pode atirar agachado', 'caso nao consiga fazer' => 'Deverá jogar uma granada no próximo round (no pé do amigo, torce para ele correr)'],
        ['acao' => 'Só pode usar a pistola', 'caso nao consiga fazer' => 'Deverá entrar rushando como se nao houvesse amanha (sem dronar)'],
        ['acao' => 'Só pode atirar inclinando para a direita', 'caso nao consiga fazer' => 'Deverá se matar com granada'],
        ['acao' => 'Só pode usar faca', 'caso nao consiga fazer' => 'Deverá jogar o proximo ROUND só com as balas do pente de qualquer arma, sem poder recarregar'],
        ['acao' => 'Só pode atirar com a mira reta', 'caso nao consiga fazer' => 'Deverá se matar com uma granada'],
        ['acao' => 'Só pode jogar com a mão esquerda', 'caso nao consiga fazer' => 'Deverá se matar de altura e depois escrever no chat "Pensei que merda voasse"'],
        ['acao' => 'Só pode atirar enquanto corre (ou seja, deverá correr 100% das vezes e só para para atirar)', 'caso nao consiga fazer' => 'Deverá se matar com uma granada'],
        ['acao' => 'Só pode atirar enquanto o jogador inimigo atirar (Se ele nao atirar, você nao pode matar ele)', 'caso nao consiga fazer' => 'Deverá escrever no chat que odeia ser homem e gosta de pênis grossos'],
        ['acao' => 'Só pode atirar enquanto agacha', 'caso nao consiga fazer' => 'Deverá se matar com uma granada'],
    ],
    'defensor' => [
        ['nome' => 'Jäger', 'arma' => '416-C', 'mira' => 'Reflex'],
        ['nome' => 'Jäger', 'arma' => 'M870', 'mira' => 'Sem mira (boa sorte)', 'cano' => 'Nenhum'],
        ['nome' => 'Bandit', 'arma' => 'MP7', 'mira' => 'Holo'],
        ['nome' => 'Bandit', 'arma' => 'M870', 'mira' => 'Sem mira (toma essa)', 'cano' => 'Nenhum'],
        ['nome' => 'Smoke', 'arma' => 'FMG-9', 'mira' => 'Reflex'],
        ['nome' => 'Smoke', 'arma' => 'M590A1', 'mira' => 'Sem mira (boa sorte)', 'cano' => 'Nenhum'],
        ['nome' => 'Mute', 'arma' => 'MP5K', 'mira' => 'Holo'],
        ['nome' => 'Mute', 'arma' => 'M590A1', 'mira' => 'Sem mira (toma essa)', 'cano' => 'Nenhum'],
        ['nome' => 'Kapkan', 'arma' => '9x19VSN', 'mira' => 'Reflex'],
        ['nome' => 'Kapkan', 'arma' => 'SASG-12', 'mira' => 'Sem mira (boa sorte)', 'cano' => 'Nenhum'],
        ['nome' => 'Tachanka', 'arma' => 'DP27', 'mira' => 'Sem mira (o lorde é cego)', 'cabo' => 'Nenhum'],
        ['nome' => 'Tachanka', 'arma' => '9x19VSN', 'mira' => 'Reflex', 'cano' => 'Compensador'],
        ['nome' => 'Mira', 'arma' => 'Vector .45 ACP', 'mira' => 'Holo', 'cabo' => 'Vertical'],
        ['nome' => 'Mira', 'arma' => 'ITA12L', 'mira' => 'Sem mira (boa sorte)', 'cano' => 'Nenhum'],
        ['nome' => 'Ela', 'arma' => 'Scorpion Evo 3 A1', 'mira' => 'Reflex', 'cabo' => 'Angulado'],
        ['nome' => 'Ela', 'arma' => 'FO-12', 'mira' => 'Sem mira (toma essa)', 'cano' => 'Nenhum'],
        ['nome' => 'Valkyrie', 'arma' => 'MPX', 'mira' => 'Holo', 'cabo' => 'Vertical'],
        ['nome' => 'Valkyrie', 'arma' => 'SPAS-12', 'mira' => 'Sem mira (boa sorte)', 'cano' => 'Nenhum'],
        ['nome' => 'Caveira', 'arma' => 'M12', 'mira' => 'Sem mira (só na cara)', 'cabo' => 'Nenhum'],
        ['nome' => 'Caveira', 'arma' => 'Luison', 'mira' => 'Sem mira (só na cara)', 'cano' => 'Nenhum'],
        ['nome' => 'Maestro', 'arma' => 'ALDA 5.56', 'mira' => 'ACOG', 'cabo' => 'Angulado'],
        ['nome' => 'Maestro', 'arma' => 'Bailiff 410', 'mira' => 'Sem mira (toma essa)', 'cano' => 'Nenhum'],
        ['nome' => 'Alibi', 'arma' => 'MX4 Storm', 'mira' => 'Holo', 'cabo' => 'Vertical'],
        ['nome' => 'Alibi', 'arma' => 'ACS12', 'mira' => 'Sem mira (boa sorte)', 'cano' => 'Nenhum'],
        ['nome' => 'Mozzie', 'arma' => 'Commando 9', 'mira' => 'Reflex', 'cabo' => 'Angulado'],
        ['nome' => 'Mozzie', 'arma' => 'P10 Roni', 'mira' => 'Holo', 'cano' => 'Compensador'],
        ['nome' => 'Warden', 'arma' => 'MPX', 'mira' => 'Holo', 'cabo' => 'Vertical'],
        ['nome' => 'Warden', 'arma' => 'M590A1', 'mira' => 'Sem mira (toma essa)', 'cano' => 'Nenhum'],
        ['nome' => 'Goyo', 'arma' => 'Vector .45 ACP', 'mira' => 'Reflex', 'cabo' => 'Angulado'],
        ['nome' => 'Goyo', 'arma' => 'TCSG12', 'mira' => 'ACOG', 'cano' => 'Compensador'],
        ['nome' => 'Wamai', 'arma' => 'MP5K', 'mira' => 'Holo', 'cabo' => 'Vertical'],
        ['nome' => 'Wamai', 'arma' => 'AUG A3', 'mira' => 'Reflex', 'cano' => 'Silenciador'],
        ['nome' => 'Oryx', 'arma' => 'T-5 SMG', 'mira' => 'Holo', 'cabo' => 'Angulado'],
        ['nome' => 'Oryx', 'arma' => 'SPAS-12', 'mira' => 'Sem mira (toma essa)', 'cano' => 'Nenhum'],
        ['nome' => 'Melusi', 'arma' => 'MP5', 'mira' => 'Reflex', 'cabo' => 'Vertical'],
        ['nome' => 'Melusi', 'arma' => 'Super 90', 'mira' => 'Sem mira (boa sorte)', 'cano' => 'Nenhum'],
        ['nome' => 'Aruni', 'arma' => 'P10 Roni', 'mira' => 'Holo', 'cabo' => 'Angulado'],
        ['nome' => 'Aruni', 'arma' => 'Mk 14 EBR', 'mira' => 'ACOG', 'cano' => 'Silenciador'],
        ['nome' => 'Thunderbird', 'arma' => 'Spear .308', 'mira' => 'Holo', 'cabo' => 'Vertical'],
        ['nome' => 'Thunderbird', 'arma' => 'SPAS-15', 'mira' => 'Sem mira (toma essa)', 'cano' => 'Nenhum'],
        ['nome' => 'Thorn', 'arma' => 'UZK50GI', 'mira' => 'Reflex', 'cabo' => 'Angulado'],
        ['nome' => 'Thorn', 'arma' => 'C75 Auto', 'mira' => 'Sem mira (boa sorte)', 'cano' => 'Nenhum'],
        ['acao' => 'Só pode atirar inclinando para a esquerda', 'caso nao consiga fazer' => 'Deverá se matar na vida real, opa, quis dizer, no jogo'],
        ['acao' => 'Só pode usar a pistola', 'caso nao consiga fazer' => 'Deverá quitar da partida por um ROUND'],
        ['acao' => 'Só pode atirar enquanto corre', 'caso nao consiga fazer' => 'Deverá se matar com uma C4'],
        ['acao' => 'Só pode atirar com o mouse invertido', 'caso nao consiga fazer' => 'Deverá se matar com uma biriba'],
        ['acao' => 'Só pode atirar enquanto agacha', 'caso nao consiga fazer' => 'Deverá se matar com uma C4'],
        ['acao' => 'Só pode jogar com uma mão', 'caso nao consiga fazer' => 'Deverá sair para fora do mapa e falar que no chat "Alguem come meu cu aqui, to sedento"'],
        ['acao' => 'Só pode usar faca', 'caso nao consiga fazer' => 'Deverá dar sair fora do mapa para matar alguem no começo do round'],
        ['acao' => 'Só pode atirar agachado', 'caso nao consiga fazer' => 'Deverá ficar em um lugar e mandar no chat em qual local você está'],
    ]
];

function filtrarAtributos($operador)
{
    return array_filter($operador, function ($valor) {
        return !empty($valor); 
    });
}

if (isset($_GET['tipo'])) {
    $tipo = $_GET['tipo'];

    if (array_key_exists($tipo, $operadores)) {
        $operadoresFiltrados = array_map('filtrarAtributos', $operadores[$tipo]);

        header('Content-Type: application/json');
        echo json_encode($operadoresFiltrados);
    } else {
        header('Content-Type: application/json');
        echo json_encode(['erro' => 'Tipo de operador inválido. Use "atacante" ou "defensor".']);
    }
} else {
    header(header: 'Content-Type: application/json');
    echo json_encode(['erro' => 'Parâmetro "tipo" não fornecido.']);
}
?>