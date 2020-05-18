<?php
class User_model extends CI_Model{
    public function getUser()
    {
        return R::findAll('user');
    }
    public function crearUser($dni,$name,$idBorn)
    {
       $Cdni = R::findOne('user','dni=?',[$dni]);
//         $nombre != null && $idCountry != null && $Cdni==null
       $ok = ($dni!=null && $Cdni == null);
       if ($ok) {
            $user = R::dispense('user');
            $city = R::load('city', $idBorn);
            
            $user->dni = $dni;
            $user->name = $name;
            $user->born = $city;
            R::store($user);
            
            
       }
        else {
            $e = ($dni == null ? new Exception("nulo") : new Exception("duplicado"));
            throw $e;
        }
    }
    public function registrarViaje($dni,$idsTravel){
        $userDni = R::findOne('user','dni=?',[$dni]);
        $ok = (!($userDni==null));
        if($ok){
            foreach ($idsTravel as $viaje) {
                $ciudad = R::load('city', $viaje);                
                $travel = R::dispense('travel');
                $travel->user = $userDni;
                $travel->city = $ciudad;
                R::store($travel);
                
        }
}
else {
    $e = ($dni == null ? new Exception("nulo") : new Exception("duplicado"));
    throw $e;
}
    }
}