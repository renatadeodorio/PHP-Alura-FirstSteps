<?php

$idade = 10;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 acompanhado.";

if ($idade >= 18) {
  echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
  echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";
} else {
  echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";

//Quando temos várias condições no código, podemos utilizar, além do if e do else, uma outra estrutura chamada else if.