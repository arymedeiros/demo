<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupos_model extends FT_Model{

    public function __construct(){
        parent::__construct("Grupos de Colaboradores","grupos");
    }
public function metadata($column = null){ $metadata = json_decode('{"id":{"title":"ID","type":"number","browse":"0","required":"0","selectbox":"0"},"nome":{"title":"Nome","type":"caracter","browse":"1","required":"1","selectbox":"1"},"id_lider":{"title":"Lider","type":"selectbox","browse":"1","required":"1","options":{"sb_model":"demo\\\\Colaboradores_model","sb_text":"nome","sb_value":"id","sb_remote":"0"},"selectbox":"1"}}',true);
 if ( isset($column) )
 return (  isset($metadata[$column]) ? $metadata[$column] : null );
return $metadata;
}
  }
