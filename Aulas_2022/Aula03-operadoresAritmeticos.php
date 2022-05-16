<!--Aula 05: operadores aritméticos em PHP

Codigo de sintaxe:
$n1 = 2;
$n2 = 3;
$s = $n1 + $n2;
echo "A soma vale $s";

Operadores Aritmeticos no PHP
-Adição:            $r = $a + $b;
-Subtração:         $r = $a - $b;
-Multiplicação:     $r = $a * $b;
-Divisão:           $r = $a / $b;
-Módulo:            $r = $a % $b;

*obs: a ordem de precendencia nas operações

Usuarios adicionando valores pelo link do localhost:
http://localhost/AulaPHP/Aula03-operadores.php?a=3&b=2

codigo para receber os parameros a e b:
$n3 = $_GET["a"];
$n4 = $_GET["b"];

*obs:
GET = pegar o valor recebido e jogar na variavel

Funçoes Matematicasno PHP
-Valor Absoluto:    abs()
-Potenciação:       pow()
-Raiz Quadrada:     sqrt()
-Arredondamento:    round()
-Arredondamento para cima:  ceil()
-Arredondamento para baixo: floor()
-Valor Inteiro da variável: intval()
-Formatação:                number_format()
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores Aritméticos PHP</title>
</head>
<body>
<div>
    <?php
       $n1 = 2;
       $n2 = 3;
       $s = $n1 + $n2;
       $media = ($n1+$n2)/2;
       echo "A soma de $n1 com $n2 é igual a $s";
       echo "<br/>A soma vale ". ($n1+$n2);
       echo "<br/>A subtração vale ". ($n1-$n2);
       echo "<br/>A multiplicação vale ". ($n1*$n2);
       echo "<br/>A divisão vale ". ($n1/$n2);
       echo "<br/>O módulo vale ". ($n1%$n2);
       echo "<br/> A média vale ". ($media);

       $n3 = $_GET["a"];
       $n4 = $_GET["b"];
       echo "<br/>";
       echo "<br/>Valores recebidos: $n3 e $n4";
       $m = ($n3+$n4)/2;
       echo "<br/>A media dos valores recebidos é: $m";
       echo "<br/>";
       
       echo "<br/>Funções Matematicas no PHP:";

       echo "<br/>O valor absoluto: ". abs($n3);
       echo "<br/>A potencia de $n3<sup>$n4</sup> é: ". pow($n3,$n4);
       echo "<br/>A raiz quadrada de $n3 é: ". sqrt($n3);
       echo "<br/>O valor de $n4 arredondado é: ". round($n4);
       echo "<br/>A parte inteira de $n4 é: ". intval($n4);
       echo "<br/>O valor de $n4 em moeda é:R$ ". number_format($n4,2);
       echo "<br/>O valor de $n4 em moeda é:R$ ". number_format($n4,2,",",".");


    ?>
</div>
</body>
</html>