<?php

$idade = 21;

echo 'Olá mundo! Minha idade é ' . $idade . ' anos.'; // . serve para concatenar


echo 'Olá! Meu nome é ' . $nome . '. Meu e-mail é ' . $email . '. Tenho ' . $idade . ' anos '; 
// Mesmo em uma frase tão pequena, não parece interessante concatenar as variáveis dessa forma. Seria ideal se tivéssemos uma forma de passá-las diretamente no texto...e isso é possível justamente com as aspas duplas

$idade = 21;

echo "Olá mundo! Minha idade é $idade anos."; //Dessa forma, o PHP irá reconhecer a variável iniciada pelo $ e, após a leitura dela, continuará interpretando o texto normalmente.