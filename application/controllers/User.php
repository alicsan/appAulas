<?php
class User extends CI_Controller{
    public function r() {
       $this->load->model('user_model');
       $datos['user'] = $this->user_model->getUser();
        frame($this,'user/r', $datos);
        
    }
    public function c()
    {
        $this->load->model('city_model');
        $data['city']=$this->city_model->getCity();
        frame($this,'user/c',$data);
    }
    public function cPost()
    {
        $this->load->model('user_model');
        
        $dni = isset($_POST['dni']) ? $_POST['dni'] : null;
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $idBorn = isset($_POST['idBorn']) ? $_POST['idBorn'] : null;
        
        
        try {
            $this->user_model->crearUser($dni,$name,$idBorn);
            redirect(base_url() . 'user/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='user/c';
            redirect(base_url() . 'msg');
        }
    }
    public function rViajes(){
        $this->load->model('city_model');
        $data['city']=$this->city_model->getCity();
        frame($this,'user/viajeGet',$data);
    }
    public function rViajesPost(){
        $idsTravel = isset($_POST['idsTravel'])?$_POST['idsTravel']:[];
        $dni = isset($_POST['dni'])?$_POST['dni']:null;
        $this->load->model('user_model');
        try {
            $this->user_model->registrarViaje($dni,$idsTravel);
            redirect(base_url() . 'user/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='user/r';
            redirect(base_url() . 'msg');
        }
        
    }
}