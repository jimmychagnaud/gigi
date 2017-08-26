<?php get_header();?>
<div id="primary" class="content-area">
  <div id="header_classic" class="container-fluid">

  </div>
</header>
<main id="main" class="site-main" role="main">
    <?php while(have_posts()) : the_post(); ?>
    <div id="content_homepage">
      <div class="container">
        <?php
            the_content();
            endwhile;
            wp_reset_query();
      ?>
      <div id="crea_homepage">
        <div class="container">
          <div class="row">
            <?php
            if( have_rows('ajouter_des_images') ):
              while ( have_rows('ajouter_des_images') ) : the_row();
            ?>
            <div class="col-md-3">
              <div class="photo" style="background-image: url(<?php echo the_sub_field('image'); ?>)"></div>
            </div>
            <?php
                endwhile;
              endif;
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer();?>
