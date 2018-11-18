<?php get_header(); ?>
    <main id="content" class="content">

        <?php while (have_posts()) : the_post();?>

            <h1><?php the_title();?></h1>
            <artcle>
                <?php the_content('More' ); ?>
            </artcle>

            <?php if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
        endwhile; ?>

    </main> <!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>