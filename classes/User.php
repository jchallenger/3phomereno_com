<?php
include_once 'My_object.php';

class User extends My_object{
    public $id = null;
    public $name = null;
    public $email = null;
    public $level = 0;

    function __construct(){

    }
    public function getFromSession(){
        if($this->session->get('current_user')){
            echo "User Exists";
        }
    }

}
