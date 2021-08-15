<?php

require __DIR__ . './vendor/autoload.php';

use App\Webservice\ViaCep;

if(!isset($argv[1])) {
  die("CEP não definido\n");
}

$dadosCep = ViaCep::consultarCep($argv[1]);

print_r($dadosCep);