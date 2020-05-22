<?php 

class Reserva extends CI_Controller{
    
    public function c(){
        $id=isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('usuario_model');
        $this->load->model('aula_model');
        $data['usuarios']=$this->usuario_model->getUsuarios();
        $data['aulas']=$this->aula_model->getAulas();
        frame($this,'reserva/c',$data);
    }
    
    
    public function cPost(){
        $profesor=isset($_POST['idProfe']) ? $_POST['idProfe'] : null;
        $aula= isset($_POST['idAula']) ? $_POST['idAula'] : [];
        $fechaInicio=isset($_POST['fechaInicio']) ? $_POST['fechaInicio'] : null;
        $fechaFin=isset($_POST['fechaFin']) ? $_POST['fechaFin'] : null;
        
        try{
           $this->load->model('reserva_model');
           $this->reserva_model->registrarReserva($profesor,$aula,$fechaInicio,$fechaFin);
            redirect(base_url().'/reserva/r');
            
        }catch(Exception $e){
            session_start();
            $_SESSION['_msg']=[];
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='reserva/c';
            redirect(base_url().'msg');
        }
     }
     
     public function r(){
         $this->load->model('reserva_model');
         $data['reservas']=$this->reserva_model->getReservas();
         frame($this,'reserva/r',$data);
     }
    
    
    
}




?>