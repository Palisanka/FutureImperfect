<!DOCTYPE html>

<html>

<head>

  <!-- TITRE DE LA PAGE  -->
  <title>
    <?php bloginfo('name') ?>
    <?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') // Si la page est introuvable (is_404()=true) alors traduit "Not Found" ?>
    <?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') // Sinon si home page alors inclut la description ?>
    <?php else : ?><?php wp_title() //Sinon affiche le titre ?>
    <?php endif ?>
  </title>

  <!-- METADATA  -->
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- Pour les stats -->

  <?php wp_head(); ?>

  <!-- VIEWPORT -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- LINK -->
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/FutureImperfect/assets/sass/main.css" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />



  <!-- SCRIPTS -->
  <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/skel.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/util.js"></script>
  <!--[if lte IE 8]><script src="<?php bloginfo('template_url'); ?>/assets/js/ie/respond.min.js"></script><![endif]-->
  <script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>

  <?php //wp_get_archives('type=monthly&format=link'); ?>
  <?php //comments_popup_script(); <?php wp_head(); ?>

</head>

<!-- BODY -->
<body>

  <!-- Wrapper -->
    <div id="wrapper">

        <header id="header">
          
          <!-- Nom du blog -->
          <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
          
          <!-- Affiche le bouton d'admin -->
          <?php if (current_user_can("manage_options")) : ?>
                 <a href="<?php echo bloginfo("url") ?>/wp-admin/">Admin</a>
          <?php endif; ?>

            <!-- Header-Menu Customizable-->
          <nav class="links">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
          </nav>

          <!-- Partie de droite -->
          <nav class="main">
            <ul>
              <li class="search">
                <a class="fa-search" href="#search">Search</a>
                  <?php include(TEMPLATEPATH . '/searchform.php'); ?>
              </li>
              <li class="menu">
                <a class="fa-bars" href="#menu">Menu</a>
              </li>
            </ul>
          </nav>
        
        </header>

        <!-- Menu -->
          <!-- Ajoute la sidebar customisable par les plugins -->
          <?php dynamic_sidebar('hidden'); ?>
