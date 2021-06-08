<?php

$nome = Vini;
$idade= 200;
$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolecente';
$categorias[] = 'Adulto';

print_r($categorias);


if($idade < 6){
    echo 'Você ainda não tem idade minima para competir.';
} else if($idade >=6 && $idade <=12){
    for ($i=0; $i < count($categorias); $i++) { 
        if ($i == 'Infantil') {
            echo 'O competidor '.$nome.' está na categoria infantil.';
        }
    }
} else if($idade >=13 && $idade <=18){
    for ($i=0; $i < count($categorias); $i++) { 
        if ($i == 'Adolecente') {
            echo 'O competidor '.$nome.' está na categoria adolecente.';
        }
    }
} else {
    for ($i=0; $i < count($categorias); $i++) { 
        if ($i == 'Adulto') {
            echo 'O competidor '.$nome.' está na categoria adulta.';
        }
    }
}