<header id="navbar" role="banner" class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

       <a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $path_logo; ?>" alt="<?php print t('Home'); ?>" />
       </a>

      <?php if (!empty($primary_nav)): ?>
        <div class="nav-collapse collapse">
          <nav role="navigation">
            <?php if (!empty($primary_nav)): ?>
              <?php print render($primary_nav); ?>
            <?php endif; ?>
            <ul class="menu nav pull-right">
              <li><a href="#"><img src="<?php print $path_mlogos ."/facebook.png" ?>" /></a></li>
              <li><a href="#"><img src="<?php print $path_mlogos ."/twet.png" ?>" /></a></li>
            </ul>
          </nav>
        </div>
      <?php endif; ?>
    </div>
  </div>
</header>

<div id="back-hero">
  <div class="main-container container">
      <div class="row">
          <section class="span12">  
              <div class="highlighted hero-unit">
                  <div class="front-logo"><img  src="<?php print $path_logo ?>"></div>
                  <?php print render($page['highlighted']); ?>
              </div>
          </secction>
      </div>
  </div>
</div>

<div class="main-container container">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->


   <div class="row">

    <section class="span12">  
      
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      
      <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
     
      <?php print render($page['content']); ?>
    </section>

  </div>
  <footer class="footer container">
    <div class="row">
      <div id="logos" class="span12">
        <ul>
          <li><a href="#"><img src="<?php print $path_mlogos ."/logos/drupal.png" ?>" /></a></li>
          <li><a href="#"><img src="<?php print $path_mlogos ."/logos/joomla.png" ?>" /></a></li>
          <li><a href="#"><img src="<?php print $path_mlogos ."/logos/ajax.png" ?>" /></a></li>
          <li><a href="#"><img src="<?php print $path_mlogos ."/logos/php.png" ?>" /></a></li>
          <li><a href="#"><img src="<?php print $path_mlogos ."/logos/mongodb.png" ?>" /></a></li>
          <li><a href="#"><img src="<?php print $path_mlogos ."/logos/mysql.png" ?>" /></a></li>
        </ul>
      </div>
    </div>
    <?php print render($page['footer']); ?>
  </footer>
</div>
