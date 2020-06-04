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
    public function getUserById($id){
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
    public function registrarUsuario($nombre,$apellidos,$username,$pwd,$idDepar,$fotoPerfil){
        
        $valido=($nombre!=null && $apellidos!=null && $username!=null &&  $pwd != null && $idDepar!= null);
        if($valido){
            $usuario=R::dispense('usuario');
            $departamento=R::load('departamento',$idDepar);
            $usuario->nombre=$nombre;
            $usuario->apellidos=$apellidos;
            $usuario->username=$username;
            $usuario->password=password_hash($pwd, PASSWORD_DEFAULT);
            $usuario->tiene=$departamento;
            $usuario->fotoPerfil=$fotoPerfil;
            $usuario->rol='user';
            $usuario->alias('usuarios')->xownReservaList=[];
            
            R::store($usuario);
            
        }else{
            $e = ($idDepar == null ? new Exception("nulo") : new Exception("duplicado"));
            throw  $e;
        }
        
    }

}

?>