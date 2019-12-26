<?php 
$folder = 'public/img/gallery/';
$handle = opendir($folder);
$pictures = array();
while($file = readdir($handle)){
    if($file !== '.' && $file !== '..' && strpos($file,"nsfw") === FALSE){
        $pictures[] = $folder.$file;
    }
}
sort($pictures);
?>

<!-- Slick Image Slider -->
<div class="row">
    <div class="large-12 columns">     
        <div class="gallery-main-container">   
            <ul class="gallery-main no-bullet">
                <?php
                    foreach ($pictures as $pic) {
                        echo '<li><center><img class="lazyload" data-src="'.$pic.'" /></center></li>';
                    }
                ?>
            </ul>
        </div>
        <ul class="gallery-nav no-bullet">
            <?php
                foreach ($pictures as $index => $pic) {
                    echo '<li><center ><a data-slide-index="'.$index.'" ><img class="lazyload" style="height:100px" data-src="'.$pic.'" /></a></center></li>';
                }
            ?>
        </ul>
        
        <a href="<?php echo $this->config('base_url'); ?>" class="button expand radius"><strong>Go To The Home Page</strong></a>
    </div>
</div>

<!-- Contact Panel -->
<div class="row">
    <div class="large-12 columns">

        <div class="panel">
            <h4>Like what you see?</h4>

            <div class="row">
                <div class="medium-9 columns">
                    <p>
                        Send us a message! Your <strong>free</strong> consultation is just a click away.
                    </p>
                </div>
                <div class="medium-3 columns">
                    <a href="#" data-reveal-id="contactModal" class="radius button expand">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
