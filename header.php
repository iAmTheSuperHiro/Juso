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

    <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
    
    <?php wp_enqueue_script('jquery'); ?>
    <?php
      wp_enqueue_script(
        'jquery.example',
        '/wp-content/themes/Juso/js/jquery.example.min.js',
        array('jquery'),
        '1.6.0'
      );
    ?>
    <?php
      wp_enqueue_script(
        'myscript',
        '/wp-content/themes/Juso/js/myscript.js',
        array('jquery', 'jquery.example'),
        '1.0'
      );
    ?>
    

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
              <li><a href="http://www.hiroyukishinohara.com/"><img src="<?php bloginfo('template_directory');?>/images/english.png" alt="English" /></a></li>
              <li><a href="http://jp.hiroyukishinohara.com/"><img src="<?php bloginfo('template_directory');?>/images/japanese.png" alt="Japanese" /></a></li>
            </ul>
            <div>
              <form method="get" action="http://www.google.co.jp/custom" target="_top">
                <input type="hidden" name="domains" value="www.hiroyukishinohara.com" />
                <input type="text" name="q" size="20" maxlength="255" value="" />
                <input type="submit" name="sa" value="Search" /><br />
                <input type="hidden" name="client" value="pub-4433430956875979" />
                <input type="hidden" name="forid" value="1" />
                <input type="hidden" name="ie" value="UTF-8" />
                <input type="hidden" name="oe" value="UTF-8" />
                <input type="hidden" name="cof" value="GALT:#008000;GL:1;DIV:#336699;VLC:663399;AH:center;BGC:FFFFFF;LBGC:336699;ALC:0000FF;LC:0000FF;T:000000;GFNT:0000FF;GIMP:0000FF;FORID:1;" />
                <input type="hidden" name="hl" value="ja" />
                <input type="hidden" name="sitesearch" value="www.hiroyukishinohara.com" />
              </form>
            </div>
          </nav>
        </div>
        <!-- <nav id="mainnav">
          <ul>
            <li><a href="<?php bloginfo('url');?>/about">About Hiro</a></li>
            <li><a href="<?php bloginfo('url');?>/"></a></li>
            <li><a href="<?php bloginfo('url');?>/"></a></li>
            <li><a href="<?php bloginfo('url');?>/contact">Contact</a></li>
          </ul>
        </nav> -->
      </div>
    </header>