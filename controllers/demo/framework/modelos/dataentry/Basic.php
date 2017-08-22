<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic extends FT_DataEntry {

    public function __construct(){
        parent::__construct();
        $this->setMainModel("colaboradores_model");
        $this->setBreadCrumb("Colaboradores");
        $this->addInsertButton("Novo Colaborador","modelos/dataentry/basic");
        $this->addUpdateAction("Editar Colaborador","modelos/dataentry/basic");
        $this->addDeleteAction("Deseja excluir o Colaborador?");
        $this->addPageAction("Executa método em nova página","fa fa-external-link","new_page");
        $this->addWindowAction("Chamando addWindowAction()","Executa método em uma janela","fa fa-window-maximize","new_window");
        $this->addJSAction("Executa função JavaScript","fa fa-code","action_js","modelos/dataentry/basic/script");
        $this->addLayoutEditor("Colaborador","modelos/dataentry/basic");
    }
    
    public function valid(&$post,&$message){
        $this->loadModel("colaboradores_model");
        $options['where'][] = ["field" => "nome", "operator" => "eq", "value" => $post['nome']];
        if ( isset($post['id']) )
            $options['where'][] = ["field" => "id", "operator" => "neq", "value" => $post['id']];
        $record = $this->colaboradores_model->read($options);
        $message = count($record) > 0 ? "Colaborador já cadastrado" : "";
        return count($record) == 0;
    }
 
    public function canDelete($id,&$message){
        $this->loadModel("grupos_colaboradores_model");
        $options['where'] = ["field" => "id_colaborador", "operator" => "eq", "value" => $id ];
        $colaboradores = $this->grupos_colaboradores_model->read($options);
        if ( count($colaboradores) > 0 ){
            $message = "Este colaborador participa de grupos. Não pode ser excluido.";
            return false;
        }
        return true;
    }
    
    
    public function new_page(){
        $id = $this->uri->segment($this->uri->total_segments(), 0);
        $this->pushBreadCrumb("Ação em Nova Página");

        $this->data['id'] = $id;
        $this->data['href'] = $this->getBaseURI();
        $this->data['breadcrumb'] = $this->getBreadCrumb();
        $this->loadView("modelos/dataentry/basic/new_page");
    }
    
    public function new_window(){
        $id = $this->uri->segment($this->uri->total_segments(), 0);

        $this->data['id'] = $id;
        $this->loadViewWindow("modelos/dataentry/basic/new_window");
    }
}