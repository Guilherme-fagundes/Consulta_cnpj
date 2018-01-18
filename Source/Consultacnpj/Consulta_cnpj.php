<?php

namespace src\Consultacnpj;

/**
  <p>##### CLASSE RESPONSAVEL POR REALIZAR A CONSULTA CADASTRAL DE CNPJ NA RECEITA FEDERAL ########</p>
 *
 * @copyright (c) 2018, GUILHERME K. FAGUNDES
 * 
 */
class Consulta_cnpj {

    private $urlReceita;
    private $param;
    private $cnpj;
    

    public function __construct() {
        $this->urlReceita = "http://www.receitaws.com.br/v1/cnpj/";
    }

    /**

     * 
     * @param string $cnpj
     * <b>Informe um valor do tipo string numerica</b>
     * 
     */
    public function setCnpj(string $cnpj) {
        $this->cnpj = $cnpj;
        $this->param = $this->urlReceita. $this->cnpj;
    }

    /**
     * @return callback
     */
    public function callback() {
        return $this->setUrl();
    }

    private function setUrl() {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->param);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        return $retorno = json_decode(curl_exec($ch));


        curl_close($ch);
    }

}
