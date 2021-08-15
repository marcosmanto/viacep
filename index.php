<?php

require __DIR__ . './vendor/autoload.php';

use App\Webservice\ViaCep;

$dadosCep = ViaCep::consultarCep("01001000");