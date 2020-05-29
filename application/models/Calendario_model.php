<?php 

class Calendario_model extends CI_Model{
    
    function getReservas(){
        $this->db->order_by('id');
        return $this->db->get('reserva');
    }
}



?>