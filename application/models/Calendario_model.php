<?php 

class Calendario_model extends CI_Model{
 /****************AULAS*********************/
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
    
    
    /*****************MATERIALES***********/
    
    function getReservasMById($id){
        $userReservas=R::findAll('reservamaterial','tiene_id=?',[$id]);
        return $userReservas;
    }
    
    function getReservasMateriales(){
        return R::findAll('reservamaterial');
    }
    
    public function getReservasByMaterial($id){
        $reservas=R::findAll('reservamaterial','reservado_id=?',[$id]);
        return $reservas;
    }
}


?>