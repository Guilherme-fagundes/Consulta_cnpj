#### Instalation

```sh
composer require guilherme-fagundes/consultacnpj
```

Instancie a classe e informer o parametro, apos chame o metodo Callback


```sh
<?php

require './vendor/autoload.php';

$cnpj = new \src\Consultacnpj\Consulta_cnpj();
$cnpj->setCnpj($cnpj);

var_dump($cnpj->callback());
```






