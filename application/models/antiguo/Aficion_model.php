<?php

class Aficion_model extends CI_Model
{
 /*Metodo de Actualizacion de Aficiones.
  * Funcionamiento:
  * 1�: Se carga el bean deseado buscandolo por tipo y el id.
  * 2�: Se actualiza el campo nombre con el nuevo nombre deseado.*/   
    public function update($id,$nombre) {
        $aficion = R::load('aficion',$id);
        $aficion->nombre = $nombre;
        R::store($aficion);
    }
/*Metodo de recogida del Nombre de una Aficion buscada por el Id.
 * Funcionamiento:
 * 1�: Se carga el bean deseado buscandolo por el Id.
 * 2�: Se devuelve el campo nombre del bean en concreto.*/    
    public function getAficionNombreById($id){
        $aficion = R::load('aficion',$id);
        return $aficion->nombre;
    }
/*Metodo de borrado de una Aficion.
 * Funcionamiento:
 * 1�: Se carga el bean deseado buscandolo por el Id.
 * 2�: Se utiliza un metodo de RedBean para borrar el bean (Trash).*/    
    public function borrarAficion($id) {
        $aficion = R::load('aficion',$id);
        R::trash($aficion);
    }
/*Metodo de buscado de todas las Aficiones creadas.
 * Funcionamiento:
 * 1�: Al llamarlo se buscan todos los bean de ese tipo y se es lo que se devuelve.*/
    public function getAficiones()
    {
        return R::findAll('aficion');
    }
/*Metodo de crear Aficiones.
 * Funcionamiento:
 * 1�: Al llamarlo se recibe el nombre enviado.
 * 2�: Se comprueba con una variable centinela si hay un bean con ese nombre o si lo quese ha recibido es nulo.
 * 2-1A�: Si no existe o si no es nulo, entra en el if y se crea un nuevo bean del tipo Aficion.
 * 2-1B�: Se le asigna el nombre recibido.
 * 2-1C�: Se guarda el bean.
 * 2-2A�: Si existe o si el nombre es nulo va al else y se crea una excepcion dependiendo del caso.
 * 2-2B�: Se lanza la excepcion.
 * */
    public function crearAficion($nombre)
    {
        $aficion = R::findOne('aficion','nombre=?',[$nombre]);
        $ok = ($aficion==null && $nombre!=null);
        if ($ok) {
            $aficion = R::dispense('aficion');
            $aficion->nombre = $nombre;
            R::store($aficion);
        }
        else {
           $e = ($nombre==null?new Exception("nulo"):new Exception("duplicado"));
           throw $e;
        }
    }
}
?>
