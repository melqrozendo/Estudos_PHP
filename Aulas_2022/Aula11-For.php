<!--Aula 13: estrutura de repetição FOR em PHP

Repetição com Variável de Controle
-código de sintaxe:
for($c = 1;$c <= 10;$c++){      #Para $c recebe 1 até 10 faça
    echo $c;                    #escreva $c
}


-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Estrutura de Repetição For em PHP</title>
</head>
<body>
<div>
    <?php
        echo "Desafio 01 - Mostrar várias contagens utilizando a estrutura for:<br/>";
        for($c = 1; $c <= 10; $c ++){
            echo "$c ";
        }
        echo "<br/>";

        echo "Desafio 02 - Mostrar várias contagens utilizando a estrutura for:<br/>";
        for($c = 10; $c >= 1; $c --){
            echo "$c ";
        }
        echo "<br/>";

        echo "Desafio 03 - contagem de 1 ate 100 utilizando for: <br/>";
        for($c = 0; $c <= 100; $c+=5){
            echo "$c ";
        }
        echo "<br/>";

        print "Desafio 04 - contagem regressiva de 30 ate 10: <br/>";
        for($c = 30; $c >= 10; $c -= 2){
            print "$c ";
        }
        echo "<br/>";

        print "Desafio 05 - Exibir a tabuada de um numero escolhido pelo usuario de 1 ate 10. <br/>";    
    ?>
    <br/>
    <form method="get" action="Aula11-For.php">
        Valor: <input type="number" name="valor" />
        <input type="submit" value="Tabuada" />
    </form>
    <br/>
    <?php
        $v = isset($_GET["valor"]) ? $_GET["valor"] : 0;
        print "Tabuada de $v<br/>";
        for($n = 1; $n <= 10; $n++){
            $calcule = $v * $n;
            print "<br/> $v x $n = $calcule";
        }
        print "<br/>";
    ?>
    <?php
        print "Desafio 06 - Exibir tabuada com select: <br/>";
    ?>
    <br/>
    <form method="get" action="Aula11-For.php">
        <select name="num">
            <?php
                for($s = 1; $s <= 10; $s++){
                    print "<option>$s</option>";
                }
            ?>
        </select>
        <input type="submit" value="Tabuada"/>
    </form>
    <br/>
    <?php
        $y = isset($_GET["num"]) ? $_GET["num"] : 1;
        print "Tabuada de $y <br/>";
        for($n = 1; $n <= 10; $n++){
            $calcule = $y * $n;
            print "<br/> $y x $n = $calcule";
        }
        print "<br/>";
    ?>
    <?php
        echo "Desafio 07 - Verificar se um numero digitado pelo usuario é primo:<br/>";
    ?>
    <br/>
    <form method="get" action="Aula11-For.php">
        Numero: <input type="number" name="num" max="10" min="1"/>
        <input type="submit" value="É primo?"/>
    </form>
    <br/>
    <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 1;
        print "Analisando o numero: $n<br/>";
        echo "Valores multiplos: ";
        $t = 0;
        for($c = 1; $c <= $n; $c++){
            if($n%$c == 0){
                echo "$c ";
                $t++;
            }
        }
        echo "<br/> Total de multiplos: $t<br/>";
        
        if($t > 2){
            echo "Resultado: $n Não é Primo!";
        }
        elseif($t == 2){
            echo "Resultado: $n É Primo!";
        }
    ?>
</div>
</body>
</html>