<?php 

class Calendario_model extends CI_Model{
 
    function getReservasAById($id){
        $userReservas=R::findAll('reservaaula','tiene_id=?',[$id]);
        return $userReservas;
    }

    function getReservasAula(){
        return R::findAll('reservaaula');
    }
    
    public function getReservasByAula($id){
        $reservas=R::findAll('reservaaula','reservada_id=?',[$id]);
        return $reservas;
    }
}


?>