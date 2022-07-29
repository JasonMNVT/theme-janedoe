<footer class="site-footer">
        <div class="container flex">
            <div class="footer1 flex">
                <small>©<?php the_time('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> fait par Jason M</small>
                <small><i class="fa-solid fa-envelope"></i> <a href="mailto:jane.doe@gmail.com">jane.doe@gmail.com</a></small><br>
                <small><p>(Ceci est un site fictif réalisé dans le cadre d'une formation)</p></small>
            </div>
            <div class="footer2 flex">
            <?php wp_nav_menu(array ('theme_location' => 'pied','container'=>'nav','container_class'=>'footer-nav'));
                wp_nav_menu(array ('theme_location' => 'reseaux','container_class'=>'social-nav')); ?>
            </div>
            
            
        </div>
    </footer>
<?php wp_footer(); ?>