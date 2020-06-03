<?php 

class Calendario_model extends CI_Model{
    
//     public function fetch_all_event(){
//         $this->db->select(array('id','title','start_event','end_event'));
//         $this->db->from('events as e');
//         $query= $this->db->get();
//         return $query->result_array();
//     }


//     function getReservas($id){
//         $userReservas=R::findAll('reserva','usuarios=?',[$id]);
//         return $userReservas;
//         //return R::findAll('reserva');
//     }

    function getReservas(){
        return R::findAll('reserva');
    }
}


?>