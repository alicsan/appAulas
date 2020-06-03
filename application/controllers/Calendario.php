<?php 

class Calendario extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
       
    }
    
    public function r(){
        $this->load->model('calendario_model');
        $this->load->model('usuario_model');
        $userId=$this->usuario_model->getIDByUsername();
        $data['reservas']=$this->calendario_model->getReservas($userId);
        frame($this,'calendario/r',$data);
    }
    
  
}
    


