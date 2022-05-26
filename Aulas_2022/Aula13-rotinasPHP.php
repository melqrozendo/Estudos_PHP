<!--Aula 15: rotinas em PHP
rotinas - são procedimentos ou funçoes

Retornar valores

Passagem por Valor(pego o valor da variavel e jogo dentro do parametro)
-codigo de sintaxe:
function teste($x){     #valor do paramentro é 3
    $x = $x + 2;        #$x vai receber 3 + 2 = 5
    echo $x;            #escreva $x=5
}

$a = 3;
teste($a);              #valor da variavel 3
echo $a;                #escreva $a=3

Passagem por Referência(pego o valor da variavel e referencio no paramentro )
-codigo de sintaxe:
function teste(&$x){    #valor do paramentro por referencia é 3
    $x = $x + 2;        #$x vai receber 3 + 2 = 5
    echo $x;            #escreva $x=5
}

$a = 3;
teste($a);              #valor da variavel 3
echo $a;                #escreva $a=5 

obs: Na passagem por referencia a alteração de $x altera o valor de $a.

Como utilizar rotinas externas:
-são rotinas criadas porem não estão esclusivamente dentro do seu arquivo
Vamos Aplicar o conceito de reuso:
-dado dois script em php que precisam de usar uma mesma função. o conceito de reuso solicita que cremos uma script unico para função e depois realizemos o INCLUDE da função no script01 e 02;

Uso de comandos:
-INCLUDE: comando incluir(mesmo o arquivo corrompido ele continua o script)
-REQUIRE: comando requerido(obrigatorio)(o arquivo corrompido ele para o script)
-Include_once: comando usado caso ja se tenha carragado um função antes ou se não carregou, carrege pela primeira vez.
-Require_once: comando usado caso ja se tenha carragado um função antes ou se não carregou, carrege pela primeira vez.
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Rotinas em PHP</title>
</head>
<body>
<div>
    <?php
        echo "Desafio 01 - Criar um procedimento que use a passagem de parametro por referencia: <br/>";
        function teste(&$x){
            $x = $x +2;
            echo "O valor de x é $x";
        }

        $a = 3;
        teste($a);
        echo "<br/>O valor de A é $a";
        echo "<br/>";
    ?>
    <?php
        echo "Desafio 02 - Testando conceito de reuso de funçoes externas: <br/>";
        
        include "Aula13-funcoes.php";

        echo "Testando novas funçoes: <br/> ";
        ola();
        mostraValor(5);

    ?>
</div>
</body>
</html>