<?php

require_once "vendor/autoload.php";

use Sandr\DioCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('03051000');

print_r($resultado);
?>