<?php get_header(); ?>
    <main>
        <article class="entry-content">
            <header class="main-title">                            
                <h1 class="container">
                    <?php the_title(); ?>
                </h1> 
            </header>
            <div class="container">
                <?php the_content(); ?>
            </div>  
        </article>
        <nav class="container flex">
            <div><?php previous_post_link('<i class="fa-solid fa-arrow-left"></i> %link'); ?></div>
            <div><?php next_post_link('%link <i class="fa-solid fa-arrow-right"></i>'); ?></div>
        </nav>
        <div class="container comment-template">
    <?php comments_template(); ?>
</div>
    </main>
<?php get_footer(); ?>