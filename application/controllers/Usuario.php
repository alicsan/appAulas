<?php 
session_start();

class Usuario extends CI_Controller{ 
    
    public function registrar(){
        $this->load->model('departamento_model');
        $data['departamentos']=$this->departamento_model->getDepartamentos();
        frame($this,'usuario/registrar',$data);
        
    }
    
    public function registrarPost(){
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->load->model('usuario_model');
        $this->load->library('upload', $config);
        $nombre= isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $apellido=isset($_POST['apellido']) ? $_POST['apellido'] : null;
        
        $fotoPerfil=isset($_POST['fperfil']) ? $_POST['fperfil'] : 'default.jpg';
        
        $username= isset($_POST['username']) ? $_POST['username'] : null;
        $pwd=isset($_POST['pwd']) ? $_POST['pwd'] : null;
        $idDepar=isset($_POST['idDepar']) ? $_POST['idDepar'] : null;
        try{
            $this->upload->do_upload($fotoPerfil);
            $this->usuario_model->registrarUsuario($nombre,$apellido,$username,$pwd,$idDepar,$fotoPerfil);
            $this-> PRG('Usuario registrado con éxito.','/','success');
        }catch(Exception $e){
            $this->PRG($e->getMessage(),'usuario/r','danger');
        }
    }
    
        public function r(){  
            $user=$_SESSION['usuario'];
            if($user->nivel->nombre=='admin'){
            $this->load->model('usuario_model');
            $data['usuarios']=$this->usuario_model->getUsuarios();
            frame($this,'usuario/r',$data);
            }else{
                
                $_SESSION['_msg']['texto'] = "Rol inadecuado";
                redirect(base_url() . 'msg');
            }
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
            $id = isset($_POST['id'])?$_POST['id']:null;
            $data['usuario']=$this->usuario_model->getUsuario($id);
            $data['departamentos']=$this->departamento_model->getDepartamentos();
            frame($this,'usuario/u',$data);
        }
        
        public function uPost(){
            $this->load->model('usuario_model');
            
            $id = isset($_POST['id']) ? $_POST['id'] : null;
            $username= isset($_POST['username']) ? $_POST['username'] : null;
            $idDepar = isset($_POST['idDepar']) ? $_POST['idDepar'] : null;
           
            
            try {
                $this->usuario_model->updateUsuario($id,$username,$idDepar);
                redirect(base_url() . 'usuario/r');
            }
            catch (Exception $e) {
                session_start();
                $_SESSION['_msg']['texto']=$e->getMessage();
                $_SESSION['_msg']['uri']='persona/c';
                redirect(base_url() . 'msg');
            }
        }
       
}

?>