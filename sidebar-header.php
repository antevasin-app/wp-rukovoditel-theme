<?php get_search_form(); ?>
<?php if ( is_active_sidebar( 'header' ) ) : ?>
    <i class="arrow-toggler fa fa-angle-down"></i>
    <div class="active-widgets">
        <?php dynamic_sidebar( 'header' ); ?>    
    </div>
<?php endif; ?>
