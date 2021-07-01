<?php

namespace Consultas\Consultacnpj;

/**
 * <p>##### CLASSE RESPONSAVEL POR REALIZAR A CONSULTA CADASTRAL DE CNPJ NA RECEITA FEDERAL ########</p>
 * @package guilherme-fagundes/consultacnpj
 * @copyright (c) 2018, GUILHERME K. FAGUNDES
 *
 */
class Consulta_cnpj implements IConsultacnpj
{

    private $urlReceita;
    private $param;
    private $cnpj;
    private $data;
    private $request;

    public function __construct(bool $security)
    {

        $this->data = $security;
        $this->checkSecurity();
        $this->checkPhpVersion();

    }

    /**
     * @param int $cnpj
     * <b>Informe um valor do tipo int. Apenas numeros</b>
     *
     */
    public function setCnpj(int $cnpj)
    {
        $this->cnpj = $cnpj;
        $this->param = $this->urlReceita . $this->cnpj;
    }


    /**
     * @return mixed
     */
    public function dataSituacao()
    {
        return $this->callback()->data_situacao;
    }

    /**
     * @return mixed
     */
    public function complemento()
    {
        return $this->callback()->complemento;
    }

    /**
     * @return mixed
     */
    public function nome()
    {
        return $this->callback()->nome;
    }

    /**
     * @return mixed
     */
    public function uf()
    {
        return $this->callback()->uf;
    }

    /**
     * @return mixed
     */
    public function telefone()
    {
        return $this->callback()->telefone;
    }

    /**
     * @return mixed
     */
    public function email()
    {
        return $this->callback()->email;
    }

    /**
     * @return mixed
     */
    public function situacao()
    {
        return $this->callback()->situacao;
    }

    /**
     * @return mixed
     */
    public function bairro()
    {
        return $this->callback()->bairro;
    }

    /**
     * @return mixed
     */
    public function logradouro()
    {
        return $this->callback()->logradouro;
    }

    /**
     * @return mixed
     */
    public function numero()
    {
        return $this->callback()->numero;
    }

    /**
     * @return mixed
     */
    public function cep()
    {
        return $this->callback()->cep;
    }

    /**
     * @return mixed
     */
    public function municipio()
    {
        return $this->callback()->municipio;
    }

    /**
     * @return mixed
     */
    public function abertura()
    {
        return $this->callback()->abertura;
    }

    /**
     * @return mixed
     */
    public function naturezaJuridica()
    {
        return $this->callback()->natureza_juridica;
    }

    /**
     * @return mixed
     */
    public function fantasia()
    {
        return $this->callback()->fantasia;
    }

    /**
     * @return mixed
     */
    public function cnpj()
    {
        return $this->callback()->cnpj;
    }

    /**
     * @return mixed
     */
    public function ultimaAtualizacao()
    {
        return $this->callback()->ultima_atualizacao;
    }

    /**
     * @return mixed
     */
    public function status()
    {
        return $this->callback()->status;
    }

    /**
     * @return mixed
     */
    public function tipo()
    {
        return $this->callback()->tipo;
    }

    /**
     * @return mixed
     */
    public function efr()
    {
        return $this->callback()->efr;
    }

    /**
     * @return mixed
     */
    public function motivoSituacao()
    {
        return $this->callback()->motivo_situacao;
    }

    /**
     * @return mixed
     */
    public function situacaoEspecial()
    {
        return $this->callback()->situacao_especial;
    }

    /**
     * @return mixed
     */
    public function dataSituacaoEspecial()
    {
        return $this->callback()->data_situacao_especial;
    }

    /**
     * @return mixed
     */
    public function capitalSocial()
    {
        return $this->callback()->capital_social;
    }

    /**
     * @return array
     */
    public function atividadePrincipal()
    {
        return $this->callback()->atividade_principal;
    }

    /**
     * @return array
     * <p>Retorna o quadro de socios</p>
     */
    public function qsa()
    {
        return $this->callback()->qsa;
    }

    /**
     * @return array
     * <p>Retorna atividades secundárias</p>
     */
    public function atividadesSecundarias()
    {
        return $this->callback()->atividades_secundarias;
    }

##################################################
#################### PRIVATES ####################
##################################################


    /**
     * @return callback
     */
    private function callback()
    {
        return $this->setUrl();
    }

    private function setUrl()
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->param);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        return $retorno = json_decode(curl_exec($ch));
        curl_close($ch);
    }

    private function checkSecurity()
    {
        if ($this->data == true) {
            $this->urlReceita = "https://www.receitaws.com.br/v1/cnpj/";
            if (!extension_loaded('openssl')) {
                trigger_error('Extensão openssl não habilitada', E_USER_WARNING);
            }
            $this->request();


        } else {
            $this->urlReceita = "http://www.receitaws.com.br/v1/cnpj/";
        }
    }


    function checkPhpVersion()
    {
        if (!phpversion() >= '7.0') {
            trigger_error("Sua versão do PHP é inferior a 7.0", E_USER_WARNING);
            die;


        }


    }

    private function request()
    {
        $this->request = filter_input(INPUT_SERVER, 'REQUEST_SCHEME', FILTER_VALIDATE_BOOLEAN);

        if ($this->request != $this->data){
           trigger_error("Requisição inválida", E_USER_ERROR);
           die;

    }

    }


}
