<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes de variaveis e afins</title>
</head>
<body>
    <h1>Testes de variaveis e afins</h1>
    <?php
    // Variaveis e Constantes
       // $nome = "Rafael";
   // $sobrenome = "Pires de Mello";
   // const PAIS = "Brasil";

  // echo " Muito prazer, $nome $sobrenome! Voce mora no " .PAIS;

  //Tipos de primitivos escalares (string,int,float,boolean);
   // Exemplos com sistemas numericos(geralmente int);
    //  0x= hexadecimal , 010 = octal,   0 = binario
    //   $num = 010;
    //   echo  "o valor da minha variavel é $num";

    //Exemplo de string
   // $z = "Fabio";
   // var_dump($z);

    // valores que podem ser coersitivos
    // $num = (int) 3e2;  // 3 x 10 (2) coerção
    // echo ("O valor da variavel é $num");
    
    //E possivel declarar manualmente qualquer tipo de primitivo(int,string,boolean,float) atraves disso
    // $num = (int)"950";
    //   var_dump($num);

     // Exemplo de boolean;

    // para uma boolean true o valor sera 1, enquanto a boolean false sera vazio ou null mas nao 0;
    // $Divorciado = true;
    // var_dump($Divorciado);
    // echo "o valor de divorciado é $Divorciado"

    //Primitivos compostos(array, object)

    // Exemplo de array
    $vet = [3,6,7,2,10,9];
    var_dump($vet);

    ?>
</body>     
</html>