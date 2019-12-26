<?php

class My_session {
    private $session_vars;

    function __construct(){
        $this->pullSession();
    }

    private function pullSession(){
        if(session_status() !== PHP_SESSION_ACTIVE){
            ini_set('session.save_path',getcwd(). '/sessions');
            session_start();
        }
        $this->session_vars = $_SESSION;
    }

    /**
     * Set session var
     */
    public function set($var, $value = undefined){
        $var = strtolower($var);

        $_SESSION[$var] = $value;
        $this->pullSession();
        return $value;
    }

    public function get($var){
        $var = strtolower($var);
        return (key_exists($var, $this->session_vars))? $this->session_vars[$var] : false;
    }
}

static $session_class;
function get_session(){
    if(!isset($session_class)){
        $session_class = new My_input();
    }
    return $session_class;
}
