<?php 
class Departamento_Model extends CI_Model{

    public function crearDepartamento ($nombre){
      
        $departamento=R::findOne('departamento','nombre=?',[$nombre]);
        $valido=($departamento==null&&$nombre!=null);
        
        if($valido){
            $departamento= R::dispense('departamento');
            $departamento->nombre=$nombre;
            $departamento->alias('tiene')->xownUsuarioList=[];
            R::store($departamento);
        }else{
            $e = ($nombre==null?new Exception("nulo"):new Exception("duplicado"));
            throw $e;
        }
    }
    
    public function getDepartamentos(){
        return R::findAll('departamento');
    }
    
    public function borrarDepartamento($id){
        $depar=R::load('departamento',$id);
        $valido=$id!=null;
        if($valido){
            R::trash($depar);
        }else{
            $e = ($id==null?new Exception("nulo"):new Exception("Error al eliminar el departamento"));
            throw $e;
        }
    }
}
?>