<?php

namespace Sandr\DioCep;

class Search{
    // URL da API ViaCEP que será utilizada para buscar os endereços a partir do CEP
    private $url = "https://viacep.com.br/ws/";
    // Método que busca o endereço a partir do CEP
    public function getAddressFromZipcode(string $zipCode): array{   
        // Remove caracteres especiais do CEP para garantir que a requisição na API do ViaCEP funcione
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);
        // Faz a requisição na API do ViaCEP passando o CEP como parâmetro
        $get = file_get_contents($this->url . $zipCode . "/json");
        // Retorna o resultado da requisição em formato de array
        return (array) json_decode($get);
    }

  
}