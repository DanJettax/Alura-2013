<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;

use Alura\Banco\Modelo\Endereco;



require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new \Alura\Banco\Modelo\CPF('123.456.789-54'),
        'Daniel Dacol',
        new Endereco('Ipeuna','altos', 'carlos', '1148')
    )
);

try {
    $contaCorrente->deposita(100);
} catch (InvalidArgumentException $exception){
    echo "Valor a depositar precisa ser positivo!";
}
