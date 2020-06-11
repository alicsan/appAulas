<?php 

class Calendario_model extends CI_Model{
 
    function getReservasById($id){
        $userReservas=R::findAll('reserva','usuario_id=?',[$id]);
        return $userReservas;
    }

    function getReservas(){
        return R::findAll('reserva');
    }
    
    public function getReservasByAula($id){
        $reservas=R::findAll('reserva','aula_id=?',[$id]);
        return $reservas;
    }
}


?>