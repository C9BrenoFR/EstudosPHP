<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';
echo PHP_EOL;

$Josue = new Titular(new Cpf('123.456.789-10'),'Josué Dias');
$primeiraConta = new Conta($Josue);
echo $primeiraConta->lerCpfTitular() . PHP_EOL;
echo $primeiraConta->lerNomeTitular() . PHP_EOL;
echo $primeiraConta->lerSaldo() . PHP_EOL;
echo PHP_EOL;

$Eusoj = new Titular(new Cpf('109.876.543-21'),'Éusoj Noites');
$segundaConta = new Conta($Eusoj);
echo $segundaConta->lerCpfTitular() . PHP_EOL;
echo $segundaConta->lerNomeTitular() . PHP_EOL;
echo $segundaConta->lerSaldo() . PHP_EOL;
echo PHP_EOL;

echo 'O banco possui ' . Conta::lerNumerodeContas() . ' contas' .PHP_EOL;



echo PHP_EOL;