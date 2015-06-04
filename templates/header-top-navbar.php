<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand brand-logo" href="<?php echo home_url(); ?>/"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.jpg" ></a>
      <a class="navbar-brand brand-text" href="<?php echo home_url(); ?>/">STEFURA <span>ASSOCIATES</span></a>
    </div>

    <nav class="collapse navbar-left navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROJECTS <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="/category/colleges-universities/">Colleges &amp; Universities</a</li>
          <li><a href="/category/k-12/">K-12</a></li>
          <li><a href="/category/libraries">Libraries</a></li>
          <li><a href="/category/corporate">Corporate</a></li>

          <li><a href="/category/public">Public &amp; Civic</a></li>
          <li><a href="/category/worship">Places of Worship</a></li>

           <li><a href="/projects/residential">Residential</a></li>
           <li><a href="/category/healthcare">Healthcare</a></li>
          <li><a href="/category/senior-living">Senior Living</a></li>
          <li><a href="/full-project-list/">View full project list</a></li>
        </ul>
      </li>
    </ul>
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>

    </nav>
  </div>
</header>
