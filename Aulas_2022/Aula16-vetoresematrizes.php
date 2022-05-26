<!--Aula 18: Vetores e Matrizes em PHP
-conceito de variaveis compostas

Vetores em Php são versoes dinamicas
-codigo de sintaxe: 
#1 - declarando vetores
$n[0] = 3;
$n[1] = 5;
$n[2] = 8;
$n[3] = 2;
$n[4] = 7;

#2 - declarando vetores
$n = array(3,5,8,2);
-alocando mais uma posição no array
$[4] = 7;  ou $[] = 7;

Vetores criado por Range
-codigo de sintaxe:
$c = range(5,20,5);         #range(vetor[0],vetor[n],passo) = $c(5,10,15,20)

Utilizando a estrutura Foreach(para cada)
-codigo de sintaxe:
$c = range(5,20,2);
    foreach($c as $v){      #para cada valor do $c tratado como $v
        echo "$v ";         #escreva $v
    }

Criando Vetores com chaves personalizadas
-codigo de sintaxe:
$v = array(1=>"A",3=>"B",6=>"C",8=>"D");
print_r($v);

Criando Vetores com chaves personalizadas + desalocando vetor
-codigo de sintaxe:
$v = array(1=>"A",3=>"B",6=>"C",8=>"D");
unset($v[8]);
print_r($v);

Criando Vetores com chaves Associativas
Em php as variaveis compostas não são homogeneas
-codigo de sintaxe: 
$cad = array("nome"=>"Ana", "idade"=>23, "peso"=>78.5);
print_r($cad);
$cad["fuma"] = true;        #adicionando mais uma estrutura no vetor

Utilizandpo o foreach Associativo
-codigo de sintaxe: 
$cad = array("nome"=>"Ana", "idade"=>23, "peso"=>78.5);
print_r($cad);
$cad["fuma"] = true;        #adicionando mais uma estrutura no vetor
foreach($cad as $campo => $valor){      #cada elemento de vetor do $cad como a chave $campo vou associar a $valor
    echo "O valor de $campo é $valor";
}

Matizes - variaveis compostas multidimenssionais
conceito de vetores dentro de vetores
-codigo de sintaxe:
$n = array(array(2,3),array(3,4),array(9,5));

-referenciando elemento especifico dentro da matriz:
$n[2][0] = $n[1][1] #o valor da l= 2 e c= 0 vai valer o valor da l= 1 e c= 1
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Vetores e Matrizes em PHP</title>
</head>
<body>
<div>
    <pre>
    <?php
        echo "Desafio 01 - declaração de vetores<br/>";
        $n = array(3,5,8,2);
        $n[4] = 7;
        print_r($n);
    ?>
    </pre>
    <pre>
    <?php
        echo "Desafio 02 - declaração de vetores com Range()<br/>";
        $c = range(5,20,2);
        print_r($c);
    ?>
    </pre>
    <pre>
        <table border="1">
    <?php
        echo "Desafio 03 - declaração de vetores com Range() + foreach<br/>";
        $c = range(5,20,2);
        foreach($c as $v){
            echo "<td>$v ";
        }
    ?>
        </table>
    </pre>
    <pre>
    <?php
        echo "Desafio 04 - declaração de vetores com chave personalizadas<br/>";
        $v = array(1=>"A",3=>"B",6=>"C",8=>"D");
        $v[] = "E";
        print_r($v);
    ?>
    </pre>
    <pre>
    <?php
        echo "Desafio 05 - declaração de vetores com chave associativa<br/>";
        $cad = array("nome"=>"Ana", "idade"=>23, "peso"=>78.5);
        print_r($cad);
        $cad["fuma"] = true;
        print_r($cad);
    ?>
    </pre>
    <?php
        echo "Desafio 06 - declaração de vetores com chave associativa + foreach<br/>";
        $cad = array("nome"=>"Ana", "idade"=>23, "peso"=>78.5);
        print_r($cad);
        $cad["fuma"] = true;        #adicionando mais uma estrutura no vetor
        foreach($cad as $campo => $valor){      
        echo "<br/>O valor de $campo é $valor";
        }
    ?>
    <pre>
    <?php
        echo "Desafio 07 - Matrizes<br/>";
        $m = array(array(3,2), array(4,5), array(7,8));
        $m[1][1] = $m[2][0];
        print_r($m);
        
    ?>
    </pre>
</div>
</body>
</html>