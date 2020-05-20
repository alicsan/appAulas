<?php 

class Usuario_model extends CI_Model{
    
    public function crearUsuario($nombre,$username,$pwd,$idDepar){
    
        $valido=($nombre!=null && $username!=null &&  $pwd != null && $idDepar!= null);
        if($valido){
            $usuario=R::dispense('usuario');
           $departamento=R::load('departamento',$idDepar);
            
            $usuario->rol="profesor";
            $usuario->nombre=$nombre;
            $usuario->username=$username;
            $usuario->pwd=password_hash($pwd, PASSWORD_DEFAULT);
            $usuario->tiene=$departamento;
            
            R::store($usuario);
            
        }else{
            $e = ($idDepar == null ? new Exception("nulo") : new Exception("duplicado"));
            throw $e;
        }
        
    }
    
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
    
    
    ///////////////////////// 
    
    
    public function verificarLogin($username,$pwd){
        $usuario=R::findOne('usuario','username=?',[$username]);
    if($usuario==null){
        throw new Exception("Usuario o contraseña no correcta");
    }
    if(!password_verify($pwd,$usuario->pwd)){
        throw new Exception("Usuario o contraseña no correcta");
    }
    
    return $usuario;
}
}

?>