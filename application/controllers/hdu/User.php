<?php
class User extends CI_Controller{
    public function logout(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        session_destroy();
        redirect(base_url());
        
    }
    
    public function homepage(){
//         if (isset($_SESSION['usuario'])) {
//             frame($this,'_hdu/user/menu');
//         }else{
//             echo base_url();
//         }
        frame($this,'_hdu/user/menu');
    }
    
   
  
    
}

?>