<?php
class Anonymous extends CI_Controller{
  
    
    
    public function registrar(){
        $this->load->model('departamento_model');
        $data['departamentos']=$this->departamento_model->getDepartamentos();
        frame($this,'_hdu/anonymous/registrar',$data);
            
    }
        
        public function registrarPost(){
            $this->load->model('anonymous_model');
            
            $nombre= isset($_POST['nombre']) ? $_POST['nombre'] : null;
            $username= isset($_POST['username']) ? $_POST['username'] : null;
            $pwd=isset($_POST['pwd']) ? $_POST['pwd'] : null;
            $idDepar=isset($_POST['idDepar']) ? $_POST['idDepar'] : null;
            try{
                $this->anonymous_model->registrarUsuario($nombre,$username,$pwd,$idDepar);
              $this-> PRG('Usuario registrado con éxito.','/','success');
            }catch(Exception $e){
               $this->PRG($e->getMessage(),'/','danger');
            }
        }
    
       
    public function login(){
        frame($this,'_hdu/anonymous/login');
    }
    
    public function loginPost(){
        $username=isset($_POST['username']) ? $_POST['username'] : null;
        $pwd=isset($_POST['pwd']) ? $_POST['pwd'] : null;
       
        if($username == null && $pwd == null){
            $this->PRG('Debes rellenar todos los datos.','/','warning');
        }
        $this->load->model('anonymous_model');
        
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        
        try{
            
          $usuario=$this->anonymous_model->verificarLogin($username,$pwd);
                      redirect(base_url().'hdu/user/homepage');
        }catch(Exception $e){
          $this->PRG($e->getMessage(),'/','danger');
        }
    }

    public function init(){
        $this->load->model('anonymous_model');
        $this->anonymous_model->init();
        frame($this,'_hdu/anonymous/init');
    }
    
    
    public function logout(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        
        if(isset($_SESSION['usuario'])){
            unset ($_SESSION['usuario']);
            unset ($_SESSION['rol']);
            redirect(base_url(),'warning');
        }else{
            $this->PRG('Debes haber iniciado sesión antes.', '/','warning');
            }
    }
    
    public function PRG($mensaje,$uri,$severity){
        
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['_msg']['texto'] = $mensaje;
        $_SESSION['_msg']['uri'] = $uri;
        $_SESSION['_msg']['severity'] = $severity;
        redirect(base_url() . 'msg');
    }
    
    
}


?>