<?php get_header(); ?>
<?php if(get_theme_mod('showSlider',true)){
	do_action('bbsSlider');
} ?>
<?php if(get_theme_mod('showJumbotron',true)){
    do_action('bbsJumbotron');
} ?>
<?php if(get_theme_mod('showVantages',true)){
	do_action('bbsVantages');
} ?>
<div class="content-wrapper">
	<div class="container">
		<div class="main-heading">
			<h1><?php the_title(); ?></h1>
		</div>
		<section class="page-content">
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</section>
	</div>
</div>
<?php get_footer(); ?>
