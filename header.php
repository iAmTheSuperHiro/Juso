<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

    <meta name="viewport" content="width=device-width; initial-scale=1"/>
    <!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>

    <meta name="google-site-verification" content="aWuDaB5rzKtvmM5QcmzMIJjpXxs-HQ7lOIn51p5szT0" />
    <meta name="msvalidate.01" content="382D4F2780809E965531E6BB3DCD22DD" />
    <meta name="y_key" content="c7387670d444e579" />

    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>
  </head>


  <body>
    <header id="banner" class="body">
      <div class="container">
        <div id="title" class="floatwrapper">
          <hgroup class="floatleft">
            <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
            <h2><?php bloginfo('description'); ?></h2>
          </hgroup>
          <nav class="floatright">
            <ul>
              <li><a href="http://www.hiroyukishinohara.com/">English &raquo;</a></li>
              <li><a href="http://jp.hiroyukishinohara.com/">Japanese &raquo;</a></li>
            </ul>
          </nav>
        </div>
        <nav id="mainnav">
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">News Letter</a></li>
            <li><a href="#">Webminars</a></li>
            <li><a href="#">Hire Hiro</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Compnay</a></li>
          </ul>
        </nav>
      </div>
    </header>