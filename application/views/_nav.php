<nav class="navbar navbar-light bg-faded">
  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
    &#9776;
  </button>
  <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">OuiDance</a>
    
    <ul class="nav navbar-nav">

      <?php $active = ($this->router->fetch_class() == 'home' )? 'active' : false; ?>
      <li class="nav-item <?php echo $active; ?>">
        <a class="nav-link" href="<?php echo base_url(); ?>home">Home <?php if($active) { ?><span class="sr-only">(current)</span><?php } ?></a>
      </li>
      <?php $active = ($this->router->fetch_class() == 'schedule' )? 'active' : false; ?>
      <li class="nav-item <?php echo $active; ?>">
        <a class="nav-link" href="<?php echo base_url(); ?>schedule">Schedule <?php if($active) { ?><span class="sr-only">(current)</span><?php } ?></a>
      </li>
      <?php $active = ($this->router->fetch_class() == 'offerings' )? 'active' : false; ?>
      <li class="nav-item dropdown <?php echo $active; ?>">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Offerings <?php if($active) { ?><span class="sr-only">(current)</span><?php } ?></a>
	    <div class="dropdown-menu">
	      <a class="dropdown-item" href="<?php echo base_url(); ?>offerings/yoga">Action</a>
	      <a class="dropdown-item" href="<?php echo base_url(); ?>offerings/dance">Another action</a>
	      <a class="dropdown-item" href="<?php echo base_url(); ?>offerings/fitness">Something else here</a>
	      <div class="dropdown-divider"></div>
	      <a class="dropdown-item" href="#">Separated link</a>
	    </div>
      </li>
      <?php $active = ($this->router->fetch_class() == 'pricing' )? 'active' : false; ?>
      <li class="nav-item <?php echo $active; ?>">
        <a class="nav-link" href="<?php echo base_url(); ?>pricing">Pricing <?php if($active) { ?><span class="sr-only">(current)</span><?php } ?></a>
      </li>
      <?php $active = ($this->router->fetch_class() == 'about' )? 'active' : false; ?>
      <li class="nav-item <?php echo $active; ?>">
        <a class="nav-link" href="<?php echo base_url(); ?>about">About <?php if($active) { ?><span class="sr-only">(current)</span><?php } ?></a>
      </li>
    </ul>
  </div>
</nav>