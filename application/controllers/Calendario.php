<?php 

class Calendario extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
       
    }
    /********************************RESERVAS AULAS***********************************************/
    public function rAll(){
        session_start();
        $this->load->model('calendario_model');
        $uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;
        $data ['idUsuario']=$uid;
        $data['reservas']=$this->calendario_model->getReservasAula();
        frame($this,'calendario/r',$data);
    }
    
    
    public function raUser(){
        session_start();
        $this->load->model('calendario_model');
        $uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;
        $data ['idUsuario']=$uid;
        $data['reservas']=$this->calendario_model->getReservasAById($uid);
        frame($this,'calendario/r',$data);
    }
    public function rAula(){
         session_start();
        $this->load->model('calendario_model');
        $uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;
        $aulaId=isset($_POST['id']) ? $_POST['id'] : null;
        $data ['idUsuario']=$uid;
        $data['reservas']=$this->calendario_model->getReservasByAula($aulaId);
        frame($this,'calendario/r',$data);
    }
    
    /********************************RESERVAS MATERIALES***********************************************/
    
    public function rmAll(){
        session_start();
        $this->load->model('calendario_model');
        $uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;
        $data ['idUsuario']=$uid;
        $data['reservas']=$this->calendario_model->getReservasMateriales();
        frame($this,'calendario/rMaterial',$data);
    }
    
    
    public function raMaterial(){
        session_start();
        $this->load->model('calendario_model');
        $uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;
        $data ['idUsuario']=$uid;
        $data['reservas']=$this->calendario_model->getReservasMById($uid);
        frame($this,'calendario/rMaterial',$data);
    }
    public function rMaterial(){
        session_start();
        $this->load->model('calendario_model');
        $uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;
        $materialId=isset($_POST['id']) ? $_POST['id'] : null;
        $data ['idUsuario']=$uid;
        $data['reservas']=$this->calendario_model->getReservasByMaterial($materialId);
        frame($this,'calendario/rMaterial',$data);
    }
  
}
    

