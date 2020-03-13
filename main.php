<?php

$array = ["A","E", "I", "O", "U"];

function lista(){
    global $array;
    print_r ($array);
}

function insereFinal($valor){
    global $array;
    lista();
    array_push($array, $valor);
    echo "Valor inserido com sucesso: ".$valor."\n";
    lista();
}

function insereInicio($valor){
    global $array;
    lista();
    array_unshift($array, $valor);
    echo "Valor inserido com sucesso: ".$valor."\n";
    lista();
}

function inserePosicao($posicao, $valor){
    global $array;
    lista();
    $array[$posicao] = $valor;
    lista();
}

function removeUltimo(){
    global $array;
    lista();
    $removido = array_pop($array);
    echo "Removido = ".$removido."\n";
    lista();
}

function removePrimeiro(){
    global $array;
    lista();
    $removido = array_shift($array);
    echo "Removido = ".$removido."\n";
    lista();
}

function removePosicao($posicao){
    global $array;
    lista();
    unset($array[$posicao]);
    echo "Removida Posição = ".$posicao."\n";
    #Reindexa array
    #$array = array_values($array);
    lista();
}

function removeValor($valor){
    global $array;
    lista();
    $key = array_search($valor, $array);
    if($key!==false){
        unset($array[$key]);
        echo "Removido Valor = ".$valor."\n";
    }
    #Reindexa array
    #$array = array_values($array);
    lista();
}

removeValor("I");

?>