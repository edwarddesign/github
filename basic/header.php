<!DOCTYPE html>
<html>
<head>
  <title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href='https://fonts.googleapis.com/css?family=Federo' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Timmana' rel='stylesheet' type='text/css'>

  <?php wp_head();?>
</head>
<body>
  <nav class=" navbar navbar-inverse navbar-static-top"  style="background-color:#000;">
    <div class="container"  style="background-color:#000;"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>/home">My Beats Music</a>
    </div>

    <!--toggle -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php bloginfo('url'); ?>/home">Home</a>
        <li><a href="<?php bloginfo('url'); ?>/about">About</a>
        <li><a href="<?php bloginfo('url'); ?>/contact">Contact</a>
      </ul>
      
      <form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="form-group">
          <input type="text" class="form-control"  placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" id="s"/>
        </div>
        <button type="submit" class="btn btn-default">Go</button>
      </form>




    </div><!-- /.navbar-collapse -->
  </div>
</nav>




  





