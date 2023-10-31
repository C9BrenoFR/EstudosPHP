<?php

$idade = 18;

echo "Você só pode entrar se for maior de 18 anos ou";
echo "A partir de 16 anos, acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos" . PHP_EOL;
    echo "Pode entrar";
}else {
    echo "Você só tem $idade. Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";