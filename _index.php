<?php
/**
 * The main template file
 * Ruckovoditel (www.rukovodotiel.net) wordpress theme by antevasin (www.antevasin.app)
 * @package rukovoditel 
 */

get_header();
?>
<div class="page-content-wrapper">
    <sidebar class="page-sidebar-wrapper">
                    <div class="page-sidebar navbar-collapse collapse" style="">
                        <!-- BEGIN SIDEBAR MENU -->
                            <ul class="page-sidebar-menu">
                                <li class="sidebar-toggler-wrapper">
                                    <div class="logo">
                                        <a href=""><img src="https://distributed-computing.co.nz/ru/uploads/app_logo_1586577455.png" border="0" title="Antevasin Projects"></a>
                                    </div>          
                                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                                    <div class="sidebar-toggler"></div>
                                    <div class="clearfix"></div>
                                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                                </li>
                                <li class="">
                                    <a href=""><i class="fa fa-home" aria-hidden="true"></i> <span class="title ">Link 1</span></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-comments" aria-hidden="true"></i> <span class="title ">Link 2</span></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-sitemap" aria-hidden="true"></i><span class="title submenu">Link 3 with Children</span><span class="arrow "></span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href=""><span class="title ">Under Link 3</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        <!-- END SIDEBAR MENU -->
                    </div>   
        <!--<div class="page-sidebar navbar-collapse collapse">-->
            <ul class="page-sidebar-menu">
                <li class="sidebar-toggler-wrapper">
                    <div class="logo">
                        <a href="https://distributed-computing.co.nz/ru/index.php?module=dashboard/"><img src="https://distributed-computing.co.nz/ru/uploads/app_logo_1586577455.png" border="0" title="Antevasin Projects"></a>
                    </div>          
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler"></div>
                    <div class="clearfix"></div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
            </ul>                    
            <?php
                wp_nav_menu( 
                    array( 
                        'menu_id' => '',
                        'menu_class' => 'page-sidebar-menu',
                        'container' => 'div',
                        'theme_location' => 'ru_main_menu', 
                        'container_class' => 'page-sidebar navbar-collapse collapse',
                        'walker' => new AV_Rukovoditel_Navwalker,
                        'show_carets' => true,
                        'item_wrap'  => '',
                    )
                );
            ?>         
            <ul class="page-sidebar-menu want">
                <li class="sidebar-toggler-wrapper want">
                    <div class="logo">
                        <a href="https://distributed-computing.co.nz/ru/index.php?module=dashboard/"><img src="https://distributed-computing.co.nz/ru/uploads/app_logo_1586577455.png" border="0" title="Antevasin Projects"></a>
                    </div>          
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler want"></div>
                    <div class="clearfix want"></div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <?php 
                    wp_nav_menu( 
                        array(
                            'container' => '',
                            'items_wrap' => '%3$s',
                            'walker' => new AV_Rukovoditel_Navwalker,
                        )
                    );
                ?>
            </ul>


                    <div class="page-sidebar navbar-collapse collapse" style="">
                        <!-- BEGIN SIDEBAR MENU -->
                            <ul class="page-sidebar-menu">
                                <li class="sidebar-toggler-wrapper">
                                    <div class="logo">
                                        <a href="https://distributed-computing.co.nz/ru/index.php?module=dashboard/"><img src="https://distributed-computing.co.nz/ru/uploads/app_logo_1586577455.png" border="0" title="Antevasin Projects"></a>
                                    </div>          
                                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                                    <div class="sidebar-toggler"></div>
                                    <div class="clearfix"></div>
                                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                                </li>
                                <li class="">
                                    <a href="https://distributed-computing.co.nz/ru/index.php?module=dashboard/"><i class="fa fa-home" aria-hidden="true"></i> <span class="title ">Dashboard</span></a>
                                </li>
                                <li>
                                    <a href="https://distributed-computing.co.nz/ru/index.php?module=reports/view&amp;reports_id=185"><i class="fa fa-comments" aria-hidden="true"></i> <span class="title ">Discussions</span></a>
                                </li>
                                <li>
                                    <a href="https://distributed-computing.co.nz/ru/index.php?module=entities/"><i class="fa fa-sitemap" aria-hidden="true"></i><span class="title submenu">Application Structure</span><span class="arrow "></span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="https://distributed-computing.co.nz/ru/index.php?module=entities/entities"><span class="title ">Entities List</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        <!-- END SIDEBAR MENU -->
                    </div>
                 
                      
        <?php 
        $arg1 = 'test arg 1 - yay';
        $arg2 = 'test arg 2 - yay';
        echo apply_filters('test_filter', 'This is the test filter hook', $arg1, $arg2, $arg3, $arg4); ?>
        <!--</div>-->
        <?php get_sidebar(); ?>
    </sidebar>
	<content id="primary" class="page-content">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
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
		?>
        
	</content>
</div>

<?php

get_footer();
