<?php 
session_start();

class Reserva extends CI_Controller{
   
    /* ---------------------------------------- AULAS ------------------------------------------------------ */
    public function crAulas(){
        $this->load->model('usuario_model');
        $this->load->model('aula_model');
        $userId=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;
        $data['usuario']=$this->usuario_model->getUserById($userId);
        $data['aulas']=$this->aula_model->getAulas();
        frame($this,'reserva/crAula',$data);
    }
    
    public function crSingleAula(){
        $this->load->model('usuario_model');
        $this->load->model('aula_model');
        $aulaId=isset($_POST['id']) ? $_POST['id'] : null;
        $userId=isset($_POST['uid']) ? $_POST['uid'] : null;
        $data['usuario']=$this->usuario_model->getUserById($userId);
        $data['aula']=$this->aula_model->getAulaById($aulaId);
        frame($this,'reserva/cU',$data);
    }
    
    public function crAulasPost(){
        $uid=isset($_POST['uid']) ? $_POST['uid'] : null;
        $aula= isset($_POST['idAula']) ? $_POST['idAula'] : null;
        $this->load->model('usuario_model');
        $user=$this->usuario_model->getUserById($uid);
        
        $dia=isset($_POST['dia']) ? $_POST['dia'] : null;
        $horaInicio=isset($_POST['horaInicio']) ? $_POST['horaInicio'] : null;
        $horaFin= isset($_POST['horaFin' ]) ? $_POST['horaFin' ] : null;
        
        
        $fechaInicio=$dia." ".$horaInicio;
        $fechaFin=$dia." ".$horaFin;
        
        $this->load->model('reserva_model');
        $libre=$this->reserva_model->verificarReservaA($aula,$fechaInicio);
      if($libre){
                 try{
                   $this->reserva_model->registrarReservaA($uid,$aula,$fechaInicio,$fechaFin);
                   session_start();
                   $_SESSION['_msg']=[];
                   $_SESSION['_msg']['texto']='Reserva realizada con éxito.';
                   ($user->rol=="admin") ?  $_SESSION['_msg']['uri']='hdu/user/homepageAdmin' :  $_SESSION['_msg']['uri']='hdu/user/homepage';
                   redirect(base_url().'msg');
            
              }catch(Exception $e){
                        session_start();
                        $_SESSION['_msg']=[];
                        $_SESSION['_msg']['texto']=$e->getMessage();
                        ($user->rol=="admin") ?  $_SESSION['_msg']['uri']='hdu/user/homepageAdmin' :  $_SESSION['_msg']['uri']='hdu/user/homepage';
                        redirect(base_url().'msg');
        }
        }else{
                    $e = ($libre==false?new Exception("Este aula ya ha sido reservado en la fecha elegida"):new Exception("Reserva duplicada"));
                    session_start();
                    $_SESSION['_msg']=[];
                    $_SESSION['_msg']['texto']="Este aula ya ha sido reservado en la fecha elegida";
                    $_SESSION['_msg']['uri']='reserva/c';
                    redirect(base_url().'msg');
           
        }
     }
     
     public function r(){
         $this->load->model('reserva_model');
         $data['reservasAula']=$this->reserva_model->getReservasA();
         $data['reservasMaterial']=$this->reserva_model->getReservasM();
         frame($this,'reserva/r',$data);
     }
    /* ---------------------------------------- MATERIALES ------------------------------------------------------ */
    
     public function crMateriales(){
         $this->load->model('usuario_model');
         $this->load->model('material_model');
         $uid=isset($_POST['uid']) ? $_POST['uid'] : null;
         $data['usuario']=$this->usuario_model->getUserById($uid);
         $data['materiales']=$this->material_model->getMateriales();
         frame($this,'reserva/crMateriales',$data);
     }
     
     public function crSingleMaterial(){
         $this->load->model('usuario_model');
         $this->load->model('material_model');
         $materialId=isset($_POST['id']) ? $_POST['id'] : null;
         $userId=isset($_POST['uid']) ? $_POST['uid'] : null;
         $data['usuario']=$this->usuario_model->getUserById($userId);
         $data['material']=$this->material_model->getMaterialById($materialId);
         frame($this,'reserva/crSingleMaterial',$data);
     }
     
     public function crMaterialesPost(){
         $uid=isset($_POST['uid']) ? $_POST['uid'] : null;
         $material= isset($_POST['idMaterial']) ? $_POST['idMaterial'] : null;
         $this->load->model('usuario_model');
         $user=$this->usuario_model->getUserById($uid);
         
         $dia=isset($_POST['dia']) ? $_POST['dia'] : null;
         $horaInicio=isset($_POST['horaInicio']) ? $_POST['horaInicio'] : null;
         $horaFin= isset($_POST['horaFin' ]) ? $_POST['horaFin' ] : null;
         
         
         $fechaInicio=$dia." ".$horaInicio;
         $fechaFin=$dia." ".$horaFin;
         
         $this->load->model('reserva_model');
         $libre=$this->reserva_model->verificarReservaM($material,$fechaInicio);
         
         if($libre){
             try{
                 $this->reserva_model->registrarReservaM($uid,$material,$fechaInicio,$fechaFin);
                 session_start();
                 $_SESSION['_msg']=[];
                 $_SESSION['_msg']['texto']='Reserva realizada con éxito.';
                 ($user->rol=="admin") ?  $_SESSION['_msg']['uri']='hdu/user/homepageAdmin' :  $_SESSION['_msg']['uri']='hdu/user/homepage';
                 redirect(base_url().'msg');
                 
             }catch(Exception $e){
                 session_start();
                 $_SESSION['_msg']=[];
                 $_SESSION['_msg']['texto']=$e->getMessage();
                 ($user->rol=="admin") ?  $_SESSION['_msg']['uri']='hdu/user/homepageAdmin' :  $_SESSION['_msg']['uri']='hdu/user/homepage';
                 
                 redirect(base_url().'msg');
             }
         }else{
             $e = ($libre==false?new Exception("Este material ya ha sido reservado en la fecha elegida") : new Exception("Reserva duplicada"));
             session_start();
             $_SESSION['_msg']=[];
             $_SESSION['_msg']['texto']="Este aula ya ha sido reservado en la fecha elegida";
             $_SESSION['_msg']['uri']='reserva/c';
             redirect(base_url().'msg');
             
         }
     }
     
     public function rMateriales(){
         $this->load->model('reserva_model');
         $data['reservas']=$this->reserva_model->getReservasM();
         frame($this,'reserva/r',$data);
     }
}




?>