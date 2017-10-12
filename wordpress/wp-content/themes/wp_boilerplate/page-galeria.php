<?php get_header() ?>

<div class="galeria" style="background-image:url('<?php echo get_stylesheet_directory_uri('')?>/assets/images/wovamarillo.png ?>')" >
  <h2 class="text-center">Galería</h2>
  <?php the_post() ?>

  <?php the_content(); ?>
</div>

<?php get_footer() ?>
