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
    
    public function borrarMaterial($id){
        $material=R::load('material',$id);
        $valido=($material!=null);
        if($valido){
            R::trash($material);
        }else{
            $e = ($id==null?new Exception("nulo"):new Exception("Error al eliminar la categoría"));
            throw $e;
        }
    
    }
    
    public function getMaterialById($id){
        return R::findOne('material',$id);
    }
    
    public function updateMaterial($id,$nombre,$obs){
           $valido = ($id!=null && $nombre!=null && $obs!=null);
        if($valido){
            $mat=R::load('material',$id);
            $mat->nombre=$nombre;
            $mat->observaciones=$obs;
        }else{
            $e = ($idDepar == null ? new Exception("nulo") : new Exception("duplicado"));
            throw $e;
        }
    }
   
    public function borrarMaterial($id){
        $valido=$id!=null;
        if($valido){
        $mat=R::load('material',$id);
        R::trash($material);
        }else{
            $e = ($id==null?new Exception("nulo"):new Exception("Error al eliminar el usuario"));
            throw $e;
        }
    }
}


?>