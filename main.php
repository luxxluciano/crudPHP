<?php

$array = ["A","E", "I", "O", "U"];

function lista($array){
    print_r ($array);
}

function insereInicio($array, $valor){
    lista($array);
    array_unshift($array, $valor);
    echo "Valor inserido com sucesso: ".$valor."\n";
    lista($array);
}

function insereFinal($array, $valor){
    lista($array);
    array_push($array, $valor);
    echo "Valor inserido com sucesso: ".$valor."\n";
    lista($array);
}

function inserePosicao($array, $posicao, $valor){
    lista($array);
    $array[$posicao] = $valor;
    echo "Inserido Valor: ".$valor."\n Na posição: ".$posicao."\n";
    lista($array);
}

function removePrimeiro($array){
    lista($array);
    $removido = array_shift($array);
    echo "Removido = ".$removido."\n";
    lista($array);
}

function removeUltimo($array){
    lista($array);
    $removido = array_pop($array);
    echo "Removido = ".$removido."\n";
    lista($array);
}

function removePosicao($array, $posicao){
    lista($array);
    unset($array[$posicao]);
    echo "Removida Posição = ".$posicao."\n";
    #Reindexa array
    #$array = array_values($array);
    lista($array);
}

function removeValor($array, $valor){
    lista($array);
    $key = array_search($valor, $array);
    if($key!==false){
        unset($array[$key]);
        echo "Removido Valor = ".$valor."\n";
    }
    #Reindexa array
    #$array = array_values($array);
    lista($array);
}

inserePosicao($array, 2, "X");


?>