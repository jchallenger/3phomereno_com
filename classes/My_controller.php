<?php

class My_controller extends My_object {
    public $data;
    public $scripts;
    public $stylesheets;

    public function __construct(){
        parent::__construct();

        $this->data = array(
            'template' => $this->config('template')
            );
        $this->scripts = array(
            'third_party/jquery.js',
            'third_party/lazysizes.js',
            'third_party/modernizr.js',
            'third_party/foundation/foundation.min.js',
            'https://cdn.jsdelivr.net/sweetalert2/4.0.7/sweetalert2.min.js',
            'js/site_wide.js'
            );
        $this->stylesheets = array(
            'third_party/foundation/foundation.css',
            'https://cdn.jsdelivr.net/sweetalert2/4.0.7/sweetalert2.min.css',
            'css/custom.css',
            'css/fonts.css'
            );
    }

    protected function view($snippet, $data = null){
        $passed_data = $this->data;
        if($data){
            $passed_data = array_merge_recursive($this->data, $data);
            foreach ($passed_data as $key => $value) {
                if(is_string($key)){
                    ${$key} = $value;
                }
            }
        }

        include($this->config('view_folder') . '/' . $snippet . '.php');
    }

    protected function template($view, $data = null){
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");

        $data['view'] = $view;
        $this->view($this->config('template'), $data);
    }

    public function add_script($script){
        if(!in_array($script, $this->scripts)){
            $this->scripts[] = $script;
        }
    }
    public function add_style($stylesheet){
        if(!in_array($stylesheet, $this->stylesheets)){
            $this->stylesheets[] = $stylesheet;
        }
    }

    public function output_json($obj, $status_code = 200){
        header($this->config('http_status_'.$status_code), true, $status_code );
        echo json_encode($obj, JSON_PRETTY_PRINT);
    }
}
