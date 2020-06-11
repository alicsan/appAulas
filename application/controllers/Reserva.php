<?php 
session_start();

class Reserva extends CI_Controller{
   
    
    public function c(){
        $this->load->model('usuario_model');
        $this->load->model('aula_model');
        $userId=isset($_POST['uid']) ? $_POST['uid'] : null;
        $data['usuario']=$this->usuario_model->getUserById($userId);
        $data['aulas']=$this->aula_model->getAulas();
        frame($this,'reserva/c',$data);
    }
    
    public function create(){
        $this->load->model('usuario_model');
        $this->load->model('aula_model');
        $aulaId=isset($_POST['id']) ? $_POST['id'] : null;
        $userId=isset($_POST['uid']) ? $_POST['uid'] : null;
        $data['usuario']=$this->usuario_model->getUserById($userId);
        $data['aula']=$this->aula_model->getAulaById($aulaId);
        frame($this,'reserva/cU',$data);
    }
    
    public function cPost(){
        $user=isset($_POST['uid']) ? $_POST['uid'] : null;
        $aula= isset($_POST['idAula']) ? $_POST['idAula'] : null;
        $fechaInicio=isset($_POST['fechaInicio']) ? $_POST['fechaInicio'] : null;
        $fechaFin=isset($_POST['fechaFin']) ? $_POST['fechaFin'] : null;
        $this->load->model('reserva_model');
        $libre=$this->reserva_model->verificarReserva($aula,$fechaInicio);
            if($libre){
        try{
           
           $this->reserva_model->registrarReserva($user,$aula,$fechaInicio,$fechaFin);
            redirect(base_url().'/reserva/r');
            
        }catch(Exception $e){
            session_start();
            $_SESSION['_msg']=[];
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='/';
            redirect(base_url().'msg');
        }
        }else{
            
                $e = ($libre==false?new Exception("Este aula ya ha sido reservado en la fecha elegida"):new Exception("Reserva duplicada"));
                session_start();
                $_SESSION['_msg']=[];
                $_SESSION['_msg']['texto']=$e;
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