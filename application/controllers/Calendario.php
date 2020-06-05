<?php 

class Calendario extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
       
    }
    
    public function r(){
        $this->load->model('calendario_model');
        $uid=isset($_POST['uid']) ? $_POST['uid'] : null;
        $data['reservas']=$this->calendario_model->getReservas();
        frame($this,'calendario/r',$data);
    }
    
  
}
    

