<?php
/*******************************************************************************
 * Objetivo: Arquivo responsável por reunir e padronizar todas as variáveis
 *           e constantes que serão utilizadas em todo o projeto 
 * Autor: Samea Alencar
 * Data:04/02/2022 
 * Versão: 1.0
 **********************************************************************************/

 //Constantes do projeto

 //Modo 01 de criar uma constante
 define('ERRO_MSG_CAIXA_VAZIA', '<script> alert("Favor preencher todas as caixas"); </script>');

 //Modo 02 de criar uma constante
 const ERRO_MSG_CARACTER_INVALIDO_TEXTO = '<script> alert ("Não é possível realizar cálculos com dados não numéricos!") </script>';
 const ERRO_MSG_DIVISAO_ZERO = '<script> alert ("Não é possível realizar uma divisão na qual o valor 2 seja igual a 0!");</script>';
 const ERRO_MSG_OPERACAO_INVALIDA = '<script> alert("Favor escolher uma operação válida"); </script>';

 //constante da tabuada
 const ERRO_MSG_CAIXA_VAZIA_TABUADA = '<script>alert("Favor preencher todas as caixas")</script>';
 const ERRO_MSG_TABUADA_ZERO = '<script>alert("Não existe tabuada do 0")</script>';
 const ERRO_MSG_ENTRADA_TABUADA = '<script>alert("Não é possível realizar a conta com dados não numéricos!");</script>';
 
 // contade de par e ímpar
 const ERRO_MSG_IGUAL = '<script>alert("Favor, não inserir números iguais")</script>';
 const ERRO_MSG_MAIOR = '<script>alert("Favor, não inserir o número inicial maior que o final")</script>';
 const ERRO_MSG_VAZIA = '<script>alert("Favor, preencher todas as caixas")</script>';
?>