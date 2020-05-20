<?php
class Aula extends CI_Controller{
    
    public function c(){
        $this->load->model('categoriaAula_model');
        $data['categorias']=$this->categoriaAula_model->getCategoriasAula();
        frame($this,'aula/c',$data);
    }
    
}

?>