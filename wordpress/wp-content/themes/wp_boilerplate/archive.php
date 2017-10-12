<?php get_header() ?>
<div class="blog_todo" style="background-image:url('<?php echo get_stylesheet_directory_uri('')?>/assets/images/wovcalipso.png ?>')" >
  <section class="blog container">
    <div class="row">
      <?php

    while (have_posts()): the_post();
      ?>
        <div class="col-xs-12 col-sm-6 col-md-4 entrada">
          <?php the_post_thumbnail( "entrada", array('class' => "img-responsive" ) );?>
          <div class="contenido_entrada">
            <?php the_title("<h3>","</h3>")?>
            <p><?php echo excerpt(30) ?></p>
            <a href="<?php the_permalink()?>" class="btn btn-success">Leer más</a>

          </div>
        </div>
      <?php
      endwhile;
      ?>
    </div>
  </section>

  <section class="categorias_blog container">
    <!-- <h2 class="text-center por_categoria">Por categoria: </h2> -->
    <?php $categorias = get_categories();?>
    <div class="row">
      <?php foreach($categorias as $categoria) { ?>
        <div class="col-xs-6 col-md-6 col-lg-2 categoria text-center">
           <!--  $categoria -> description -->

          <a href="<?php echo get_category_link($categoria -> cat_ID )?> " class="btn btn-success">
            <?php echo $categoria -> name; ?>
          </a>
        </div>
      <?php } ?>
    </div>
  </section>
</div>
<?php get_footer() ?>
