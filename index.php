<?php

require './vendor/autoload.php';

$cnpj = new \src\Consultacnpj\Consulta_cnpj();
$cnpj->setCnpj('07146455000169');

var_dump($cnpj->callback());





?>

