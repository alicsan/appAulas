<?php 

class CategoriaAula extends CI_Controller{
    
    public function c(){
       frame($this,'categoriaAula/c');
    }
    
    
    public function cPost(){
        $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $this->load->model('categoriaAula_model');
        
        try{
            $this->categoriaAula_model->crearCategoria($nombre);
            redirect(base_url().'categoriaAula/r');
        }catch(Exception $e){
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='categoriaAula/c';
            redirect(base_url().'msg');
        }
    }
    
    public function r(){
        $this->load->model('categoriaAula_model');
        $data['categorias']=$this->categoriaAula_model->getCategoriasAula();
        frame($this,'categoriaAula/r',$data);
    }
    
    public function d(){
        $user=$_SESSION['usuario'];
        if($user->rol=='admin'){
        $id=isset($_POST['id']) ? $_POST['id'] : null;
        try{
            $this->load->model('categoriaAula_model');
            $this->categoriaAula_model->borrarCategoriaAula($id);
            redirect(base_url().'categoriaAula/r');
        }catch(Exception $e){
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='categoriaAula/r';
            redirect(base_url().'msg');
        }
        }else{
            $_SESSION['_msg']['texto']='Rol inadecuado';
            $_SESSION['_msg']['uri']='categoriaAula/r';
            redirect(base_url().'msg');
        }
    }
}

?>