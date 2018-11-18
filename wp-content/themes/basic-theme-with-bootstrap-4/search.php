<?php
/*
Template Name: Search
*/
?>
<?php get_header(); ?>
    <main class="container">
	    <h1><?php echo 'Результаты поиска: ' . '<span>' . get_search_query() . '</span>'; ?></h1>
    <?php
    if (have_posts()) :
	    while (have_posts()) : the_post();
		    ?>
		    <div id="posts">
			    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
			    <p><?php the_excerpt() ?></p>
			    <div>Дата добавления: <?php the_date() ?></div>
		    </div>
	    <?php endwhile; ?>
    <?php
    else :
	    echo "Sorry, but we find nothing!";
    endif;
    ?>

    </main> <!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
