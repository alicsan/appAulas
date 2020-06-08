<?php 

class Calendario extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
       
    }
    
    public function rAll(){
        $this->load->model('calendario_model');
        $uid=isset($_POST['uid']) ? $_POST['uid'] : null;
        $data ['idUsuario']=$uid;
        $data['reservas']=$this->calendario_model->getReservas();
        frame($this,'calendario/rAll',$data);
    }
    
    
    public function rUser(){
        $this->load->model('calendario_model');
        $uid=isset($_POST['uid']) ? $_POST['uid'] : null;
        $data ['idUsuario']=$uid;
        $data['reservas']=$this->calendario_model->getReservasById($uid);
        frame($this,'calendario/rUser',$data);
    }
    
  
}
    

