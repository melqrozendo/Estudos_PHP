<!--Aula 12: estrutura de repetição Do WHILE em PHP

Repetição com Teste Lógico np Final
-codigo de sintaxe:
$c = 1;                 #a variavel $c recebe 1
do{                     #faça 
    echo $c;            #escreva $c
    $c++;               #e adicione +1
}while($c <= 10);       #enquanto $c for menor ou igual a 10


-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Estrutura de Repetição Do While em PHP</title>
</head>
<body>
<div>
    <?php
        echo "Desafio 01 - Mostrar uma contagem progressiva de 1 até 10:<br/>";
        $c =1;
        do{
            echo "$c ";
            $c++;
        }while($c <= 10);
    ?>
    <?php
        echo "<br/>Desafio 02 - Mostrar uma contagem regressiva de 10 até 1:<br/>";
        $r = 10;
        do{
            echo "$r ";
            $r--;
        }while($r >= 1);
    ?>
    <?php
        echo "<br/>Desafio 03 - Script para calcular o fatorial de um numero inteiro: <br/>";
    ?>
    <br/>
    <form method="get" action="Aula10-DoWhile.php">
        Valor: <input type="number" name="val" max="15" min="0"/>
        <input type="submit" value="Fatorial"/>
    </form>
    <br/>
    <?php
        $v = isset($_GET["val"]) ? $_GET["val"] : 1;
        echo "Calculando o fatorial de $v:";
        $x = $v;
        $fat = 1;
        do{
            $fat = $fat * $x;
            $x--;
        }while($x >= 1);
        echo "<br/>$v!= $fat";

    ?>
    <?php
        echo "<br/>Desafio 03 - Exibir a tabuada de um numero escolhido pelo usuario de 1 a 10: <br/>";
    ?>
    <br/>
    <form method="get" action="Aula10-DoWhile.php">
        Valor: <input type="number" name="tab" max="10" min="0"/>
        <input type="submit" value="Tabuada"/>
    </form>
    <br/>
    <?php
        $tab = isset($_GET["tab"]) ? $_GET["tab"] : 0;
        echo "<br/> Tabuada de $tab";
        $y = 1;
        do{
            $calculo = $tab * $y;
            echo "<br/> $tab x $y = $calculo";
            $y++;
        }while($y <=10);
    ?>
</div>
</body>
</html>