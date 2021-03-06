<?php 

class Material extends CI_Controller{
    public function c(){
        frame($this,'material/c');
    }
    
    public function cPost(){
        $nombre=isset($_POST['nombre']) ? $_POST['nombre'] :null;
        $observaciones=isset($_POST['observaciones']) ? $_POST['observaciones'] :null;
        $this->load->model('material_model');
        
        try{
            $this->material_model->registrarMaterial($nombre,$observaciones);
            redirect(base_url().'material/r');
        }catch(Exception $e){
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='categoriaAula/c';
            redirect(base_url().'msg');
        }
    }
    
    public function r(){
        $this->load->model('material_model');
        $data['materiales']=$this->material_model->getMateriales();
        $id=isset($_POST['uid']) ? $_POST['uid'] : 0;
        $data['uid']=$id;
        frame($this,'material/r',$data);
    }
    
    public function u(){
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('material_model');
        $data['material']=$this->material_model->getMaterialById($id);
        frame($this,'material/u',$data);
    }
    
    public function uPost(){
        $this->load->model('material_model');
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $nombre= isset ($_POST['nombre']) ? $_POST['nombre'] : null;
        $observaciones = isset($_POST['observaciones']) ? $_POST['observaciones'] : '--';

        try{
            $this->material_model->updateMaterial($id,$nombre,$observaciones);
            redirect(base_url().'material/r');
        }catch(Exception $e){
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='persona/c';
            redirect(base_url().'msg');
        }
        
    }
    
    public function d(){
        $id=isset($_POST['id']) ? $_POST['id'] : null;
          try{
            $this->load->model('material_model');
            $this->material_model->dMaterial($id);
            redirect(base_url().'material/r');
        }catch(Exception $e){
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='persona/c';
            redirect(base_url().'msg');
        }
      
    }
}

?>