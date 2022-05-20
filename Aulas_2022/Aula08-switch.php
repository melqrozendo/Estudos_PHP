<!--Aula 10: estrutura condicionais SWITCH em PHP

Condições de multiplos casos
-codigo de sintaxe:
switch($op){                #Escolha $op
    case 1:                 #caso1:
        echo "A";           #escreva A
        break;
    case 2:                 #caso2:
        echo "B";           #escreva B
        break;
    default:                #outrocaso
        echo "Erro";        #escreva Erro
}

Condições de multiplos casos com multiplos valores
-codigo de sintaxe:
switch($op){                #Escolha $op
    case 1:                 #caso1:
    case 2:                 #caso2:
    case 3:                 #caso3:
        echo "Tipo 1";      #escreva Tipo 1
        break;
    case 4:                 #caso4:
    case 5:                 #caso5:
        echo "Tipo 2";      #escreva Tipo 2
        break;
    default:                #outrocaso
        echo "Tipo 3";      #escreva Tipo 3
}

-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Estrutura Condicional SWITCH em PHP</title>
    <style>
        span.foco{
            color: red;
        }
    </style>
</head>
<body>
<div>
    <form method="get" action="Aula08-switch.php">
        Número: <input type="number" name="num"/><br/>
        <fieldset><legend>Operações</legend>
            <input type="radio" name="oper" id="dobro" value="1" checked/>
            <label for="dobro">Dobro</label>
            <input type="radio" name="oper" id="cubo" value="2"/>
            <label for="cubo">Cubo</label>
            <input type="radio" name="oper" id="raiz" value="3"/>
            <label for="raiz">Raiz Quadrada</label>
        </fieldset>
        <input type="submit" value="Calcular"/>

    </form>
    <?php
        echo "Desafio 01 - Ler um numero e qual operação realizar: dobro, cubo ou raiz quadrada:";
        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;
        switch($o){
            case 1: 
                $r = $n * 2;
                break;
            case 2:
                $r = pow($n,3);
                break;
            case 3;
                $r = sqrt($n); 
        }
        echo "<br/>O reultado da operação solicitada foi <span class='foco'>$r</span>";
        echo "<br/>";
    ?>
    <br/>
    <form method="get" action="Aula08-switch.php">
        Dia da Semana:<input type="number" name="dia" min="2" max="8" required/>
        <input type="submit" class="botao" value="Analisar"/>
    </form>
    <?php
        echo "<br/>Desafio 02 - Ler o dia da semana(2-8) e mostrar se precisa ou não ir pra escola:";
        $dia = isset($_GET["dia"]) ? $_GET["dia"] : 0;
        switch($dia){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "<br/>Dia de Aula";
                break;
            case 7:
            case 8:
                echo "<br/>Dia de Descanso";
                break;
            default:
                echo "<br/>Dia da semana inválido";
        }
        echo "<br/>";
    ?>
    <br/>
    <form method="get" action="Aula08-switch.php">
        Estado:
        <select name="est" id="iest">
            <option value="1">Amazônia</option>
            <option value="2">Pernambuco</option>
            <option value="3">Mato Grosso</option>
            <option value="4">São Paulo</option>
            <option value="5">Rio Grande do Sul</option>
        </select>
        <input type="submit" value="Verificar"/>
    </form>
    <?php
        echo "<br/>Desafio 03 - Determinar a região a qual o estado pertence:";
        $estado = isset($_GET["est"]) ? $_GET["est"] : 0;
        switch($estado){
            case 1:
                $regiao = "<br/>REGIÃO NORTE";
                break;
            case 2:
                $regiao = "<br/>REGIÃO NORDESTE";
                break;
            case 3:
                $regiao = "<br/>REGIÃO CENTRO-OESTE";
                break;
            case 4:
                $regiao = "<br/>REGIÃO SUDESTE";
                break;
            case 5:
                $regiao = "<br/>REGIÃO SUL";
                break;
            default:
                $regiao = "<br/>REGIÃO INVÁLIDA";
        }
        echo "Você selecionou um Estado da <span class='foco'>$regiao</span>";
    ?>
</div>
</body>
</html>