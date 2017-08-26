<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
  <script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.2.1.min.js"></script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="container-fluid" id="page">
    <header data-top="background-position: 50% 100%; " data-400="background-position: 50% 70  %; ">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-menu-collapse" aria-expanded="false">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="top-menu-collapse">
          <div class="container">
            <?php wp_nav_menu([
              'theme_location' => 'Top',
              'menu_id' => 'top-menu',
              'menu_class' => 'nav navbar-nav'
            ]) ?>
          </div>
        </div>
      </nav>
