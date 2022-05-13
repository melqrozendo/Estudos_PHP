<!--Aula 03: comados PHP

echo: comando usado para escrever na tela

Codigo de sintaxe:
echo "palavras+tagsEmHTML";
Exemplos:
echo "Olá, mundo!";
echo "<h1>Olá, mundo!</h1>";
echo "<h1>Olá, <br/>mundo!</h1>"; -> tag <br/> usado para pular linha

-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Primeiro código PHP</title>
    <style>
        h1 {
            color: #80a2ff;
            text-shadow: 1px 1px 1px black;
        }
    </style>
</head>
<body>
<div>
    <?php
        echo "Olá, mundo!<br/>";
        echo "<h1>Olá, mundo!</h1>";
    ?>
</div>
</body>
</html>
