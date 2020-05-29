<?php 

class Calendario extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('calendario_model');
    }
    
    public function r(){
        frame($this,'calendario/r');
    }
    
    function load(){
       $reservas=$this->calendario_model->getReservas();
        foreach($reservas->result_array() as $row){
            $data[]=array(
                'id'=>$row['id'],
                'inicio'=>$row['fecha_inicio'],
                'fin'=>$row['fecha_fin'],
                'usuario'=>$row['usuario_id'],
                'aula'=>$row['aulas_id']
            );
        }
        
        echo json_enconde($data);
    }
}


?>