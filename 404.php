<?php get_header(); ?>
    <main class="container">

            <article class="post page" id="pageid-<?php the_ID(); ?>">

                <h1>404. Страница не найдена</h1>

                <p>
                    Страницу, которую ты ищешь,<br>
                    найти невозможно,<br>
                    но ведь не счесть других.
                </p>

                <p><?php get_search_form(); ?></p>

            </article>

    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>