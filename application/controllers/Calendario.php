<?php 

class Calendario extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
       
    }
    
    public function r(){
        $this->load->model('calendario_model');
        $data['reservas']=$this->calendario_model->getEventos();
//         foreach($reservas as $reserva){
//             $data=array(
//                 'id' => $reserva->id,
//                 'title' => $reserva->aulas_id->pertenece->nombre,
//                 'start' => $reserva->fecha_inicio,
//                 'end' =>   $reserva->fecha_fin
//             );
//             //id fecha_inicio fecha_fin usuarios_id aulas_id
//         }
        frame($this,'calendario/r',$data);
    }
    
    function load(){
      
       
        //$this->output->set_header('Content-Type: application/json');
       // return json_encode($data);
    }
    
    public function load2(){
        $this->load->model('calendario_model');
        $data['eventos']=$this->calendario_model->getEventos();
        $_SESSION['informacion']=$data['eventos'];
        $this->output->set_header('Content-Type: application/json');
        return json_encode($data);
        
    }
    
    
    
//     public function load(){       
//         $json=array();
//         $event_data = $this->calendario_model->fetch_all_event();
//         foreach($event_data as $row)
//         {
//             $json[] = array(
//                 'id' => $row['id'],
//                 'title' => $row['title'],
//                 'start' => $row['start_event'],
//                 'end' => $row['end_event']
//             );
//         }
//         return json_encode($json, true);
        


// id'=>$row['id'],
//                 'inicio'=>$row['fecha_inicio'],
//                 'fin'=>$row['fecha_fin'],
//                 'usuario'=>$row['usuarios_id'],
//                 'aula'=>$row['aulas_id']
//     }
}
    


