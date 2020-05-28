<?php get_header(); ?>
    <main class="container">

        <?php while ( have_posts() ) : the_post(); ?>

            <article class="post page" id="pageid-<?php the_ID(); ?>">

                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>

                <div class="entry-box clearfix">

                    <?php do_action( 'basic_after_page_content' );  ?>


            </article>

            <?php

            if ( comments_open() || get_comments_number() ) {
                do_action( 'basic_before_page_comments_area' );
                comments_template();
                do_action( 'basic_after_page_comments_area' );
            }

        endwhile; ?>

    </main> <!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>