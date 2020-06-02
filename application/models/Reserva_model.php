<?php 
class Reserva_model extends CI_Model{
    
    public function registrarReserva($idProfesor,$idAula,$fechaInicio,$fechaFin){
        $valido=($idProfesor!=null && $idAula!=null && $fechaInicio!=null && $fechaFin!=null);
        if($valido){
            $reserva=R::dispense('reserva');
            $usuario=R::load('usuario',$idProfesor);
            $aula=R::load('aula',$idAula);
                    
            $reserva->usuarios=$usuario;
            $reserva->fechaInicio=$fechaInicio;
            $reserva->fechaFin=$fechaFin;
            
            R::store($reserva);
            
            foreach($idAula as $aula){
                $clase=R::load('aula',$aula);
                $reserva->aulas=$clase;
                
                R::store($reserva);
            }
        }
    }
    
    public function getReservas(){
        return R::findAll('reserva');
    }
    
}




?>