<?php 

class Usuario_model extends CI_Model{
    
   
    public function getUsuarios(){
        return R::findAll('usuario');
    }
    
    public function borrarUsuario($id){
        $usuario=R::load('usuario',$id);
        $valido=$id!=null;
        if($valido){
            R::trash($usuario);
        }else{
            $e = ($id==null?new Exception("nulo"):new Exception("Error al eliminar el usuario"));
            throw $e;
        }
    }
    public function getUsuario($id){
        return R::load('usuario', $id);
    }
    
    public function updateUsuario($id,$username,$idDepar){
        $user=R::load('usuario',$id);
        $valido=($id!=null && $username!=null && $idDepar!= null);
        if($valido){
            $user->username=$username;
            $user->tiene_id=$idDepar;
            
            R::store($user);
        }else{
            $e = ($idDepar == null ? new Exception("nulo") : new Exception("duplicado"));
            throw $e;
        }
        
    }
    
    public function getIDByUsername(){
        $userName=$_SESSION['userName'];
        $usuario=R::findOne('usuario','username=?',[$username]);
        $userId=$usuario->id;
        return $userId;
    }
 

}

?>