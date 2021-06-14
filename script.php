<?php

session_start();

$nome = $_POST['nome'];
$idade= $_POST['idade'];
$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolecente';
$categorias[] = 'Adulto';

if(empty($nome)){
     $_SESSION['mensagem_de_erro'] = 'O nome não pode ser vazio. Por favor digite seu nome.';
     header ('location: index.php');
}
else if(strlen($nome) < 3){
     $_SESSION['mensagem_de_erro'] = 'O nome deve conter mais de 3 caracteres.';
     header ('location: index.php');
}
else if(strlen($nome) > 40){
     $_SESSION['mensagem_de_erro'] = 'O nome é muito extenso';
     header ('location: index.php');
}

else if(!is_numeric($idade)){
     $_SESSION['mensagem_de_erro'] = 'Informe um numero para idade.';
     header ('location: index.php');
}
else if(strlen($idade) > 3){
     $_SESSION['mensagem_de_erro'] = 'A idade de conter no maximo 3 digitos númericos.';
     header ('location: index.php');
}

// var_dump($nome);
// var_dump($idade);


// print_r($categorias);

if($idade < 6){
    $_SESSION['mensagem_de_sucesso'] =  'Você ainda não tem idade minima para competir.';
    header ('location:index.php');
    return;
} else if($idade >=6 && $idade <=12){
    for ($i=0; $i < count($categorias); $i++) { 
        if ($categorias[$i] == 'Infantil') {
            $_SESSION['mensagem_de_sucesso'] =  'O competidor '.$nome.' está na categoria '.$categorias[$i];
            header ('location:index.php');
            return;
        }
    }
} else if($idade >=13 && $idade <=18){
    for ($i=0; $i < count($categorias); $i++) { 
        if ($categorias[$i] == 'Adolecente') {
            $_SESSION['mensagem_de_sucesso'] =  'O competidor '.$nome.' está na categoria '.$categorias[$i];
            header ('location:index.php');
            return;
        }
    }
} else {
    for ($i=0; $i < count($categorias); $i++) { 
        if ($categorias[$i] == 'Adulto') {
            $_SESSION['mensagem_de_sucesso'] =  'O competidor '.$nome.' está na categoria '.$categorias[$i];
            header ('location:index.php');
            return;
        }
    }
}