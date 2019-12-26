<?php

class Home extends My_controller{
    public function not_found(){
        $this->template('lost');
    }

    public function index(){
        $this->add_script('third_party/jquery.maskedinput.js');
        $this->add_script('third_party/bxslider/jquery.bxslider.min.js');
        $this->add_style( 'third_party/bxslider/jquery.bxslider.css');

        $this->add_script('js/home.js');
        $this->template('home');
    }
    public function wat($int){
        echo $int . " + 3 = " . ($int+3);
    }
}
