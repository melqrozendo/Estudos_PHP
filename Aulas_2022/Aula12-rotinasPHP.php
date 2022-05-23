<!--Aula 14: rotinas em PHP
rotinas - são procedimentos ou funçoes

Rotina 1 - criando um procedimento nome(soma) que não retorna valor
-codigo de sintaxe:
function soma($a, $b){      #procedimento 'soma' que recebe parametro tipo int $a e $b 
    $s = $a + $b;           #$s recebe a soma de $a + $b
    echo $s;                #escreve $s
}

soma(3,4);                  #chamada para passagem de parametros

Rotina 2 - criando um procedimento nome(soma) que retorna valor
-codigo de sintaxe:
function soma($a, $b){      #procedimento 'soma' que recebe parametro tipo int $a e $b 
    $s = $a + $b;           #$s recebe a soma de $a + $b
    return $s;              #retornar $s e jogar na vareavel $res
}

$res = soma(3,4);           #chamada para passagem de parametros com retorno de valores


Rotinas com multiplos parametros em PHP
-codigo de sintaxe:
function soma(){                #função 'soma' recebendo valor nenhum
    $p = func_get_args();       #uso da função func_get(pega todos os arg e coloca dentro de um vetor chamado $p[0],$p[1],.])
    $tot = func_num_args();     #uso da função func_num(retorna o numero total de arg que foram passados $tot=5) 
    $s = 0;                     #criamos uma variavel $s para soma dos valores
    for($i=0;$i<$tot;$i++){     #estrutura for: enquanto $i for menor do que $tot(total de valores passados no parametros)
        $s = $s + $p[$i];       #$s recebe a soma de $s com o vetor $p com indice de [0,1,2,3,4]
    }
    return $s;                  #retornar o valor de $s a variavel $res
}

$res = soma(3,4,5,6,2);         #chamada para passagem de 5 parametros com retorno de valores
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
        echo "Desafio 01 - Criar um procedimento que some dois valores numericos:<br/>";
        function soma ($a, $b){
            $s = $a + $b;
            echo "A soma vale $s <br/>";
        }

        soma(3,4);
        soma(8,2);
        $x = 9;
        $y = 15;
        soma($x,$y);

        print "<br/>";
    ?>
    <?php
        echo "Desafio 02 - Criar uma função que some dois valores numericos:<br/>";
        function some ($a, $b){
            $s = $a + $b;
            return $s;
        }

        $w = 3;
        $z = 4;
        $res = some($w,$z);
        echo "A soma entre $w e $z é igual a $res";
    ?>
    <?php
        echo "Desafio 03 - Realizar uma soma com multiplos parametros:<br/>";
        function som(...$p){
            #$p = func_get_arg();       #a partir da versao 5.6 do PHP alterou o uso para a função
            $tot = func_num_args();
            $s = 0;
            for($i=0;$i<=$tot;$i++){
                $s = $s + $p[$i];
            }
            return $s;
        }

        $res = som(1,2,3,4,5);
        echo "A soma é $res";
    ?>
</div>
</body>
</html>