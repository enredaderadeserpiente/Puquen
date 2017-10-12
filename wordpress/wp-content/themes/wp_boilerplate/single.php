<?php get_header() ?>

<?php $destacada = get_the_post_thumbnail_url( ) ?>

<div class="imagen_posts" style="background-image:url( <?php echo $destacada ?>)">
	<div class="titulo_posts container">
			<h2><?php the_title() ?></h2>
	</div>

</div>
<div class="parrafo">
	<div class="container">
			<?php if ( have_posts() ) { ?>
			<?php while ( have_posts() ) { ?>
				<?php the_post(); ?>
				<div class="fecha">
					<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
				</div>
				<?php the_content() ?>

			<?php } ?>
		<?php } else { ?>
			<!-- Content -->
		<?php } wp_reset_query(); ?>
	</div>
</div>




<?php get_footer() ?>
