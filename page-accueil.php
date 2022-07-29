<?php
/*
Template Name: Page d'accueil
*/
 get_header(); ?>
    <main>
        <article>
            <div class="container entry-content">
                <?php the_content(); ?>
            </div>
        </article>
        <!-- Derniers articles du blog -->
        <section class="container">
            <h2><?php _e("Derniers articles du blog: "); ?></h2>
        <div class="flex">
        <?php
        $the_query = new WP_Query(array('cat' => 6,'showposts'=>3));

        while ($the_query->have_posts()) : $the_query->the_post();
        ?>

        <?php get_template_part('template-parts/liste','articles'); ?>


        <?php endwhile; ?>
    </div>

        </section>
        <!-- Fin derniers articles du blog -->
        <?php get_sidebar(); ?>
    </main>
<?php get_footer(); ?>