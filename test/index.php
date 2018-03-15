<?php

require '../vendor/autoload.php';

$cnpj = new \src\Consultacnpj\Consulta_cnpj();
$cnpj->setCnpj('10548698000138');

var_dump($cnpj->callback());

echo '<hr>';





?>

