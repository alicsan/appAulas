 <?php
class Msg extends CI_Controller {
    public function index() {
        session_start();
        $data['texto'] = isset($_SESSION['_msg']['texto'])?$_SESSION['_msg']['texto']:'No hay mensajes';
        $data['uri'] = isset($_SESSION['_msg']['uri'])?$_SESSION['_msg']['uri']:'';
        
        unset ($_SESSION['_msg']);
        frame($this,'_templates/message',$data);
    }
    
    public function PRG($mensaje,$uri,$severity){
        
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['_msg']['texto'] = $mensaje;
        $_SESSION['_msg']['uri'] = $uri;
        $_SESSION['_msg']['severity'] = $severity;
        redirect(base_url() . '_templates/info');
    }
}
?>