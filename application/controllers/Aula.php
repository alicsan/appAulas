<?php
class Aula extends CI_Controller{
    
    public function c(){
        $this->load->model('categoriaAula_model');
        $data['categorias']=$this->categoriaAula_model->getCategoriasAula();
        frame($this,'aula/c',$data);
    }
    
    
    public function cPost(){
        $this->load->model('aula_model');
        
        $nombre=isset($_POST['naula']) ? $_POST['naula'] : null;
        $capacidad=isset($_POST['capacidad'] ) ? $_POST['capacidad'] : null;
        $comentarios=isset($_POST['comentarios'] ) ? $_POST['comentarios'] : null;
        $categoriaAula=isset($_POST['idCat']) ? $_POST['idCat'] : null;
        
        try{
            $this->aula_model->crearAula($nombre,$capacidad,$comentarios,$categoriaAula);
            redirect(base_url().'aula/r');
        }catch(Exception $e){
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='aula/c';
            redirect(base_url().'msg');
        }
    }
    
        public function r(){
            $id=isset($_POST['id']) ? $_POST['id'] : null;
            $this->load->model('aula_model');
            $data['uid']=$id;
            $data['aulas']=$this->aula_model->getAulas();
            frame($this,'aula/r',$data);
        }
        
        
        public function d(){
            $id=isset($_POST['id']) ? $_POST['id'] : null;
            try{
                $this->load->model('aula_model');
                $this->aula_model->borrarAula($id);
                redirect(base_url().'aula/r');
            }catch(Exception $e){
                $_SESSION['_msg']['texto']=$e->getMessage();
                $_SESSION['_msg']['uri']='aula/r';
                redirect(base_url().'msg');
            }            
        }
        
        public function u(){
            $id=isset($_POST['id']) ? $_POST['id'] : null;
            $this->load->model('aula_model');
            $data['aula']=$this->aula_model->getAulaById($id);
            frame($this,"aula/u",$data);
        }
        
    }


?>