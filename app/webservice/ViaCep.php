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
    $curl = curl_init();

    curl_setopt_array($curl, [
      CURLOPT_URL => 'https://viacep.com.br/ws/' . $cep . '/json/',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_CUSTOMREQUEST => 'GET'
    ]);

    $response = curl_exec($curl);

    curl_close($curl);

    $arr = json_decode($response, true);

    return isset($arr['cep']) ? $arr : null;
    //print_r($response) . '/n';
  }
}

