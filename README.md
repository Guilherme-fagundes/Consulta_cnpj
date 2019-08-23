[![PHP from Packagist](https://img.shields.io/packagist/php-v/Guilherme-fagundes/consultacnpj.svg?style=flat-square)](https://packagist.org/packages/Guilherme-fagundes/consultacnpj)
[![Latest Stable Version](https://poser.pugx.org/guilherme-fagundes/consultacnpj/v/stable)](https://packagist.org/packages/guilherme-fagundes/consultacnpj)
[![Total Downloads](https://poser.pugx.org/guilherme-fagundes/consultacnpj/downloads)](https://packagist.org/packages/guilherme-fagundes/consultacnpj)
[![License](https://poser.pugx.org/guilherme-fagundes/consultacnpj/license)](https://packagist.org/packages/guilherme-fagundes/consultacnpj)
[![Build](https://img.shields.io/scrutinizer/build/g/Guilherme-fagundes/Consulta_cnpj.svg?style=flat-square)](https://scrutinizer-ci.com/g/Guilherme-fagundes/consultacnpj)
[![Quality Score](https://img.shields.io/scrutinizer/g/Guilherme-fagundes/Consulta_cnpj.svg?style=flat-square)](https://scrutinizer-ci.com/g/Guilherme-fagundes/Consulta_cnpj)
#### Instalation

```sh
composer require guilherme-fagundes/consultacnpj
```

Instancie a classe e informer o parametro pelo metodo setCNPJ()
Para obter os resultados, passe os valores respectivos no local adequado


```sh
<?php

require './vendor/autoload.php';

$cnpj = new \src\Consultacnpj\Consulta_cnpj(true); // true = https || false = http
$cnpj->setCnpj($cnpj);

```
[Definição dos tipos de erros](ERROS.md)<br>
Está é uma classe mantida por Guilherme K. Fagundes




