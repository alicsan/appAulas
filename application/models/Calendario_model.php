<?php 

class Calendario_model extends CI_Model{
 
    function getReservasById($id){
        $userReservas=R::findAll('reserva','usuarios_id=?',[$id]);
        return $userReservas;
    }

    function getReservas(){
        return R::findAll('reserva');
    }
}


?>