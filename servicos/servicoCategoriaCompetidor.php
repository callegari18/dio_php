<?php


function defineCategoriaCompetidor(string $nome, string $idade) : ?string {
    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolecente';
    $categorias[] = 'Adulto';
    if (validaNome($nome) && validaIdade($idade)){
        removerMensagemErro();
        if($idade < 6){
            setarMensagemSucesso('Você ainda não tem idade minima para competir.');
            return null;
        } else if($idade >=6 && $idade <=12){
            for ($i=0; $i < count($categorias); $i++) { 
                if ($categorias[$i] == 'Infantil') {
                    setarMensagemSucesso( 'O competidor '.$nome.' está na categoria '.$categorias[$i]);
                    return null;
                }
            }
        } else if($idade >=13 && $idade <=18){
            for ($i=0; $i < count($categorias); $i++) { 
                if ($categorias[$i] == 'Adolecente') {
                    setarMensagemSucesso('O competidor '.$nome.' está na categoria '.$categorias[$i]);
                    return null;
                }
            }
        } else {
            for ($i=0; $i < count($categorias); $i++) { 
                if ($categorias[$i] == 'Adulto') {
                    setarMensagemSucesso('O competidor '.$nome.' está na categoria '.$categorias[$i]);
                    return null;
                }
            }
        }
        
    }else{
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}