<?php get_header(); ?>
<div class="content-wrapper">
    <div class="container">
        <div class="main-heading">
            <h1><?php the_title(); ?></h1>
        </div>
        <section class="page-content">
            <?php if (have_posts()):
                while (have_posts()):
                    the_post();
                    echo "<h3>";
	                the_title();
	                echo "</h3>";
                    the_content();
                endwhile;
            endif; ?>
        </section>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>