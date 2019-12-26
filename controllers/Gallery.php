<?php

class Gallery extends My_controller{
    public function index(){
        $this->add_script('third_party/jquery.maskedinput.js');
        $this->add_script('third_party/bxslider/jquery.bxslider.min.js');
        $this->add_style( 'third_party/bxslider/jquery.bxslider.css');

        $this->add_script('js/gallery.js');
        $this->template('gallery');
    }
}
