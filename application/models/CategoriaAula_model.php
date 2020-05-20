<?php 
class CategoriaAula_model extends CI_Model{
    
    public function crearCategoria($nombre){
       $categoria=R::findOne('categoriaaula','nombre=?',[$nombre]);
        $valido=($categoria==null&&$nombre!=null);
        
        if($valido){
            $categoria=R::dispense('categoriaaula');
            $categoria->nombre=$nombre;
            $categoria->alias('tiene')->xownAulaList=[];
            
            R::store($categoria);
        }else{
            $e = ($nombre==null?new Exception("nulo"):new Exception("duplicado"));
            throw $e;
        }
    }
    
    public function getCategoriasAula(){
        return R::findAll('categoriaaula');
    }
    
    public function borrarCategoriaAula($id){
        $cat=R::load('categoriaaula',$id);
        $valido=($cat!=null);
        if($valido){
            R::trash($cat);
        }else{
            $e = ($id==null?new Exception("nulo"):new Exception("Error al eliminar la categoría"));
            throw $e;
        }
    }
}

?>