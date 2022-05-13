<!--Aula 04: variaveis em PHP

$idade = 3;
$sal = 1825.54;
$nome = "Rozendo";
$casado = false;

obs: no PHP não existe declaração de tipos de variáveis por causa da COERSÃO

Porém, temos a typecast:

inteiro: (int), (integer)
real: (real), (float), (double)
caractere: (string)
lógico: (???) true = 1 e false = vazio

CONCATENAÇÃO EM PHP
$nome = "joana";
$idade = 18;
echo $nome. "tem". $idade. "anos";
echo "$nome tem $idade anos!";

-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Variáveis em PHP</title>
</head>
<body>
<div>
    <?php
        $num = (int) 22;
        echo "Número: ". $num. "<br/>";
        $nome = (string) "Rozendo";
        echo "Nome: ". $nome. "<br/>";
        echo "$nome tem $num carros importados da China!"
    ?>
</div>
</body>
</html>