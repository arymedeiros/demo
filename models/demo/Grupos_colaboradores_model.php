<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupos_colaboradores_model extends FT_Model{

    public function __construct(){
        parent::__construct("Grupos x Colaboradores","grupos_colaboradores");
    }
public function metadata($column = null){ $metadata = json_decode('{"id":{"title":"ID","type":"number","browse":"0","required":"0","selectbox":"0"},"id_grupo":{"title":"ID Grupo","type":"number","browse":"0","required":"0","selectbox":"0","options":{"decimals":"0","is_currency":"0"}},"id_colaborador":{"title":"Colaborador","type":"selectbox","browse":"1","required":"1","selectbox":"1","options":{"sb_model":"demo\\\\Colaboradores_model","sb_text":"nome","sb_value":"id", "sb_remote":"0"}},"ultima_acao":{"title":"\\u00daltima A\\u00e7\\u00e3o","type":"date","browse":"1","required":"0","selectbox":"0"},"ultima_contribuicao":{"title":"Ultima Contribui\\u00e7\\u00e3o","type":"number","browse":"1","required":"0","selectbox":"0","options":{"decimals":"2","is_currency":"1"}}}',true);
 if ( isset($column) )
 return (  isset($metadata[$column]) ? $metadata[$column] : null );
return $metadata;
}
  }
