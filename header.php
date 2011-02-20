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
    <!-- Add "maximum-scale=1" to fix the Mobile Safari auto-zoom bug on orientation changes,
      but keep in mind that it will disable user-zooming completely. Bad for accessibility. -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

    <meta name="google-site-verification" content="aWuDaB5rzKtvmM5QcmzMIJjpXxs-HQ7lOIn51p5szT0" />
    <meta name="msvalidate.01" content="382D4F2780809E965531E6BB3DCD22DD" />
    <meta name="y_key" content="c7387670d444e579" />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?>" href="http://feeds.feedburner.com/hiroyukishinohara/RpOL" />
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
        <div class="floatwrapper">
          <div class="floatleft">
            <img src="<?php bloginfo('template_directory');?>/images/logo.jpg" alt="Hiro SHINOHARA" />
          </div>
          <p>
            I'm writing code, blogging about web tech startups in Japan and around Asia, hosting a podcast show called <a href="http://messa.tv/" target="_blank">messa.tv</a>. Founder/CEO of <a href="http://www.messaliberty.com/" target="_blank">messaliberty Inc</a> based in Japan. Working around Osaka, Kyoto and Tokyo. More <a href="http://about.me/mlhshino/">about me</a>.
          </p>
        </div>
      </div>
    </header>