<?php get_header(); ?>
    <main class="container">

            <article class="post page" id="pageid-<?php the_ID(); ?>">

                <h1>404</h1>

                <p>It looks like nothing was found at this location. Maybe try a search?</p>

                <p><?php get_search_form(); ?></p>

            </article>

    </main> <!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>