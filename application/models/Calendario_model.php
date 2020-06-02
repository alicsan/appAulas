<?php 

class Calendario_model extends CI_Model{
    
    function getReservas(){
        $this->db->order_by('id');
        return $this->db->get('reserva');
    }
    
    function fetch_all_event(){
        $this->db->order_by('id');
        return $this->db->get('events');
    }

    public function fetch_all_event(){
        $this->db->select(array('id','title','start_event','end_event'));
        $this->db->from('events as e');
        $query= $this->db->get();
        return $query->result_array();
    }


    function getEventos(){
        return R::findAll('event');
    }
}


?>