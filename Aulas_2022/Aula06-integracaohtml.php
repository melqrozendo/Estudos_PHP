<!--Aula 08: integração HTML + PHP
-como interligar formularios de html e script em php

Formularios em HTML5
codigo de sintaxe:
uso da tag forms, com o metodo de envio (GET/POST) e a ação de execução do formulario
metodo GET: envia os dados pela url(mais rapido e menos seguro)
metodo POST: envia os dados por pacotes(mais devagar e mais seguro)
action: ação para onde os dados serão enviados

EM HTML: 

<form method="get" action="dados.php">

    Valor: <input type="text" name="v"/>        #formulario
    <input type="submit" value="Calcular"/>     #botão

</form>

EM PHP:

<--?php
    $valor = $_GET["v"];    #veja que o valor do get é o nome atribuido ao input tipo texto.
    echo "Digitou $valor";
?>

obs: usado metodo GET/POST
<form method="get">         $v = $_GET["n"];
<form method="post">        $v = $_POST["n"];

Uso de Estruturas condicionais
Operadores Unários:
isset()     #significa se foi configurado os parametros do metodo 

Veja:
-no <head> teremos o script php do desafio 03 e o style local;
-no style local teremos um seletor do tipo span da classe 'texto';

-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--script do desafio 03-->
    <?php
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Genérico";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Integração html + PHP</title>
    <!--estilo local-->
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
<div>
    <form method="get" action="Aula06-integracaohtml.php">
        Valor: <input type="number" name="v"/>
        <input type="submit" value="Calcular Raiz"/>
    </form>
    <br/>
    <?php
        echo "Desafio 01 - Ler um valor e mostrar sua raiz quadrada:";
        $valor = isset($_GET["v"]) ? $_GET["v"] : "[não informado]";
        $rq = sqrt($valor);
        echo "<br/>A raiz de $valor é ". number_format($rq,2);
        echo "<br/>";
    ?>
    <br/>
    <form method="get" action="Aula06-integracaohtml.php">
        Nome: <input type="text" name="nome"/><br/>
        Ano de Nascimento: <input type="number" name="ano"/><br/>
        <fieldset><legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="homem" checked/>
            <label for="masc">Masculino</label><br/>
            <input type="radio" name="sexo" id="fem" value="mulher"/>
            <label for="fem">Feminino</label><br/>
        </fieldset><br/>
        <input type="submit" value="Enviar"/>

    </form>
    <br/>
    <?php
        echo "Desafio 02 - Ler nome, ano de nascimento e sexo de uma pessoa, mostrando sua idade atual:";
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]";
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : "[não informado]";
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[não informado]";
        $idade = date("Y") - $ano;
        echo "<br/>$nome é $sexo e tem $idade anos.";
        echo "<br/>";
    ?>
    <br/>
    <form method="get" action="Aula06-integracaohtml.php">
        <label for="itxt">Texto:</label>
        <input type="text" name="t" id="itxt"/> <br/>
        <label for="itam">Tamanho</label>
        <select name="tam" id="itam">
            <option value="8pt">8</option>
            <option value="10pt">10</option>
            <option value="14pt" selected>14</option>
            <option value="20pt">20</option>
            <option value="40pt">40</option>
        </select> <br/>
        <label for="icor">Cor: </label>
        <input type="color" name="cor" id="icor"/> <br/>
        <input type="submit" value="Gerar"/>

    </form>
    <?php
        echo "Desafio 03 - Configurar mensagem de texto:";
        echo "<br/><span class='texto'>$txt</span>";
        #ir para o <head> para definir o style local com CSS
    ?>
    
</div>
</body>
</html>