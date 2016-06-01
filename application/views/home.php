<div class="container">
    
    <div class="row">
        <div class="col-sm-12">
            <div id="home_carousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#home_carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home_carousel" data-slide-to="1"></li>
                    <li data-target="#home_carousel" data-slide-to="2"></li>
                </ol>


                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="http://placehold.it/1110x300" alt="First slide">
                        <div class="carousel-caption">
                            <h3>...</h3>
                            <p>...</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://placehold.it/1110x200" alt="Second slide">
                        <div class="carousel-caption">
                            <h3>...</h3>
                            <p>...</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://placehold.it/1110x400" alt="Third slide">
                        <div class="carousel-caption">
                            <h3>...</h3>
                            <p>...</p>
                        </div>
                    </div>
                </div>


                <a class="left carousel-control" href="#home_carousel" role="button" data-slide="prev">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#home_carousel" role="button" data-slide="next">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>  
        </div>
    </div>

    <?php $this->load->view('_nav'); ?>


</div>
