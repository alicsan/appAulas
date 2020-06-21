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
    public function registrarUsuario($nombre,$apellidos,$username,$pwd,$idDepar,$foto_perfil){
        
        $valido=($nombre!=null && $apellidos!=null && $username!=null &&  $pwd != null && $idDepar!= null);
        $userOk=R::findOne('usuario','username=?',[$username]);
        if($valido && $userOk==null){
            $usuario=R::dispense('usuario');
            $departamento=R::load('departamento',$idDepar);
            $usuario->nombre=$nombre;
            $usuario->apellidos=$apellidos;
            $usuario->username=$username;
            $usuario->password=password_hash($pwd, PASSWORD_DEFAULT);
            $usuario->tiene=$departamento;
            ($foto_perfil ==1) ? $usuario->foto_perfil= 'nuse': $usuario->foto_perfil=$foto_perfil;
            $usuario->rol='user';
            $usuario->alias('tiene')->xownReservaaulaList=[];
            $usuario->alias('tiene')->xownReservamaterialList=[];
            
            R::store($usuario);
            
        }else{
            $e = ($nombre == null || $apellidos ==null || $username==null || $pwd==null || $idDepar == null ? new Exception("Debes rellenar todos los campos") : new Exception("duplicado"));
            throw  $e;
        }
        }
        
        
    
    public function verificarRol($uid){
        $usuario=R::load('usuario',$uid);
        if($usuario->rol=="admin"){
            return true;
        }else{
            return false;
        }
    }
    
    public function changepwd($uid,$oldpwd,$newpwd){
        $usuario=R::load('usuario',$uid);
        $op=password_hash($oldpwd, PASSWORD_DEFAULT);
        $ac=$usuario->password;
        if(password_verify($oldpwd,$ac)){
            $usuario->password=password_hash($newpwd, PASSWORD_DEFAULT);
            R::store($usuario);
        }else{
            $e= new Exception("La contraseña introducida no es correcta");
            throw $e;
        }
    }

}

?>