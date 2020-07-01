<?php
/**
 * The main template file
 * Ruckovoditel (www.rukovodotiel.net) wordpress theme by antevasin (www.antevasin.app)
 * @package rukovoditel 
 */

get_header();
get_sidebar();
?>
<!-- BEGIN WORDPRESS CONTENT LOOP -->
<div class="wp-content">
    <?php
    if ( is_404() ) {
        include ( '404_custom.php' );
    } else {
        if ( have_posts() ) :
        
        if ( is_home() && ! is_front_page() ) :
        ?>
        <header>
            <h3 class="page-title screen-reader-text"><?php single_post_title(); ?></h3>
        </header>
        <?php
        endif;
        
        /* Start the Loop */
        while ( have_posts() ) :
            the_post();
            
            /*
            * Include the Post-Type-specific template for the content.
            * If you want to override this in a child theme, then include a file
            * called content-___.php (where ___ is the Post Type name) and that will be used instead.
            */
            get_template_part( 'template-parts/content', get_post_type() );
            
        endwhile;
        
            the_posts_navigation();
        
        else :
        
            get_template_part( 'template-parts/content', 'none' );
        
        endif;
        comments_template();
    }
    ?>
</div>
  <!-- END WORDPRESS CONTENT LOOP -->		                       
<?php get_footer();
      