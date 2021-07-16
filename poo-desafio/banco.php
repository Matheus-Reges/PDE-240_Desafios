<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';


$primeiroCpf = new Cpf('123.456.789-10');
$primeiraConta = new Conta(new Titular($primeiroCpf, 'Vinicius Dias'));
$primeiraConta->deposita(500);
$primeiraConta->saca(300); 

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$segundoCpf =  new Cpf('698.549.548-10');
$segundaConta = new Conta(new Titular($segundoCpf, 'Patricia'));
var_dump($segundaConta);

$terceiroCpf = new Cpf('123');
$outra = new Conta(new Titular($terceiroCpf, 'Abcdefg'));
echo  Conta::recuperaNumeroDeContas() . PHP_EOL;
