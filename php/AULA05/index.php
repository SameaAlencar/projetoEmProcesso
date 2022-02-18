<?php

  require_once('modulo/calculos.php');
  require_once('modulo/config.php');

//Declaração de variaveis
$numTabuada = (int) 0;
$numContador = (int) 0;
$resultado = (string) null;

//Validação para tratar se o botão foi clicado
if(isset($_POST["btnCalc"]))
{   
    //Recebendo dados utilizando o POST do formulario
    $numTabuada = $_POST ["txtv1"];
    $numContador = $_POST ["txtv2"];
    $resultado = "";

    if($_POST["txtv1"] == "" || $_POST["txtv2"] == "")
        echo (ERRO_MSG_CAIXA_VAZIA_TABUADA);
    else
    {
        if(!is_numeric($numTabuada) || !is_numeric($numContador))
            echo (ERRO_MSG_ENTRADA_TABUADA);
        else
        {
            if($numContador == 0 || $numTabuada == 0)
                echo (ERRO_MSG_TABUADA_ZERO);
            else {
                $resultado = X($numTabuada, $numContador);
            }
        }
    }
    
}



?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tabuada</title>
</head>
<body>
    <div id="conteudo">
        <div id="titulo">
            Tabuada
        </div>

        <div id="form">
            <form name= "frmTabuada" method="POST" action="index.php">
            
                Tabuada: <input type="text" name="txtv1" value="" > <br>
                Contador: <input type="text" name="txtv2" value="" > <br>

                <div id="resultado">
                </div>
                <div id="botao">
                    <input type="submit" name="btnCalc" value="Calcular">
                </div>


               
            </form>
            <div class = "resultado">
                <div id ="segundo-resultado">
                    <p> <?php echo($resultado);?></p>

                </div>
            </div>
        </div>

    </div>
    
</body>
</html>