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
    private function callback() {
        return $this->setUrl();
    }

    private function setUrl() {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->param);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        return $retorno = json_decode(curl_exec($ch));


        curl_close($ch);
    }
    
    public function dataSituacao()
    {
        return $this->callback()->data_situacao;
    }
    public function complemento()
    {
        return $this->callback()->complemento;
    }
    public function nome()
    {
        return $this->callback()->nome;
    }
    public function uf()
    {
        return $this->callback()->uf;
    }
    public function telefone()
    {
        return $this->callback()->telefone;
    }
    public function email()
    {
        return $this->callback()->email;
    }
    public function situacao()
    {
        return $this->callback()->situacao;
    }
    public function bairro()
    {
        return $this->callback()->bairro;
    }
    public function logradouro()
    {
        return $this->callback()->logradouro;
    }
    public function numero()
    {
        return $this->callback()->numero;
    }
    public function cep()
    {
        return $this->callback()->cep;
    }
    public function municipio()
    {
        return $this->callback()->municipio;
    }
    public function abertura()
    {
        return $this->callback()->abertura;
    }
    public function naturezaJuridica()
    {
        return $this->callback()->natureza_juridica;
    }
    public function fantasia()
    {
        return $this->callback()->fantasia;
    }
    public function cnpj()
    {
        return $this->callback()->cnpj;
    }
    public function ultimaAtualizacao()
    {
        return $this->callback()->ultima_atualizacao;
    }
    public function status()
    {
        return $this->callback()->status;
    }
    public function tipo()
    {
        return $this->callback()->tipo;
    }
    public function efr()
    {
        return $this->callback()->efr;
    }
    public function motivoSituacao()
    {
        return $this->callback()->motivo_situacao;
    }
    public function situacaoEspecial()
    {
        return $this->callback()->situacao_especial;
    }
    public function dataSituacaoEspecial()
    {
        return $this->callback()->data_situacao_especial;
    }
    public function capitalSocial()
    {
        return $this->callback()->capital_social;
    }
    public function atividadePrincipal()
    {
        return $this->callback()->atividade_principal;
    }
    public function qsa()
    {
        return $this->callback()->qsa;
    }
    public function atividadesSecundarias()
    {
        return $this->callback()->atividades_secundarias;
    }

}
