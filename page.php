<?php get_header(); ?>
    <main>
        <article>
            <header class="main-title">
                <h1 class="container"><?php the_title(); ?></h1>
            </header>
            <div class="container entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    </main>
<?php get_footer(); ?>