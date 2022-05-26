<!--Aula 16: Funções String em PHP

Como manipular Strings em PHP: [25 funções]

1 - Função: printf() -> exibir valores formatados
<-?php
    $prod = "leite";
    $preco = 4.5;
    printf("O %s está custando R$%.2f", $prod, $preco);
?->
Paramentros:
%s -> usado para referenciar o string de $prod
%f ou %.2f -> usado para referenciar o float(real) de $preco
%d -> valor decimal (positivo ou negativo)
%u -> valor decimal sem sinal (apenas positivos)

2 - Função: print_r() -> exibir detalhes de variaves, principalmente se for um vetor
<-?php
    $v[0] = 1;
    $v[1] = 2;
    $v[2] = 3;
    print_r($v); 
    var_dump($v);
    var_export($x); 
?->

3 - Função: wordwrap() -> cria quebra de linhas no codigo-fonte*
<-?php
    $t = "Aula de progamação com a linguagem de PHP, nessa aula estamos aprendendo com manipular strings";
    $r = wordwrap($t, 20, "<br/>\n"); #uso do <br/>+\n para quebra linha visivel
    $r = wordwrap($t, 5, "<br/>\n", false); #quebra de linha por palavra se tiver menos que 5 letras
    $r = wordwrap($t, 5, "<br/>\n", true); #quebra de linha quando tiver 5 letras na linha
    echo $r;
?->

4 - Função: strlen() -> calcula o comprimento(tamanho) de uma string
<-?php
    $txt = "Curso em Vídeo";
    $tamanho = stren($txt);     #contando a quantidade de caracter = 14 
?->

5 - Função: trim() -> calcula o comprimento(tamanho) de uma string sem espaço inicial ou final
<-?php
    $nome = "   Rozendo da Silva   ";
    echo(strlen($nome));        #contando a quantidade de caracter = 22
    $novo = trim($nome);        #aplicando a função trim() e excluindo os espaços iniciasi e finais
    echo($novo);                #escreva = 'Rozendo da Silva'
    echo(strlen($novo));        #contando a quantidade apos a função trim() = 16
?->

6 - Função: ltrim() -> calcula o comprimento(tamanho) de uma string sem espaço inicial
<-?php
    $nome = "   Rozendo da Silva   ";
    echo(strlen($nome));        #contando a quantidade de caracter = 22
    $novo = ltrim($nome);       #aplicando a função ltrim() e excluindo os espaços iniciais
    echo($novo);                #escreva = 'Rozendo da Silva   '
    echo(strlen($novo));        #contando a quantidade apos a função ltrim() = 19
?->

7 - Função: rtrim() -> calcula o comprimento(tamanho) de uma string sem espaço final
<-?php
    $nome = "   Rozendo da Silva   ";
    echo(strlen($nome));        #contando a quantidade de caracter = 22
    $novo = rtrim($nome);       #aplicando a função rtrim() e excluindo os espaços finais
    echo($novo);                #escreva = '   Rozendo da Silva'
    echo(strlen($novo));        #contando a quantidade apos a função ltrim() = 19
?->

8 - Função: str_word_count() -> conta a quantidade de palavras dentro de uma string
<-?php
    $frase = "Eu vou estudar PHP";
    $cont = str_word_count($frase,0);   #contando apenas a quantidade de palavras em $frase
    $cont = str_word_count($frase,1);   #criar um vetor da quantidade de palavras em $frase
    $cont = str_word_count($frase,2);   #criar um vetor mantendo o posicionamento de cada palavra dentro da string $frase
    print($cont)                        #$cont = 4 palavras
?->

9 - Função: explode() -> conta cada palavra dentro de uma string[função atualizada de str_word_count()]
<-?php
    $site = "Curso em Vídeo";
    $vetor = explode(" ", $site);
    print_r($vetor);
?->

10 - Função: str_split() -> conta cada letra dentro de uma string[função atualizada de str_word_count()]
<-?php
    $nome = "Maria";
    $vetor = str_split($nome);
    print_r($vetor);
?->

11 - Função: implode() ou join() -> junta cada palavra dentro de uma string
<-?php
    $v[0] = "Curso";
    $v[1] = "em";
    $v[2] = "Vídeo";
    $texto = implode("#", $v);
    $texto = join("#", $v);
    print($texto);              #$texto = Curso#em#Vídeo
?->

12 - Função: chr() -> usado para mostrar que letra esta no codigo inserido
<-?php
    $letra = chr(67);
    echo($letra);
?->

13 - Função: ord() -> usado para mostrar o codigo da letra inserido
<-?php
    $letra = "C";
    $cod = ord($letra);
    print("A letra $letra tem código $cod");
?->

-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções Strings em PHP</title>
</head>
<body>
<div>
    <?php
        echo "1 - Função: printf()<br/>";
        $prod = "leite";
        $preco = 4.5;
        printf("O %s está custando R$%.2f", $prod, $preco);
        echo "<br/>";
    ?>
    <?php
        echo "<br/>2 - Função: print_r()<br/>"; #usando em periodo de teste
        $v[0] = 1;
        $v[1] = 2;
        $v[2] = 3;
        print_r($v); echo "<br/>";
        $v2 = array(3,4,5,6);
        print_r($v2);echo "<br/>";
        var_dump($v2);echo "<br/>";
        var_export($v2);echo "<br/>";
    ?>
    <?php
        echo "<br/>3 - Função: wordwrap()<br/>";
        $t = "Aula de progamação com a linguagem de PHP, nessa aula estamos aprendendo com manipular strings";
        $r = wordwrap($t, 20, "<br/>\n");
        echo $r;
        echo "<br/>";
    ?>
    <?php
        echo "<br/>8 - Função: str_word_count()<br/>";
        $frase = "Eu vou estudar PHP";
        $cont0 = str_word_count($frase,0);
        $cont1 = str_word_count($frase,1);
        $cont2 = str_word_count($frase,2);
        echo($cont0);echo "<br/>";
        print_r($cont1);echo "<br/>";
        print_r($cont2);echo "<br/>";
    ?>
    <?php
        echo "<br/>9 - Função: explode()<br/>"; 
        $site = "Curso em Vídeo";
        $vetor = explode(" ", $site);
        print_r($vetor);
        echo "<br/>";
    ?>
    <?php
        echo "<br/>11 - Função: implode()<br/>";
        $v[0] = "Curso";
        $v[1] = "em";
        $v[2] = "Vídeo";
        $texto = implode("#", $v);
        $texto1 = join("#", $v);
        print($texto);echo "<br/>";
        print($texto1);echo "<br/>";
    ?>
    <?php
        echo "<br/>12 - Função: chr()<br/>";
        $letra = chr(67);
        echo "A letra do codigo 67 é $letra <br/>";
        $letra = chr(99);
        echo "A letra do codigo 99 é $letra <br/>";
    ?>
    <?php
        echo "<br/>13 - Função: ord()<br/>";
        $letra = "C";
        $cod = ord($letra);
        print("A letra $letra tem código $cod");
    ?>
</div>
</body>
</html>