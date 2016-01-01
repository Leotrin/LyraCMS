<div class="row-fluid">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">LyraCMS</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav pull-right">
          <li <?php if(isset($select) && $select=="home"){ echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>">HOME</a></li>
          <li <?php if(isset($select) && $select=="blog"){ echo 'class="active"'; } ?>><a href="<?php echo base_url('blog'); ?>">BLOG</a></li>
          <li <?php if(isset($select) && $select=="about"){ echo 'class="active"'; } ?>><a href="<?php echo base_url('about'); ?>">ABOUT</a></li>
          <li <?php if(isset($select) && $select=="contact"){ echo 'class="active"'; } ?>><a href="<?php echo base_url('contact'); ?>">CONTACT</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
</div>