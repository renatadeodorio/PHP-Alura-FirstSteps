<?php

$peso = 1;
$altura = 1.75;
$imc = $peso / ($altura ** 2) ;

if ($imc >= 18.5 && $imc <= 24.9) {
  echo " Você tem $imc. Seu peso esta normal";
} else if ($imc>= 25.0 && $imc <= 29.9) {
  echo "Você tem $imc, vc esta pré-obeso.";
} else if ($imc>= 30.0 && $imc <=34.9){
  echo "Você tem $imc . Você está obeso Grau 1";
} else if ($imc>= 35.0 && $imc <=39.9){
  echo "Você tem $imc . Você está obeso Grau 2";
} else {
  echo "IMC fora da classificação";
}







//Entre 18.5 e 24.9 - Peso normal ;
//Entre 25.0 e 29.9 - Pré-obesidade ;
//Entre 30.0 e 34.9 - Obesidade Grau 1 
//Entre 35.0 e 39.9 - Obesidade Grau 2 ;
