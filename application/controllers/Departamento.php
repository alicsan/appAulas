<?php 

class Departamento extends CI_Controller{
    
    public function create(){
        frame($this,'departamento/c');
    }
    
    public function createPost(){
    $this->load->model('departamento_model');
    $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : null;
    
    try{
        $this->departamento_model->crearDepartamento($nombre);
        redirect(base_url().'departamento/r');
    }catch(Exception $e){
        session_start();
        $_SESSION['_msg']['texto']=$e->getMessage();
        $_SESSION['_msg']['uri']='departamento/c';
        redirect(base_url().'msg');
    }
    }
    
    public function r(){
        $this->load->model('departamento_model');
        $data['departamentos']=$this->departamento_model->getDepartamentos();
        frame($this,'departamento/r',$data);
    }
    
    public function delete(){
        $id=isset($_POST['id']) ? $_POST['id'] : null;
        try{
            $this->load->model('departamento_model');
            $this->departamento_model->borrarDepartamento($id);
            redirect(base_url().'departamento/r');
        }catch(Exception $e){
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='departamento/r';
            redirect(base_url().'msg');
        }
    }
    
    
    
    
    
    
}

?>