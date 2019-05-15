#### Instalation

```sh
composer require guilherme-fagundes/consultacnpj
```

Instancie a classe e informer o parametro pelo metodo setCNPJ()
Para obter os resultados, passe os valores respectivos no local adequado


```sh
<?php

require './vendor/autoload.php';

$cnpj = new \src\Consultacnpj\Consulta_cnpj();
$cnpj->setCnpj($cnpj);

```






