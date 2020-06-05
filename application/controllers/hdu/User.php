<?php
class User extends CI_Controller{
    
    
    public function homepage(){
        frame($this,'_hdu/user/homepage');
    }
    
    public function homepageAdmin(){
        frame($this,'_hdu/user/homepageAdmin');
    }
   
  
    
}

?>