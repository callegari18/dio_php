<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
</head>
<body>
    <p>FORMULARIO PARA INSCRIÇÃO DE COMPETIDORES</p>

<form action="script.php" method="post">
    <?php
        $mensagemDeSucesso = isset($_SESSION['mensagem_de_sucesso']) ? $_SESSION['mensagem_de_sucesso'] : '';
        if(!empty($mensagemDeSucesso)){
            echo $mensagemDeSucesso;
        }
        $mensagemDeErro = isset($_SESSION['mensagem_de_erro']) ? $_SESSION['mensagem_de_erro'] : '';
        if(!empty($mensagemDeErro)){
            echo $mensagemDeErro;
        }
    ?>
    <p>Your name: <input type="text" name="nome" /></p>
    <p>Your age: <input type="text" name="idade" /></p>
    <p><input type="submit"/></p>
</form>

</body>
</html>