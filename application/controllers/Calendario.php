<?php 


class Calendario extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('calendario_model');
    }

    public function r(){
        frame($this,'calendario/r');
    }




}
?>