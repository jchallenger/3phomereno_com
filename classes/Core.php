<?php 
require_once('My_object.php');
require_once('My_controller.php');

class Core extends My_object {
    /*
    The following function will strip the script name from URL i.e.  http://www.something.com/search/book/fitzgerald will become /search/book/fitzgerald
    */
    private function getCurrentUri()
    {
        $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
        $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
        if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
        $uri = trim($uri, '/');
        return $uri;
    }

    public function route($goto_route = null){
        $cur_controller_name = $this->routes['default_controller'];
        if($goto_route === null){
            $uri_string = $this->getCurrentUri();
        }
        else{
            $uri_string = $goto_route;
        }
        $uri = explode('/', $uri_string);


        if(strlen($uri_string)){
            //var_dump($this->routes);
            //echo "<br>";
            //var_dump($uri);
            //echo "<br>";

            if(key_exists($uri[0], $this->routes)){
                $cur_controller_name = $this->routes[$uri[0]];
                //echo "Controller: " . $cur_controller_name . "<br>";
                if(strpos($cur_controller_name, '/')){
                    $uri = explode('/', $cur_controller_name);
                    $cur_controller_name = $this->routes[$uri[0]];
                }

                include_once($this->config('controller_folder') . '/' . $cur_controller_name);
                $class = ucfirst($uri[0]);
                $controller = new $class();

                $method = 'index';
                if(isset($uri[1])){
                    $method = $uri[1];
                }

                if(method_exists($controller, $method)){
                    call_user_func_array(array($controller, $method), array_slice($uri, 2));
                }
                else{
                    // Method not found
                    $this->route($this->routes['404_not_found']);
                }
            }
            else if(key_exists($uri_string, $this->routes)){
                //echo "Custom Route " . $uri_string;
                return $this->route($this->routes[$uri_string]);
            }
            else{
                //echo "404 Not Found<br>";
                $this->route($this->routes['404_not_found']);
            }
        }
        else{
            // default controller
            //echo (($uri_string));
            $this->route($this->routes['default_controller']);
        }
    }

    public function magic(){
        $this->route();
    }
}

static $instance;
function get_instance(){
    if(!isset($instance)){
        $instance = new Core();
    }
    return $instance;
}
