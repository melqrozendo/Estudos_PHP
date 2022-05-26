<!--Aula 19: Vetores e Matrizes em PHP

Funçoes para Vetores em PHP

-Exibindo Vetor:
1 - Função: print_r(); -> exibir a estrutura de vetor
<-?php
    $v = array("A","B","C","D");
    print_r($v);
?->

2 - Função: var_dump(); -> exibir a estrutura completa de um vetor criado
<-?php
    $v = array("A","B","C","D");
    var_dump($v);
?->

-Contando os elementos de um Vetor
3 - Função: count(); -> conta a quantidade de elementos de um vetor
<-?php
    $v = array("A","B","C","D");
    echo "O vetor tem: ".count($v)." elementos";
    print_r($v);
?->

-Estutura de Dados
adicionando elemento no final do vetor sem uso de fução
<-?php
    $v = array("A","B","C","D");
    print_r($v);
    $v[]="O";
    print_r($v);
?->
PILHA
-gerenciando os ultimos elementos de um vetor
4 - Função: array_push(); -> adiciona ultimo elemento a estrutura do vetor
<-?php
    $v = array(3,5,8,2);
    print_r($v);
    array_push($v,7);
    print_r($v);
?->
5 - Função: array_pop(); -> elimina ultimo elemento a estrutura do vetor
<-?php
    $v = array(3,5,8,2);
    print_r($v);
    array_pop($v);
    print_r($v);
?->
-gerenciando os primeiros elementos de um vetor
6 - Função: array_unshift(); -> adiciona primeiro elemento a estrutura do vetor
<-?php
    $v = array(3,5,8,2);
    print_r($v);
    array_unshift($v,7);
    print_r($v);
?->
7 - Função: array_shift(); -> elimina primeiro elemento a estrutura do vetor
<-?php
    $v = array(3,5,8,2);
    print_r($v);
    array_shift($v);
    print_r($v);
?->
-ordenando Vetores
8 - Função: sort(); -> ordena os elementos na estrutura do vetor
<-?php
    $v = array(3,5,8,2);
    print_r($v);
    sort($v);
    print_r($v);
?->
9 - Função: rsort(); -> ordem reversa dos elementos na estrutura do vetor
<-?php
    $v = array(3,5,8,2);
    print_r($v);
    rsort($v);
    print_r($v);
?->
-ordenação associativa de vetores
10 - Função: asort(); -> ordena os elementos e os respectivos indice na estrutura dos vetor
<-?php
    $v = array(3,5,8,2);
    print_r($v);
    asort($v);
    print_r($v);
?->
-ordenação associativa reversa de vetores
11 - Função: arsort(); -> ordenação reversa dos elementos e os respectivos indice na estrutura dos vetor
<-?php
    $v = array(3,5,8,2);
    print_r($v);
    arsort($v);
    print_r($v);
?->
-ordenação por chaves(key): que são os indices dos vetores
12 - Função: ksort(); -> ordenação dos respectivos indice na estrutura dos vetor
<-?php
    $v = array(2=>3,5=>5,0=>8,3=>2);
    print_r($v);
    ksort($v);
    print_r($v);
?->
13 - Função: krsort(); -> ordenação reversa dos respectivos indice na estrutura dos vetor
<-?php
    $v = array(2=>3,5=>5,0=>8,3=>2);
    print_r($v);
    krsort($v);
    print_r($v);
?->
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções para Vetores em PHP</title>
</head>
<body>
<div>
    <pre>
    <?php
        echo "1 - Função: print_r(); -> exibir a estrutura de vetor<br/>";
        $v = array("A","B","C","D");
        print_r($v);
    ?>
    </pre>
    <pre>
    <?php
        echo "2 - Função: var_dump(); -> exibir a estrutura detalhada de um vetor<br/>";
        $v = array("A","B","C","D");
        var_dump($v);
    ?>
    </pre>
    <pre>
    <?php
        echo "3 - Função: count(); -> conta a quantidade de elementos de um vetor<br/>";
        $v = array("A","B","C","D");
        echo "O vetor tem: ".count($v)." elementos <br/>";
        print_r($v);
    ?>
    </pre>
    <pre>
    <?php
        echo "Estutura de Dados: adicionando elemento no final do vetor<br/>";
        $v = array("A","B","C","D");
        print_r($v);
        $v[]="O";
        print_r($v);
    ?>
    </pre>
    <pre>
    <?php
        echo "4 - Função: array_push(); -> adiciona ultimo elemento a estrutura do vetor<br/>";
        $v = array(3,5,8,2);
        print_r($v);
        array_push($v,7);
        print_r($v);
    ?>
    </pre>
    <pre>
    <?php
        echo "5 - Função: array_pop(); -> elimina ultimo elemento a estrutura do vetor<br/>";
        $v = array(3,5,8,2);
        print_r($v);
        array_pop($v);
        print_r($v);
    ?>
    </pre>
    <pre>
    <?php
        echo "6 - Função: array_unshift(); -> adiciona primeiro elemento a estrutura do vetor<br/>";
        $v = array(3,5,8,2);
        print_r($v);
        array_unshift($v,7);
        print_r($v);
    ?>
    </pre>
    <pre>
    <?php
        echo "7 - Função: array_shift(); -> elimina primeiro elemento a estrutura do vetor<br/>";
        $v = array(3,5,8,2);
        print_r($v);
        array_shift($v);
        print_r($v);
    ?>
    </pre>
    <pre>
    <?php
        echo "8 - Função: sort(); -> ordena os elementos na estrutura do vetor<br/>";
        $v = array(3,5,8,2);
        print_r($v);
        sort($v);
        print_r($v);
    ?>
    </pre>
    <pre>
    <?php
        echo "9 - Função: rsort(); -> ordem reversa dos elementos na estrutura do vetor<br/>";
        $v = array(3,5,8,2);
        print_r($v);
        rsort($v);
        print_r($v);
    ?>
    </pre>
    <pre>
    <?php
        echo "10 - Função: asort(); -> ordena os elementos e os respectivos indice na estrutura dos vetor<br/>";
        $v = array(3,5,8,2);
        print_r($v);
        asort($v);
        print_r($v);
    ?>
    </pre>
    <pre>
    <?php
        echo "11 - Função: arsort(); -> ordenação reversa dos elementos e os respectivos indice na estrutura dos vetor<br/>";
        $v = array(3,5,8,2);
        print_r($v);
        arsort($v);
        print_r($v);
    ?>
    </pre>
    <pre>
    <?php
        echo "12 - Função: ksort(); -> ordenação dos respectivos indice na estrutura dos vetor<br/>";
        $v = array(2=>3,5=>5,0=>8,3=>2);
        print_r($v);
        ksort($v);
        print_r($v);
    ?>
    </pre>
    <pre>
    <?php
        echo "13 - Função: krsort(); -> ordenação reversa dos respectivos indice na estrutura dos vetor<br/>";
        $v = array(2=>3,5=>5,0=>8,3=>2);
        print_r($v);
        krsort($v);
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>