<!--Aula 07: operadores relacionais em PHP

Operadores Relacionais no PHP
-Maior:             $a > $b
-Menor:             $a < $b
-Maior ou igual:    $a >= $b
-Menor ou igual:    $a <= $b
-Diferente:         $a <> $b ou $a != $b
-Igual:             $a == $b
-Idêntico:          $a === $b [testar se são do mesmo tipo e iguais]

Operador Unário
-codigo de sintaxe:
expressão ? verdadeiro : falso
$a > $b   ?      $a    : $b     -> se 'a' for maior do que 'b', retorne o valor 'a', cso contrario retorne o valor 'b'.

Assim:
$maior = $a > $b ? $a : $b      -> se 'a' for maior do que 'b', então '$maior' recebe 'a', senão '$maior' recebe 'b'.

$r = $a > $b ? $a+$b : $a-$b    -> se 'a' for maior do que 'b', então '$r' recebe o resultado da adição de '$a+$b', senão '$r' recebe o resultado da subtração de '$a-$b'.

$situacao = $media<7 : "recuperação" : "aprovado"   -> se a 'media' for menor do que '7', então '$situacao' recebe 'recuperação', senão '$situacao' recebe 'aprovado'

Usuarios adicionando valores pelo link do localhost:
http://localhost/AulaPHP/Aula05-operadoresRelacionais.php?a=5&b=3&op=s
http://localhost/AulaPHP/Aula05-operadoresRelacionais.php?a=5&b=3&op=s&n1=5&n2=8
localhost/AulaPHP/Aula05-operadoresRelacionais.php?a=5&b=3&op=s&n1=5&n2=8&ano=1999

codigo para receber os parameros p:
$preco = $_GET["p"];

*obs:
GET = pegar o valor recebido e jogar na variavel

Operadores Logicos
-E ou AND ou &&     -> todas primicias serão verdadeiras se tudo for verdadeiro
-OU ou OR ou ||     -> a primicia será verdadeira, se pelo menos uma for verdadeiro
-XOU ou XOR         -> a primicia será verdadeira, se for verdadeira ou falsa/falsa ou verdadeira.
-NÃO ou !           -> a primicia será verdadeira, se for falso e a primicia será falso, se for verdadeiro.

-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores Relacionais em PHP</title>
</head>
<body>
<div>
    <?php
        echo "Desafio 01 - Permitir que o usuario escolha entre somar e multiplicar dois numeros:";
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "<br/>Os valores passados foram $n1 e $n2";
        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
        echo "<br/>O resultado será: $r";
        echo "<br/>";

        echo "Desafio 02 - Comparando operadores relacionais IGUAL e IDENTICO:";
        $c = 3;
        $d = "3";
        $res = ($c == $d) ? "SIM" : "NÃO";
        echo "<br/>As variáveis A e B são iguais: $res";
        $res = ($c === $d) ? "SIM" : "NÃO";
        echo "<br/>As variáveis A e B são idênticas: $res";
        echo "<br/>";

        echo "Desafio 03 - Mostrar a situação de um aluno, de acordo com a sua média obtida:";
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1+$nota2)/2;
        echo "<br/>A média entre $nota1 e $nota2 é: $media";
        $sit = ($media<6) ? "REPROVADO" : "APROVADO";
        echo "<br/>A situação do aluno é: $sit";
        echo "<br/>A situação do aluno é: ". (($media<6) ? "REPROVADO" : "APROVADO");
        echo "<br/>";

        echo "Desafio 04 - Mostrar se um eleitor é obrigado a votar ou não:";
        $ano = $_GET["ano"];
        $idade = 2022 - $ano;
        echo "<br/>Quem nasceu em $ano tem idade de $idade anos.";
        $votar = ($idade>=18 && $idade<65) ? "obrigatório!" : "ñ obrigatório!";
        echo "<br/>Se tem $idade anos então, seu voto é: $votar";

    ?>
</div>
</body>

</html>
