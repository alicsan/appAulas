<?php 

class Anonymous_model extends CI_Model{
   
    public function init() {
        // Inicializamos roles
        $rolAdmin = R::dispense('rol');
        $rolAdmin->nombre = 'admin';
        $rolAdmin->alias('nivel')->xownUsuarioList=[];
       
        
        R::store($rolAdmin);
        
        $rolUser = R::dispense('rol');
        $rolUser->nombre = 'user';
        $rolUser->alias('nivel')->xownUsuarioList=[];
        R::store($rolUser);
        
        $cA1=R::dispense('categoriaaula');
        $cA1->nombre('Biblioteca');
        R::store($cA1);
        
        $cA2=R::dispense('categoriaaula');
        $cA2->nombre('Taller');
        R::store($cA2);
        
        $cA3=R::dispense('categoriaaula');
        $cA3->nombre('Polivalente');
        R::store($cA2);
        
        $depar=R::dispense('departamento');
        $depar->nombre('Dirección');
        R::store($depar);
        
        $d=R::dispense('departamento');
        $d->nombre('IT');
        R::store($d);
        
        $d2=R::dispense('departamento');
        $d2->nombre('Matemáticas');
        R::store($d2);
        
        $usuarioAdmin = R::dispense('usuario');
        $usuarioAdmin->nombre = 'Administrador';
        $usuarioAdmin->username = 'admin';
        $usuarioAdmin->password = password_hash('admin', PASSWORD_DEFAULT);
        $usuarioAdmin->nivel=$rolAdmin;
        R::store($usuarioAdmin);
       
        
        
    }
    
    public function verificarLogin($username,$pwd){
        $usuario=R::findOne('usuario','username=?',[$username]);
        if($usuario==null){
            throw new Exception ("Usuario inexistente");
        }else{
            if(!password_verify($pwd,$usuario->password)){
                throw new Exception('Contraseña incorrecta');
            }else{
                $_SESSION['usuario']=$usuario;
                $_SESSION['rol']=$usuario->nivel->nombre;
                return $usuario;
            }
        }
    }
    
    public function registrarUsuario($nombre,$username,$pwd,$idDepar){
        
        $valido=($nombre!=null && $username!=null &&  $pwd != null && $idDepar!= null);
        if($valido){
            $usuario=R::dispense('usuario');
            $departamento=R::load('departamento',$idDepar);
            $rol=R::dispense('rol');
            $rol->nombre='user';
            R::store($rol);
            
            $usuario->nombre=$nombre;
            $usuario->username=$username;
            $usuario->password=password_hash($pwd, PASSWORD_DEFAULT);
            $usuario->tiene=$departamento;
            $usuario->nivel=$rol;
            $usuario->alias('usuarios')->xownReservaList=[];
           
            
            
            R::store($usuario);
            
        }else{
            $e = ($idDepar == null ? new Exception("nulo") : new Exception("duplicado"));
            throw  $e;
        }
        
    }
    
    
    
    
    
}




?>