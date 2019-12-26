<?php

foreach($this->scripts as $script){
    if(strpos($script, '://') === FALSE){
        $script = $this->config('base_url') . 'public/' . $script;
    }
    echo "<script src='" . $script . "'></script>";
}
