<?php

    require_once('modulo/calculos.php');
    require_once('modulo/config.php');

$nInicial (int) = 0;
$nFinal (int) = 0;
$nPar (int) = 0;
$nImpar (int) = 0;

//Validação para tratar se o botão foi clicado
if(isset($_POST["btnCalc"])){

    //Recebendo dados utilizando o POST do formulario
    $nInicial = $_POST ["numeroInicial"];
    $nFinal = $_POST ["numeroFinal"];
    
    if ($nInicial == $nFinal){
    echo (ERRO_MSG_IGUAL);
    }else{
        if ($nInicial > $nFinal){
            echo (ERRO_MSG_MAIOR);
        }else{
            if ($nInicial == null || $nFinal == null) {
                    echo (ERRO_MSG_VAZIA);
        }else{
            $nPar = par($nInicial, $nFinal);
            $nImpar  = impar($nInicial, $nFinal);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Par ou Ímpar</title>
</head>
<body>
    <div id = "conteudo">
        <div id="titulo">
            Par ou Ímpar
        </div>
        <div id="form">
            <form action="frmParImpar" method="post" action="parouimpar.php">
                <div class="caixa">
                    <label>Número inicial</label>
                    <select name="numeroInicial" class="select_parouimpar">
                        <option value="">Selecione um número</option>
                        <?php
                                $numeroInicial = 0;
                                while ($numeroInicial <= 500) {
                                    echo '<option value="'.$numeroInicial.'">'.$numeroInicial.'</option>';
                                    $numeroInicial++;
                                }
                        ?> 
                    </select>
                </div>
                <div class="caixa">
                    <label>Número final</label>
                    <select name="numeroFinal" class="select_parouimpar">
                        <option value="">Selecione um número</option>
                        <?php
                                $numeroFinal= 0;
                                while ($numeroFinal <= 1000) {
                                    echo '<option value="'.$numeroFinal.'">'.$numeroFinal.'</option>';
                                    $numeroFinal++;
                                }
                        ?> 
                        
                       
                    </select>

                </div>

                <input type="submit" name="btnCalc" value ="Calcular">
                
                <div class="resultados">
                    <div id="resultado_par">
                        <p>Par</p>
                    </div>
                    <div id="resultado_impar">
                        <p>Ímpar</p>
                    </div>

                </div>
            </form>
        </div>

    </div>
</body>
</html>