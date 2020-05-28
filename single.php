<?php get_header(); ?>
    <main class="container">

        <?php while (have_posts()) : the_post();?>

            <h1><?php the_title();?></h1>
            <artcle class="post page" id="pageid-<?php the_ID(); ?>">
                <?php the_content('Подробнее' ); ?>
            </artcle>

            <?php if ( comments_open() || get_comments_number() ) { ?>
                <div class="comments-wrap">
                    <?php comments_template(); ?>
                </div>
            <?php }
        endwhile; ?>

    </main> <!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>