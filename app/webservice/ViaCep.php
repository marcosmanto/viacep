<?php

namespace App\Webservice;

class ViaCep {
  /**
   * Consulta um CEP no ViaCEP
   * @param string $cep
   * @return array
   */
  public static function consultarCep($cep)
  {
    echo '<pre>';
    print_r( $cep );
    echo '</pre>';
    die();
  }
}

