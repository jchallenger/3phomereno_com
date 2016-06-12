<?php
class My_Controller extends CI_Controller
{
    public $data = [];
    private $scripts = [];
    private $stylesheets = [];

    public $default_view = "";
    public $template = "_template";

    public function __construct() {
        parent::__construct();
        $this->load->helper('tag');
        $this->load->helper('url');

        $this->data = array(
            'view' => $this->default_view,
            'include_nav' => true,
            'include_footer' => true,
            'php_to_js'     => array(
                "base_url" => base_url(),
                "api_url" => $this->config->item('api_url')
                )
            );

        $this->scripts = array(
            'https://code.jquery.com/jquery-1.12.4.min.js',

            'third_party/tether/js/tether.min.js',
            'third_party/bootstrap/js/bootstrap.min.js',
            'third_party/sweetalert2/sweetalert2.min.js',

            'js/sitewide.js'
           );
        $this->stylesheets = array(
            'third_party/tether/css/tether.min.css',
            'third_party/bootstrap/css/bootstrap.css',
            'third_party/sweetalert2/sweetalert2.min.css',

            'css/custom.css'
           );
    }

    public function add_script($scr){
        if($scr && !in_array($scr, $this->scripts)){
            $this->scripts[] = $scr;
        }
    }
    public function add_stylesheet($sheet){
        if($sheet && !in_array($sheet, $this->stylesheets)){
            $this->stylesheets[] = $sheet;
        }
    }

    public function display_page($snippet_name, $data = null, $header_code = 200){
        $this->output->set_status_header($header_code);

        $output_data = $this->data;
        if($data){ $output_data = array_merge($this->data, $data); }

        $output_data['scripts'] = $this->scripts;
        $output_data['stylesheets'] = $this->stylesheets;
        $output_data['view'] = $snippet_name;

        echo $this->load->view($this->template, $output_data, TRUE);
        die();
    }
    
    public function display_json($data, $header_code = 200){

        $this->output
            ->set_status_header($header_code)
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }
}
