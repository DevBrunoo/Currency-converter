<?php

namespace App\Awesome;

class Economia{

   /**
    * Url base da API de Economia
    * @var string
    */
    const BASE_URL = 'https://economia.awesomeapi.com.br/last/USD-BRL,EUR-BRL,BTC-BRL';  /* Essa e uma constate que serve para guarda a informacao da URL base da nossa URL  */
    
    /**
     * Metodo responsavel por consutar a cotacao atual das moedas
     *
     * @param string $moedaA
     * @param string $moedaB
     * @param string $moedac
     * @return array /* Aqui e para converter aquele json em um array 
     */ /* Esse metodo consultar cotacao vai apenas configurar a API do awesome */
    public function consultarCotacao($moedaA,$moedaB, $moedaC){
        return $this->get('/last/'. $moedaA.'-'.$moedaB.','.$moedaC);
    }
    /**
     * Metodo responsavel por executar a reqisicao na API de Economia do Awesome
     *
     * @param string $resouce
     * @return array O retorno tem que ser um array pois ja combinamos de retornar um array acima
     */
    public function get($resource){
    //EDPOINT "E a mesclagem da nossa url basica com nosso recurso aqui
    $endpoint = self::BASE_URL.$resource;
    echo "<pre>";
    print_r($endpoint);
    echo "</pre>";
    }
}

/* $this->get pois estou chamando da mesma instacia  */
