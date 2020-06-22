<?php 

class Aula_model extends CI_Model {
    
    
    public function crearAula($nombre,$capacidad,$comentarios,$categoriaAula){
        $valido=($nombre!=null && $capacidad!=null && $categoriaAula!=null);
        if($valido){
            $aula=R::dispense('aula');
            $catA=R::load('categoriaaula',$categoriaAula);
            
            $aula->nombre=$nombre;
            $aula->capacidad=$capacidad;
            $aula->comentarios=$comentarios;
            $aula->pertenece=$catA;
            $aula->alias('reservada')->xownReservaaulaList=[];
            $aula->alias('reservado')->xownReservamaterialList=[];
            R::store($aula);
            
        }else{
            $e = ($nombre == null ? new Exception("nulo") : new Exception("duplicado"));
            throw $e;
        }
    }
    
    public function uAula($id, $nombre,$capacidad,$comentarios,$categoriaAula){
        if($categoriaAula!=null && $id!=null){
           $aula= R::load('aula',$id);
           $tipoAula= R::load('categoriaaula',$categoriaAula);
            
           $aula->nombre=$nombre;
           $aula->capacidad=$capacidad;
           $aula->comentarios=$comentarios;
           $aula->pertenece=$tipoAula;
           
           R::store($aula);
        }else{
            $e = ($id == null ? new Exception("Debes elegir un tipo de aula.") : new Exception("Error al actualizar el aula seleccionada."));
            throw $e;
        }
    }
    
    public function getAulas(){
        return R::findAll('aula');
    }
   
    public function getAulaById($id){
        $aula=R::load('aula',$id);
        return $aula;
    }
    
    public function borrarAula($id){
        if($id!=null){
        $aula=R::load('aula',$id);
        R::trash($aula);
        }else{
            $e = ($id==null?new Exception("nulo"):new Exception("Error al eliminar el aula"));
            throw $e;
        }
    }
    
}


