<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper noprint">
    	<div class="page-sidebar-wrapper">
    		<div class="page-sidebar navbar-collapse collapse">
    			<!-- BEGIN SIDEBAR MENU -->
    			<ul class="page-sidebar-menu">
                    <li class="sidebar-toggler-wrapper">
                        <div class="logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo get_ru_app_logo() ?>" border="0" alt="Check path to application logo in theme cutomiser" title="<?php bloginfo( 'name' ); ?>">
                            </a>
                        </div>          
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        <div class="sidebar-toggler"></div>
                        <div class="clearfix"></div>
                        <!-- END SIDEBAR TOGGLER BUTTON -->
                    </li>
                    <!--BEGIN WORDPRESS MENU LOOP-->
                    <?php 
                        wp_nav_menu( 
                            array(
                                'items_wrap' => '%3$s',
                                'container' => false,
                                'walker' => new AV_Rukovoditel_Navwalker,  
                            )
                        );
                    ?>
                    <!--END WORDPRESS MENU LOOP-->                
                </ul>
                <!-- END SIDEBAR MENU -->
    		</div>
    	</div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">			
			<div id="ajax-modal" class="modal fade" tabindex="-1" data-replace="true" data-keyboard="false" data-backdrop="static" data-focus-on=".autofocus"></div>			
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
            	<!-- BEGIN WIDGET PANEL -->
                <div class="theme-panel hidden-xs hidden-sm">
                	<div class="toggler" title="Configure Theme">
                		<i class="fa fa-bars"></i>
                	</div>
                	<div class="theme-options">
                	    <div class="theme-option theme-colors clearfix">
                            <?php dynamic_sidebar( 'modal' ); ?>    
                		</div>
                    </div>
                </div>
                <!-- END WIDGET PANEL -->