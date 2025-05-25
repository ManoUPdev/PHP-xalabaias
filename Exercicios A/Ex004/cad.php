<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
        //var_dump($_REQUEST);// e uma juncao das variaveis $_GET $_POST $_COOKIES
            $n = $_REQUEST["nome"] ?? "sem nome, ";
            $s = $_REQUEST["sobrenome"]?? "desconhecido";
            echo"<p>E um prazer em te conhecer, $n $s! Este e o meu site!";
        ?>
        <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>
    </main>
</body>
</html>