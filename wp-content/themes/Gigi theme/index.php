<?php get_header(); ?>
<div id="primary" class="content-area">
      <div id="header_homepage" class="container-fluid">
        <div class="container">
          <a class="logo" href="/"><img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" class="img-responsive" alt="Gisele vienet logo"></a>
          <p id="nom">Gisèle<br><span>Vienet</span></p>
        </div>
      </div>
    </header>
	<main id="main" class="site-main" role="main">
    <div id="tickets">
      <p>Pour magnifier vos exterieurs</p>
      <a href="index.php/mes-creations/" class="btn btn-primary">Découvrez mes créations!</a>
    </div>
      <?php while(have_posts()) : the_post(); ?>
    <div id="content_homepage">
      <div class="container">
        <?php
            the_content();
            endwhile;
            wp_reset_query();
        ?>
      </div>
    </div>
	</main>
</div>
<?php get_footer(); ?>
