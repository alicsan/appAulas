<?php 
session_start();

class Usuario extends CI_Controller{ 
    
    public function registrar(){
        $uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;
        $this->load->model('usuario_model');
        $rolOk=$this->usuario_model->verificarRol($uid);
        if($rolOk){
        $this->load->model('departamento_model');
        $data['departamentos']=$this->departamento_model->getDepartamentos();
        frame($this,'usuario/registrar',$data);
        }
        else{
            $_SESSION['_msg']['texto'] = "Rol inadecuado";
            redirect(base_url() . 'msg');
        }
        
    }
    
    public function registrarPost(){      
        $this->load->model('usuario_model');
        $nombre= isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $apellido=isset($_POST['apellido']) ? $_POST['apellido'] : null;
        $username= isset($_POST['username']) ? $_POST['username'] : null;
        $pwd=isset($_POST['pwd']) ? $_POST['pwd'] : null;
        $idDepar=isset($_POST['idDepar']) ? $_POST['idDepar'] : null;
       
        
        $fotoPerfil=isset($_FILES['fperfil']['name'])? $_FILES['fperfil']['name'] : 'error.jpg';
        $carpeta=base_url().'assets/upload/';
        copy($_FILES['fperfil']['tmp_name'],'-------'.$fotoPerfil);       
       
        
        try{
            $this->usuario_model->registrarUsuario($nombre,$apellido,$username,$pwd,$idDepar,$fotoPerfil);
            redirect(base_url().'usuario/r');
        }catch(Exception $e){
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='usuario/r';
            redirect(base_url().'msg');
        } 
        
    }
    
        public function r(){  
           
            $this->load->model('usuario_model');
            $data['usuarios']=$this->usuario_model->getUsuarios();
            frame($this,'usuario/r',$data);
            
        }
        
        public function d(){
            
            $id=isset($_POST['id']) ? $_POST['id'] : null;
            try{
                $this->load->model('usuario_model');
                $this->usuario_model->borrarUsuario($id);
                redirect(base_url().'usuario/r');
            }catch(Exception $e){
                $_SESSION['_msg']['texto']=$e->getMessage();
                $_SESSION['_msg']['uri']='usuario/r';
                redirect(base_url().'msg');
            }
            
        }
        
        public function u(){
            $this->load->model('departamento_model');
            $this->load->model('usuario_model');
            $id = isset($_POST['uid']) ? $_POST['uid'] : null;
            $data['usuario']=$this->usuario_model->getUserById($id);
            $data['departamentos']=$this->departamento_model->getDepartamentos();
            frame($this,'usuario/u',$data);
        }
        
        public function uPost(){
            $this->load->model('usuario_model');
            
            $id = isset($_POST['id']) ? $_POST['id'] : null;
            $username= isset($_POST['username']) ? $_POST['username'] : null;
            $idDepar = isset($_POST['idDepar']) ? $_POST['idDepar'] : null;
            
            $fotoPerfil=isset($_FILES['fperfil']['name'])? $_FILES['fperfil']['name'] : 'error.jpg';
            $carpeta=base_url().'assets/upload/';
            
            copy($_FILES['fperfil']['tmp_name'],'-------'.$fotoPerfil); 
            
            $user=$this->usuario_model->getUserById($id);
            
            try {
                $this->usuario_model->updateUsuario($id,$username,$idDepar,$fotoPerfil);
                redirect(base_url() . 'usuario/r');
            }
            catch (Exception $e) {
                session_start();
                $_SESSION['_msg']['texto']=$e->getMessage();
                if($user->rol=="admin"){$_SESSION['_msg']['uri']='hdu/user/homepageAdmin';}
                else{$_SESSION['_msg']['uri']='hdu/user/homepageAdmin';}
                
                redirect(base_url() . 'msg');
            }
        }
       
 
        
        
        
        public function changepwd(){
            $this->load->model('usuario_model');
            $uid=isset($_POST['uid']) ? $_POST['uid'] : null;
            $data['uid']=$uid;
            frame($this,'usuario/changepwd',$data);
        }
        
        public function changepwdPost(){
            $uid=isset($_POST['uid']) ? $_POST['uid'] : null;
            $oldpwd=isset($_POST['oldpwd']) ? $_POST['oldpwd'] : null;
            $newpwd= isset($_POST['newpwd']) ? $_POST['newpwd'] : null;
            $this->load->model('usuario_model');
            $user=$this->usuario_model->getUserById($uid);
            try{
                $this->usuario_model->changepwd($uid,$oldpwd,$newpwd);
                session_start();
                $_SESSION['_msg']['texto']='Contraseña actualizada.';
                if($user->rol=="admin"){
                    $_SESSION['_msg']['uri']='hdu/user/homepageAdmin';
                   
                }
                else{
                    $_SESSION['_msg']['uri']='hdu/user/homepage';
                }
                redirect(base_url() . 'msg');
            }catch (Exception $e) {
                session_start();
                $_SESSION['_msg']['texto']=$e->getMessage();
                if($user->rol=="admin"){
                    $_SESSION['_msg']['uri']='hdu/user/homepageAdmin';
                         }
                else{
                    $_SESSION['_msg']['uri']='hdu/user/homepage';
                }
                redirect(base_url() . 'msg');
            }
        }
        
       
}

?>