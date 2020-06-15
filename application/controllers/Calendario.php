<?php 

class Calendario extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
       
    }
    
    public function rAll(){
        session_start();
        $this->load->model('calendario_model');
        $uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;
        $data ['idUsuario']=$uid;
        $data['reservas']=$this->calendario_model->getReservas();
        frame($this,'calendario/r',$data);
    }
    
    
    public function rUser(){
        session_start();
        $this->load->model('calendario_model');
        $uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;
        $data ['idUsuario']=$uid;
        $data['reservas']=$this->calendario_model->getReservasById($uid);
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
  
}
    

