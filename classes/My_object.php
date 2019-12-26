<?php
include_once 'My_session.php';
include_once 'My_input.php';

include_once 'includes/phpmailer/PHPMailerAutoload.php';

class My_object {
    protected $session;
    protected $input;
    protected $routes;
    protected $mail;
    private $configuration;


    function __construct(){
        $this->session = &get_session();
        $this->input = &get_input();
        $this->mail = new PHPMailer();
        $this->config();
    }

    function config($item = null, $set = null){
        if(!isset($this->configuration)){
            include('includes/config.php');
            include('includes/routes.php');

            $this->configuration = $config;
            $this->routes = $routes;
        }

        if($set !== null){
            // set the config var
        }
        else{
            if(key_exists($item, $this->configuration)){
                return $this->configuration[$item];
            }
        }

        return false;
    }
}
