<?php 
class Reserva_model extends CI_Model{
    
    public function registrarReserva($idProfesor,$idAula,$fechaInicio,$fechaFin){
               
      
            $reserva=R::dispense('reserva');
            $usuario=R::load('usuario',$idProfesor);
            $aula=R::load('aula',$idAula);
                    
            $reserva->usuario=$usuario;
            $reserva->fechaInicio=$fechaInicio;
            $reserva->fechaFin=$fechaFin;
            $reserva->aula=$aula;
            R::store($reserva);
            
        
        
        
    }
    
    public function getReservas(){
        return R::findAll('reserva');
    }
    
    public function verificarReserva($idAula,$fechaInicio){
        $valido=R::getAll("SELECT * FROM reserva WHERE fecha_inicio ='$fechaInicio' and aula_id='$idAula'");
    
        if($valido==null){
            return true;
                           
            }else{
                return false;
            }
    
    }
    
}




?>