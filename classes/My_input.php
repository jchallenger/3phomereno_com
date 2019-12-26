<?php

class My_input {
    protected function fetch_from_arr(&$arr, $index = null){
        $output = null;

        if(is_array($index)){
            $output = array();
            foreach ($index as $key) {
                $output[$key] = $this->fetch_from_arr($arr, $key);
            }
            return $output;
        }


        if(isset($arr[$index])){
            $output = $arr[$index];
        }
        else if(($count = preg_match_all('/(?:^[^[\[]+)|\[[^]]]*\]/', $index, $matches)) > 1){
            $output = $arr;
            for ($ii=0; $ii < $count; $ii++) { 
                $key = trim($matches[0][$ii], '[]');
                if($key === ''){
                    break;
                }

                if(isset($output[$key])){
                    $output = $output[$key];
                }
                else{
                    return NULL;
                }
            }
        }

        return $output;
    }


    public function get($var_name = null){
        return $this->fetch_from_arr($_GET, $var_name);
    }
    public function post($var_name = null){
        return $this->fetch_from_arr($_POST, $var_name);
    }

    public function get_post($indx){
        return (isset($_GET[$indx]))? $this->get($indx) : $this->post($indx);
    }
    public function post_get($indx){
        return (isset($_POST[$indx]))? $this->post($indx) : $this->get($indx);
    }
}

static $input_class;
function get_input(){
    if(!isset($input_class)){
        $input_class = new My_input();
    }
    return $input_class;
}
