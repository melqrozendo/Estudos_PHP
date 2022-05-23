<!--Aula 11: estrutura de repetição WHILE em PHP

Repetição com Teste Lógico no Inicio
-código de sintaxe:
$c = 1;                 #a variavel $c recebe 1
while($c <= 10){        #enquanto $c for menor ou igual a 10
    echo $c;            #escreva $c
    $c++;               #e adiciona +1 ao valor de $c
}

obs:
Modificando o laço
-codigo de sintaxe:
$c = 1;
while($c <= 1000){
    /**/
    break;              #uso do break; para interromper a estrutura de repetição
    /**/
    continue;           #uso do continue; para voltar ao while
    /**/
    $c++;
}



-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Estrutura de Repetição While em PHP</title>
</head>
<body>
<div>
    <?php
        echo "Desafio 01 - Mostrar uma contagem progressiva de 1 até 10:<br/>";
        $c = 1;
        while($c <= 10){
            echo $c ." ";
            $c++;
        }
        echo "<br/>";
        echo "Desafio 02 - Mostrar uma contagem decrescente de 10 ate 1:<br/>";
        $d = 10;
        while($d >= 1){
            echo $d . " ";
            $d--;
        }
        
    ?>
    <br/>
    <?php
        echo "<br/>";
        echo "Desafio 03 - Criar dinamicamente 5 caixas de texto em um formulário:";

    ?>
    <form method="get" action="Aula09-estruturarepeticao.php">
        <?php
        $box = 1;
        while($box <=5){
            echo "Valor $box:<input type='number' name='v$box' max='100' min='0' value='0'/><br/>";
            $box++;
        }
        
        ?>
        <input type="submit" value="Enviar" class="botao"/>
    </form>
    <?php
        echo "#1"; # modelo de exibir valor 1
        $n1 = $_GET["v1"];
        echo "<br/>Valor 1: $n1";
        $n2 = $_GET["v2"];
        echo "<br/>Valor 2: $n2";
        $n3 = $_GET["v3"];
        echo "<br/>Valor 3: $n3";
        $n4 = $_GET["v4"];
        echo "<br/>Valor 4: $n4";
        $n5 = $_GET["v5"];
        echo "<br/>Valor 5: $n5";
        echo "<br/>";
    ?>
    <br/>
    <?php
        echo "#2<br/>"; # modelo de exibir valor 2
        $a = 1;
        while($a <= 5){
            $v = "num".$a;
            $url = "v".$a;
            $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
            $a++;
        }

        $a = 1;
        while($a <= 5){
            $v = "num".$a;
            echo "Valor $a: ".$$v. "<br/>";
            $a++;
        }
    ?>
    <?php
        echo "<br/>";
        echo "Desafio 04 - criando um contador personalizavel: "
    ?>
    <form method="get" action="Aula09-estruturarepeticao.php">
        Início: <input type="number" name="inicio" max="100" min="0"/><br/>
        Final: <input type="number" name="final" max="100" min="0"/><br/>
        Incremento: <input type="number" name="incre" max="5" min="1"/><br/>

        <input type="submit" value="Contar"/>
    </form>
    <?php
        $in = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
        $fin = isset($_GET["final"]) ? $_GET["final"] : 0;
        $inc = isset($_GET["incre"]) ? $_GET["incre"] : 0;

        echo "$in ";

        if($in < $fin){ # se inicio for menor que final haverá incremeto de valor ate final
            while($in <= $fin){
                $in = $in + $inc;
                if($in <= $fin){
                    echo "$in ";
                }
            }
        }
        elseif($in > $fin){ # se inicio for maior que final haverá decremento de valor ate final
            while($in >= $fin){
                $in = $in - $inc;
                if($in >= $fin){
                    echo "$in ";
                }
            }
        }
    ?>
    
</div>
</body>
</html>