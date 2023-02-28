<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="headerPage">
                <div class="frontpageTitre">
                        <h1><?php the_title(); ?></h1>
                </div>
        </div>

        <?php the_content(); ?>

<?php endwhile;
endif; ?>
<?php get_footer(); ?>