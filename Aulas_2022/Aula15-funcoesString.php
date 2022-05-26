<!--Aula 17: Funções String em PHP

Como manipular Strings em PHP: [25 funções]

14 - Função: strtolower() -> exibi a cadeia de caracter tudo em minusculas
<-?php
    $nome = "Rozendo da Silva";
    print("Seu nome é ".strtolower($nome));
?->

15 - Função: strtoupper() -> exibi a cadeia de caracter tudo em maiusculas
<-?php
    $nome = "Rozendo da Silva";
    print("Seu nome é ".strtoupper($nome));
?->

16 - Função: ucfirst() -> exibi o primeiro caracter em maiuscula
<-?php
    $nome = "rozendo da silva";
    print("Seu nome é ".ucfirst($nome));
?->

17 - Função: ucwords() -> exibi a primeira letra de cada palavra em maiuscula
<-?php
    $nome = "rozendo da silva";
    print("Seu nome é ".ucwords($nome));
?->

18 - Função: strrev() -> exibi todas as palavras invertidas
<-?php
    $nome = "rozendo da silva";
    print("Seu nome é ".strrev($nome));
?->

19 - Função: strpos() -> exibi a posição do caracter na string, de acordo com a caixa
<-?php
    $frase = "Estou aprendendo PHP";
    $pos = strpos($frase, "PHP");
    echo "$frase <br/> A string foi encontrada na posição $pos";
?->

20 - Função: stripos() -> exibi a posição do caracter na string, mesmo se for de caixa alta ou baixa
<-?php
    $frase = "Estou aprendendo PHP";
    $pos = stripos($frase, "php");
    echo "$frase <br/> A string foi encontrada na posição $pos";
?->

21 - Função: substr_count() -> exibi quantas vezes uma string apareceu na $frase
<-?php
    $frase = "Estou aprendendo PHP no curso em vídeo de PHP";
    $cont = substr_count($frase, "PHP");
    echo "PHP foi encontrado $cont vezes";
?->

22 - Função: substr() -> exibi um subsring da string $frase
<-?php
    $site = "Curso em Video";
    $sub = substr($site, 0,5);      #a substring inicia na posição 0 e finaliza na 5
    echo "$sub ";
?->

23 - Função: str_pad() -> exibir a string e faz um espaçador personalizado
<-?php
    $nome = "Rozendo";
    $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
    $novo = str_pad($nome, 30, " ", STR_PAD_BOTH);
    $novo = str_pad($nome, 30, " ", STR_PAD_LEFT);
    print("Meu professor $novo é lindo!");
?->

24 - Função: str_repeat() -> repete a string
<-?php
    $txt = str_repeat("Php",5);
    print("O texto gerado foi $txt");
?->

25 - Função: str_replace() -> substitui uma string por outra
<-?php
    $frase = "Gosto de estudar Matematica!!!";
    $novaFrase = str_replace("Matematica", "PHP", $frase);
    print($novaFrase);
?->

26 - Função: str_ireplace() -> substitui uma string por outra, mesmo com caixa alterada
<-?php
    $frase = "Gosto de estudar Matematica!!!";
    $novaFrase = str_ireplace("matematica", "PHP", $frase);
    print($novaFrase);
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
        echo "14 - Função: strtolower()<br/>";
        $nome = "Rozendo da Silva";
        print("Seu nome é ".strtolower($nome));
        echo "<br/>";
    ?>
    <?php
        echo "<br/>15 - Função: strtoupper()<br/>";
        $nome = "Rozendo da Silva";
        print("Seu nome é ".strtoupper($nome));
        echo "<br/>";
    ?>
    <?php
        echo "<br/>16 - Função: ucfirst()<br/>";
        $nome = "rozendo da silva";
        print("Seu nome é ".ucfirst(strtolower($nome)));
        echo "<br/>";
    ?>
    <?php
        echo "<br/>17 - Função: ucwords()<br/>";
        $nome = "rozendo da silva";
        print("Seu nome é ".ucwords($nome));
        echo "<br/>";
    ?>
    <?php
        echo "<br/>18 - Função: strrev()<br/>";
        $nome = "rozendo da silva";
        print("Seu nome é ".strrev($nome));
        echo "<br/>";
    ?>
    <?php
        echo "<br/>19 - Função: strpos()<br/>";
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");
        echo "$frase <br/> A string foi encontrada na posição $pos";
        echo "<br/>";
    ?>
    <?php
        echo "<br/>20 - Função: stripos()<br/>";
        $frase = "Estou aprendendo PHP";
        $pos = stripos($frase, "php");
        echo "$frase <br/> A string foi encontrada na posição $pos";
        echo "<br/>";
    ?>
    <?php
        echo "<br/>21 - Função: substr_count()<br/>";
        $frase = "Estou aprendendo PHP no curso em vídeo de PHP";
        $cont = substr_count($frase, "PHP");
        echo "PHP foi encontrado $cont vezes";
        echo "<br/>";
    ?>
    <?php
        echo "<br/>22 - Função: substr()<br/>";
        $site = "Curso em Video";
        $sub1 = substr($site, 0,5);    #a substring inicia na posição 0 e finaliza na 5
        $sub2 = substr($site, 6);     #a substring inicia na posição 6 e finaliza na 13
        $sub3 = substr($site, -5);    #a substring será os ultimos 5 caracteres
        echo "$sub1 ";echo "<br/>";
        echo "$sub2 ";echo "<br/>";
        echo "$sub3 ";echo "<br/>";
    ?>
    <?php
        echo "<br/>23 - Função: str_pad()<br/>";
        $nome = "Rozendo";
        $novo1 = str_pad($nome,30,"#", STR_PAD_RIGHT);
        $novo2 = str_pad($nome,30,"#", STR_PAD_BOTH);
        $novo3 = str_pad($nome,30,"#", STR_PAD_LEFT);
        print("Meu professor $novo1 é lindo!");echo "<br/>";
        print("Meu professor $novo2 é lindo!");echo "<br/>";
        print("Meu professor $novo3 é lindo!");echo "<br/>";
    ?>
    <?php
        echo "<br/>24 - Função: str_repeat()<br/>";
        $txt = str_repeat("Php",5);
        print("O texto gerado foi $txt");
        echo "<br/>";
    ?>
    <?php
        echo "<br/>25 - Função: str_replace()<br/>";
        $frase = "Gosto de estudar Matematica!!!";
        $novaFrase = str_replace("Matematica", "PHP", $frase);
        print($novaFrase);
        echo "<br/>";
    ?>
    <?php
        echo "<br/>26 - Função: str_ireplace()<br/>";
        $frase = "Gosto de estudar Matematica!!!";
        $novaFrase = str_ireplace("matematica", "PHP", $frase);
        print($novaFrase);
    ?>
</div>
</body>
</html>