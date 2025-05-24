<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Manipulacao de Strings</h1>
    <?php 
    //em constatnes tanto aspas simples como duplas nao funcionam, a solucao em constantes e com a concatenacao .(padrao do PHP)
    //const ESTADO = "SP";
    //echo "Moro em " .ESTADO;
    //$nome = 'João';
    //echo 'Olá, $nome\n';  
    // aspas simples nao interpolam variaveis, mas duplas sim, aspas simples nao reconhem \n.\t(sequencia de escape),
    //mas duplas sim,porem as simples tem melhor desempenho,enquanto as duplas menor desempenho.
    //$nome = 'João';
    //echo "Olá, $nome\n";  // Saída: Olá, João + quebra de linha
    // $nome = "Claudio";
    // $snome = "Souza";
    // echo "$nome "Luiz" $snome"; //nao vai funcionar
    // echo '$nome "Luiz" $snome'; //tambem nao vai funcionar apesar de mostrar o segundo nome ou apelido, nao vai mostrar tudo
    //echo "$nome\"Luiz\"$snome"; //Agora apareceu , isso se chama sequencia de escape
    // Sequencia de escapes validas somente para double quoted:
    // \n(Nova linha), \\t(Tabulacao horizontal), \\(barra invertida),  \$(Sinal de dolar), |u{}(Codepoint Unicode);
    //Exemplo de String heredoc
    $canal= "Receitas bacanas";
    $ano = date ('Y');
    //echo <<< TESTE
    //OLA galera do $canal!
       //tudo bem com vcs?
       //dessa vez vamos apresentar receita tal nesse ano de $ano.
       //entao bora la!
    //TESTE
    //Agr vamos para o exemplo de nowdoc
    //Funcioma como as heredoc,porem nao possuem interpretacao
       ?>
</body>
</html>