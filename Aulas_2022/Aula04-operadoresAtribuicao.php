<!--Aula 06: operadores de atribuição em PHP

Codigo de sintaxe:
$a = 1;
$b = 3;
$c = $a + $b;
$c = $c + 5;    -> $c += 5;
$b = $b + $a;   -> $b += $a;
$a = $a + 1;    -> $a += 1; -> $a++; 

Operadores Aritmeticos no PHP
-Adição:            $a = $a + $b;   ->  $a += $b 
-Subtração:         $a = $a - $b;   ->  $a -= $b 
-Multiplicação:     $a = $a * $b;   ->  $a *= $b 
-Divisão:           $a = $a / $b;   ->  $a /= $b 
-Módulo:            $a = $a % $b;   ->  $a %= $b 
-Concatenação:      $a = $a.$b;     ->  $a .= $b 

*obs: a ordem de precendencia nas operações

Usuarios adicionando valores pelo link do localhost:
http://localhost/AulaPHP/Aula04-operadoresAtribuicao.php?p=100
http://localhost/AulaPHP/Aula04-operadoresAtribuicao.php?aa=2022
http://localhost/AulaPHP/Aula04-operadoresAtribuicao.php?p=100&aa=2022

codigo para receber os parameros p:
$preco = $_GET["p"];

*obs:
GET = pegar o valor recebido e jogar na variavel

Operadores de Incremento:
-Pré-incremento:    $a = $a + 1;    ->  ++$a 
-Pós-incremento:    $a = $a + 1;    ->  $a++ 
-Pré-decremento:    $a = $a - 1;    ->  --$a 
-Pós-decremento:    $a = $a - 1;    ->  $a--

Como fazer comentario em PHP:
-Comentário inline: // ou #
-Comentário multiline: /* */

Variaveis Referenciadas
-codigo sem variavel referenciadas:

$a = 3;     #a variavel a recebe 3
$b = $a;    #a variavel b recebe o valor de a = 3
$b += 5;    #a variavel b recebe o incremento de +5
echo $a;    # a=3
echo $b;    # b=8

-codigo com variavel referenciadas:

$a = 3;     #a variavel a recebe 3
$b = &$a;   #a variavel b recebe o valor da variavel referenciada a = 3
$b += 5;    #a variavel b recebe o incremento de +5
echo $a;    #como a varaiavel 'a' esta referenciada, então a=8 
echo $b;    # b=8

Variaveis de Variaveis ou Variaveis variantes
-criando variaveis a partir do conteudo de outras variaveis
$site = "cursoemvideo";
$$site = "cursoPHP";
Explicando: o que esse recurso faz é criar uma nova variavel [$cursoemvideo] baseado na variavel antiga [$site] e assim armazenar o conteudo ("cursoPHP")
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores de Atribuição em PHP</title>
</head>
<body>
<div>
    <?php
        echo "Desafio 01 - Aplicar 10% de desconto ao preço de um produto:";
        $preco = $_GET["p"];
        echo "<br/> O preço do produto é R$ $preco";
        echo "<br/> O preço do produto é R$ ". number_format($preco,"2",",",".");
        $preco = $preco - ($preco*10/100);
        echo "<br/> O novo preço do produto com 10% de desconto será R$ ". number_format($preco,"2",",",".");
        echo "<br/>";

        echo "<br/>Desafio 02 - Aplicar 10% de aumento ao preço de um produto:";
        $preco = $_GET["p"];#comentario: 
        $preco += $preco*10/100;
        echo "<br/> O novo preço do produto com 10% de aumento será R$ ". number_format($preco,"2",",",".");
        echo "<br/>";

        echo "</br>Desafio 03 - Mostrar qual foi o ano anterior ao ano atual:";
        $atual = $_GET["aa"];//comentario:
        echo "<br/>O ano atual é $atual e o ano anterior é ". --$atual;
        echo "<br/>O ano atual é $atual e o ano posterior ao ano de ". $atual++ . " é $atual";
        echo "<br/>";

        echo "</br>Desafio 04 - Mostrar variáveis referenciadas:";
        $a = 3;     #a variavel a recebe 3
        $b = &$a;   #a variavel b recebe o valor da variavel referenciada a = 3
        $b += 5;    #a variavel b recebe o incremento de +5
        echo "</br>A variavel 'a' vale: $a";    #como a varaiavel 'a' esta referenciada, então a=8 
        echo "</br>A variavel 'b' vale: $b";    # b=8
        echo "<br/>";

        echo "</br>Desafio 05 - Mostrar variáveis de variaveis:";
        $site = "cursoemvideo";
        $$site = "cursoPHP";
        echo "<br/>$site";
        echo "<br/>$cursoemvideo";

    ?>
</div>
</body>
</html>