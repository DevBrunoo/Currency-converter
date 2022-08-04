<?php

require __DIR__.'/vendor/autoload.php';

use \App\Awesome\Economia;

$obEconomia = new Economia;

$dadosCotacao = $obEconomia->consultarCotacao('USD','BRL','EUR');

echo "<pre>";
print_r($dadosCotacao);
echo "</pre>"; exit;

