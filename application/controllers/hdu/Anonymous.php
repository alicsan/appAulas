<?php
class Anonymous extends CI_Controller{
    public function registrar(){
        $this->load->model('departamento_model');
        $data['departamentos']=$this->departamento_model->getDepartamentos();
        frame($this,'usuario/c',$data);
            
    }
        
        public function registrarPost(){
            $this->load->model('usuario_model');
            
            $nombre= isset($_POST['nombre']) ? $_POST['nombre'] : null;
            $username= isset($_POST['username']) ? $_POST['username'] : null;
            $pwd=isset($_POST['pwd']) ? $_POST['pwd'] : null;
            $idDepar=isset($_POST['idDepar']) ? $_POST['idDepar'] : null;
            
            
            try{
                $this->usuario_model->crearUsuario($nombre,$username,$pwd,$idDepar);
                session_start();
                $_SESSION['_msg']['texto']="Usuario registrado con éxito.";
               // $_SESSION['_msg']['uri']='';
                redirect(base_url() . 'msg');
            }catch(Exception $e){
                session_start();
                $_SESSION['_msg']=[];
                $_SESSION['_msg']['texto']=$e->getMessage();
                $_SESSION['_msg']['uri']='';
                redirect(base_url().'msg');
            }
        }
    
       
    public function login(){
        frame($this,'_hdu/anonymous/login');
    }
    
    public function loginPost(){
        $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $pwd=isset($_POST['pwd']) ? $_POST['pwd'] : null;
        $this->load->model('usuario_model');
       
        try{
           $usuario=$this->usuario_model->verificarLogin($nombre,$pwd);
           if(session_status() == PHP_SESSION_NONE){
               session_start();
           }
            
            $_SESSION['usuario']=$usuario;
            frame($this,'/_hdu/user/menu');
        }catch(Exception $e){
            session_start();
            $_SESSION['_msg']=[];
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='';
            redirect(base_url().'msg');
        }
    }
    
  
    
    
    
}


?>