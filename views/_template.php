<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="google-site-verification" content="qN-HqW7I2En-Lh3Y_SOCuOj19TRncbr-0DzO3YtkmCQ" />
        <title>3P Home Renovations</title>

        <link rel="shortcut icon"   href="<?php echo $this->config('base_url'); ?>favicon.ico" type="image/x-icon">
        <link rel="icon"            href="<?php echo $this->config('base_url'); ?>favicon.ico" type="image/x-icon">

        <?php

        foreach($this->stylesheets as $stylesheet){
            if(strpos($stylesheet, '://') === FALSE){
                $stylesheet = 'public/' . $stylesheet;
            }
            echo "<link rel='stylesheet' href='". $stylesheet ."'>";
        }
        ?>
    </head>
    <body>
        <!-- <img src="img/bgWood.jpg" class="bg" /> -->
        <div class="bg"></div>
        <div class="wrapper">
            <?php 
            $this->view('_header');
            if(isset($view)){
                $this->view($view);
            }
            else{
                echo "The current view is not set";
            }
            ?>
        </div>
        
        <div class="footer">
            <?php $this->view('_footer'); ?>
        </div>

        <?php $this->view('_scripts'); ?>
        
    </body>
</html>
