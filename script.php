<?php

$nome = $_POST['nome'];
$idade= $_POST['idade'];
$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolecente';
$categorias[] = 'Adulto';

if(empty($nome)){
    echo 'O nome não pode ser vazio.';
    return;
}
if(strlen($nome) < 3){
    echo 'O nome deve conter mais de 3 caracteres.';
    return;
}
if(strlen($nome) > 40){
    echo 'O nome é muito extenso';
    return;
}

if(!is_numeric($idade)){
    echo 'Informe um numero para idade.';
    return;
}
if(strlen($idade) > 3){
    echo 'A idade de conter no maximo 3 digitos númericos.';
    return;
}

// var_dump($nome);
// var_dump($idade);


// print_r($categorias);

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