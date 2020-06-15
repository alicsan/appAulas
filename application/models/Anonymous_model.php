<?php 

class Anonymous_model extends CI_Model{
   
    public function init() {
                       
        $cA1=R::dispense('categoriaaula');
        $cA1->nombre='Biblioteca';
        R::store($cA1);
        
        $cA2=R::dispense('categoriaaula');
        $cA2->nombre='Taller';
        R::store($cA2);
        
        $cA3=R::dispense('categoriaaula');
        $cA3->nombre='Polivalente';
        R::store($cA3);
        
        $depar=R::dispense('departamento');
        $depar->alias('tiene')->xownUsuarioList=[];
        $depar->nombre='Dirección';
        R::store($depar);
        
        $d=R::dispense('departamento');
        $d->alias('tiene')->xownUsuarioList=[];
        $d->nombre= 'IT';
        R::store($d);
        
        $d2=R::dispense('departamento');
        $d2->alias('tiene')->xownUsuarioList=[];
        $d2->nombre='Matemáticas';
        R::store($d2);
        
        $usuarioAdmin = R::dispense('usuario');
        $usuarioAdmin->nombre = 'Administrador';
        $usuarioAdmin->username = 'admin';
        $usuarioAdmin->password = password_hash('admin', PASSWORD_DEFAULT);
        $usuarioAdmin->rol='admin';
        R::store($usuarioAdmin);
       
        
        
    }
    
   
    public function verificarLogin($username,$pwd){
        $usuario=R::findOne('usuario','username=?',[$username]);
        
        if($usuario==null){
            throw new Exception ("Usuario inexistente");
            $_SESSION['rol']='anon';
        }else{
            if(!password_verify($pwd,$usuario->password)){
                throw new Exception('Contraseña incorrecta');
                $_SESSION['rol']='anon';
            }else{
                session_start();
                $_SESSION['_user']['_uid']=$usuario->id;
                $_SESSION['_user']['_un']=$usuario->nombre;
                $_SESSION['rol']=$usuario->rol;
                return $usuario;
            }
        }
    }
    
    
    
    
    
    
}




?>