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
		<section class="page-content">
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="post-excerpt-item-wrap mb-md-4 mb-2">
                <div class="post-excerpt-item-meta">
                    <div class="post-excerpt-item-meta-date">
                        <?=date('d-m-Y', get_the_time('U'));?>
                    </div>
                </div>
                <h3>
                    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h3>
                <div>
		            <?php the_content('Читать'); ?>
                </div>
            </div>
			<?php endwhile;
				the_posts_pagination([
                    'show_all' => true,
                    'prev_text'    => '<i class="fas fa-angle-left"></i>',
                    'next_text'    => '<i class="fas fa-angle-right"></i>',
                ]);
			endif; ?>
			<?php if ( is_user_logged_in() ): ?>
                <a href="<?=admin_url('post-new.php');?>" class="btn btn-bss btn-info">Новая запись</a>
			<?php endif;?>
		</section>
	</div>
</div>
<?php get_footer(); ?>
