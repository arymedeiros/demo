<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colaboradores_model extends FT_Model{

    public function __construct(){
        parent::__construct("Colaboradores","colaboradores");
    }
public function metadata($column = null){ $metadata = json_decode('{"id":{"title":"ID","type":"number","browse":"0","required":"1","selectbox":"0"},"nome":{"title":"Nome","type":"caracter","browse":"1","required":"1","options":{"min_length":"0","max_length":"255","mask":""},"selectbox":"1"},"nascimento":{"title":"Data de Nascimento","type":"date","browse":"1","required":"1","selectbox":"1"},"cep":{"title":"CEP","type":"caracter","browse":"1","required":"1","options":{"min_length":"0","max_length":"255","mask":"00000-000"},"selectbox":"1"},"endereco":{"title":"Endere\\u00e7o","type":"caracter","browse":"1","required":"0","selectbox":"0"},"numero":{"title":"N\\u00famero","type":"number","browse":"1","required":"0","options":{"decimals":"0","is_currency":"0"},"selectbox":"0"},"complemento":{"title":"Complemento","type":"caracter","browse":"1","required":"0","selectbox":"0"},"bairro":{"title":"Bairro","type":"caracter","browse":"1","required":"0","selectbox":"1"},"cidade":{"title":"Cidade","type":"caracter","browse":"1","required":"0","selectbox":"1","options":{"opt_values":[{"text":"Sim","value":"S"},{"text":"N\\u00e3o","value":"N"},{"text":"Talvez quem sabe?","value":"q"}]}},"estado":{"title":"Estado","type":"caracter","browse":"1","required":"0","selectbox":"1","options":{"opt_values":[{"text":"Sim","value":"S"},{"text":"N\\u00e3o","value":"N"},{"text":"Talvez QUEM SABE?","value":"Q"}]}},"id_cliente":{"title":"Cliente","type":"selectbox","browse":"1","required":"0","selectbox":"0","options":{"sb_model":"erp\\\\Clientes_model","sb_text":"SA1_Desc","sb_value":"SA1_ID","sb_remote":"1"}},"ativo":{"title":"Ativo","type":"options","browse":"1","required":"0","selectbox":"0","options":{"opt_values":[{"text":"Sim","value":"S"},{"text":"N\\u00e3o","value":"N"}]}}}',true);
 if ( isset($column) )
 return (  isset($metadata[$column]) ? $metadata[$column] : null );
return $metadata;
}
  }
