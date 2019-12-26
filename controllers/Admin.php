<?php
class Admin extends My_controller{
    public function index(){
        $this->add_script('js/admin.js');
        $this->template('admin_login');
    }
}
