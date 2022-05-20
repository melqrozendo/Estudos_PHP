<!--Aula 09: estrutura condicionais IF em PHP

Condições
-usando operadores ternarios:
$maior = $a>$b ? $a:$b;      #se a for maior do que b então $maior recebe 'a', senão $maior recebe 'b'.

Estrutura Condicional IF
-codigo de sintaxe:
if($a>$b)
{$maior = $a}
else
{$maior = $b}

Condições Compostas ou Aninhadas
-codigo de sintaxe:
if($idade<16){
    $tipoVoto = "não vota";
}
else{
    if($idade>=16 && $idade<18){
        $tipoVoto="voto opcional";
    }
    else{
        $tipoVoto="voto obrigatório";
    }
}
-reduzindo a quantidade bloco com ELSEIF:
if($idade<16){
    $tipoVoto = "não vota";
}
elseif($idade>=16 && $idade<18){
        $tipoVoto="voto opcional";
}
else{
        $tipoVoto="voto obrigatório";
}


-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Estrutura Condicional em PHP</title>
    <style>
        span.nota{
            color: red;
        }

    </style>
</head>
<body>
<div>
    <form method="get" action="Aula07-estruturacondicional.php">
        Ano de Nascimento:
        <input type="number" placeholder="4 dígitos" name="ano"/>
        <input type="submit" value="Verificar"/>
    </form>
    <?php
        echo "Desafio 01 - Ler o ano de nascimento de uma pessoa e mostrar se ela pode votar e dirigir:";
        $a = isset($_GET["ano"]) ? $_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "<br/> Você nasceu em $a e tem $i anos";
        #estrutura condifional ternaria
        if($i >= 18){
            $v = "já pode votar";
            $d = "já pode dirigir";
        }
        else{
            $v = "não pode votar";
            $d = "não pode dirigir";
        }
        echo "<br/>Com essa idade você $v e também $d.";
        echo "<br/>";

        echo "<br/>Desafio 02 - Considerar o voto opcional, dado a idade do usuario:";
        #estrutura condicional composta
        if($i < 16){
            $tipoVoto = "não vota";
        }
        else{
            if(($i >= 16 && $i < 18) || ($i > 65)){
                $tipoVoto = "voto opcional";
            }
            else{
                $tipoVoto = "voto obrigatório";
            }
        }
        echo "<br/>Para essa idade, $tipoVoto";
        echo "<br/>";

    ?>
    <br/>
    <form method="get" action="Aula07-estruturacondicional.php">
        Nota 1: 
        <input type="number" name="nota1"/> <br/>
        Nota 2:
        <input type="number" name="nota2"/> <br/>
        <input type="submit" value="Calcular Média"/>

    </form>
    <?php
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $media = ($nota1+$nota2)/2;
        echo "<br/>A média entre <span class='nota'> $nota1</span> e <span class='nota'> $nota2</span> é igual a <span class='nota'>$media</span>";
        if($media >= 7){
            $situacao = "APROVADO";
        }
        elseif($media < 7 && $media > 5){
            $situacao = "RECUPERAÇÃO";
        }
        else{
            $situacao = "REPROVADO";
        }
        echo "<br/>Situação do aluno:<span class='nota'> $situacao</span>";
        #ir para o <head> para definir o style local com CSS
    ?>
</div>
</body>
</html>