<?php 

class Material_Model extends CI_Model{
    
    public function registrarMaterial($nombre, $obs){
        $material=R::findOne('material','nombre=?',[$nombre]);
        $valido=($material==null && $nombre!=null);
        $observaciones= ($obs!=null) ?  $obs : '--'; 
        
        if($valido){
            $material=R::dispense('material');
            $material->nombre=$nombre;
            $material->observaciones=$observaciones;
            
            R::store($material);
                      
        }else {
            $e = ($nombre==null?new Exception("nulo"):new Exception("duplicado"));
            throw $e;
        }
    }
    
    
    public function getMateriales(){
        return R::findAll('material');
    }
    
    
    public function getMaterialById($id){
        return R::findOne('material',$id);
    }
    
    public function updateMaterial($id,$nombre,$obs){
           $valido = ($id!=null && $nombre!=null);
        if($valido){
            $mat=R::load('material',$id);
            $mat->nombre=$nombre;
            ($obs!=null)?$mat->observaciones=$obs:$mat->observaciones='--';
            R::store($mat);
        }else{
            $e = ($id == null ? new Exception("Id nulo") : new Exception("Error al actualizar el material."));
            throw $e;
        }
    }
   
    public function dMaterial($id){
        $ok=$id!=null;
        if($ok){
        $mat=R::load('material',$id);
        R::trash($mat);
        }else{
            $e = ($id==null?new Exception("nulo"):new Exception("Error al eliminar el material"));
            throw $e;
        }
    }
}


?>