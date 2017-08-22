<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends FT_DataEntry {

    public function __construct(){
        parent::__construct();
        
        $this->setMainModel("grupos_model");
        $this->setBreadCrumb("Grupos");
        $this->addInsertButton("Novo Grupo","modelos/dataentry/master");
        $this->addUpdateAction("Editar Grupo","modelos/dataentry/master");
        $this->addDeleteAction("Deseja excluir o Grupo?");
        
        $editor = new FT_ItensEditor($this,"grupos_colaboradores_model","id_grupo");
        $editor->addInsertButton("Novo colaborador", "modelos/dataentry/detail");
        $editor->addUpdateAction("Alterar colaborador", "modelos/dataentry/detail");
        $this->addItensEditor("colaboradores",$editor);
        
        $this->addLayoutEditor("Grupo","modelos/dataentry/master");
        $this->addLayoutEditor("Colaboradores","modelos/dataentry/detail");
        
        
    }
    
    public function valid(&$post,&$message){
        return true;
    }
    

}