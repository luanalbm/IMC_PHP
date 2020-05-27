<?php
// Receber inputs:
    $nome = $_GET['nome_pessoa'];
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];

    $imc = $peso / ($altura*$altura);

    if ($imc <= 1){
            echo "Entrada invalida";
        }elseif($imc <= 18.5){
            echo "Meu nome é ".$nome.", meu IMC é ".$imc." e estou Abaixo do Peso";
        }elseif($imc <= 24.99){
            echo "Meu nome é ".$nome.", meu IMC é ".$imc." e estou com Peso Normal"; 
        }elseif($imc <= 29.99){
            echo "Meu nome é ".$nome.", meu IMC é ".$imc." e estou com Sobrepeso"; 
        }elseif($imc <= 34.99){
            echo "Meu nome é ".$nome.", meu IMC é ".$imc." e estou com Obesidade Grau 1"; 
        }elseif($imc <=39.99){
            echo "Meu nome é ".$nome.", meu IMC é ".$imc." e estou com Obesidade Grau 2"; 
        }elseif($imc >= 40){
            echo "Meu nome é ".$nome.", meu IMC é ".$imc." e estou com Obesidade Grau 3";
                    }
?>
