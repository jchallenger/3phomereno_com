<footer id="footer" class="row">
    <div class="large-12 columns">
        <hr />
        <div class="row">
            <div class="small-4 columns">
                <p></p>
            </div>
            
            <div class="small-4 columns">
                <center>
                    <a href="<?php echo $this->config('base_url'); ?>"><img src="<?php echo $this->config('base_url'); ?>public/img/3P_Logo_512.png" alt="3P" style="height: 60px" /></a>
                </center>
            </div>
            
            <div class="small-4 columns">
                <p class="text-right" >
                    © Copyright 2020
                </p>
            </div>

        </div>
    </div>
</footer>

<?php $this->view('contact_modal'); ?>
