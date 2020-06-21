<?php 
class Reserva_model extends CI_Model{
    
    public function registrarReservaA($user,$idAula,$fechaInicio,$fechaFin){
        
            $reserva=R::dispense('reservaaula');
            $usuario=R::load('usuario',$user);
            $aula=R::load('aula',$idAula);
                    
            $reserva->tiene=$usuario;
            $reserva->fechaInicio=$fechaInicio;
            $reserva->fechaFin=$fechaFin;
            $reserva->reservada=$aula;
            R::store($reserva);
               
    }
    
    public function getReservasA(){
        return R::findAll('reservaaula');
    }
    
    public function verificarReservaA($idAula,$fechaInicio){
        $valido=R::getAll("SELECT * FROM reservaaula WHERE fecha_inicio ='$fechaInicio' and aula_id='$idAula'");
    
        if($valido==null){
            return true;             
            }else{
                return false;
            }
    
    }
    
    
    public function registrarReservaM($user,$idMaterial,$fechaInicio,$fechaFin){
        
        $reservam=R::dispense('reservamaterial');
        $usuario=R::load('usuario',$user);
        $mat=R::load('material',$idMaterial);
        
        $reservam->tiene=$usuario;
        $reservam->fechaInicio=$fechaInicio;
        $reservam->fechaFin=$fechaFin;
        $reservam->reservado=$mat;
        R::store($reservam);
        
    }
    
    public function verificarReservaM($idMaterial,$fechaInicio){
        $valido=R::getAll("SELECT * FROM reservamaterial WHERE fecha_inicio ='$fechaInicio' and material_id='$idMaterial'");
        
        if($valido==null){
            return true;
        }else{
            return false;
        }
    }
    
    public function getReservasM(){
        return R::findAll('reservamaterial');
    }
}




?>