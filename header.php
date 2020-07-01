<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html <?php language_attributes(); ?> dir="ltr" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport"/>
<meta content="" name="description"/>
<meta content="www.rukovoditel.net" name="author"/>
<meta name="MobileOptimized" content="320">

<link rel="apple-touch-icon" src="https://www.distributed-computing.co.nz/ru_27/images/icons/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" src="https://www.distributed-computing.co.nz/ru_27/images/icons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" src="https://www.distributed-computing.co.nz/ru_27/images/icons/apple-touch-icon-114x114.png">

<link rel="shortcut icon" href="<?php echo get_ru_app_root() ?>favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<!-- BEGIN BODY -->
<body class="page-header-fixed">
    <!-- BEGIN TOP HEADER BAR -->
    <?php 
    $wp_admin_bar = "";
    if ( is_admin_bar_showing() ) {
        $wp_admin_bar = " wp-toolbar";
    }
    $header_class = "header navbar navbar-inverse navbar-fixed-top noprint" . $wp_admin_bar;
    ?>
    <div class="<?php echo esc_attr($header_class); ?>">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">    
			<?php bloginfo( 'name' ); ?>     
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		    <img src="https://www.distributed-computing.co.nz/ru_27/template/img/menu-toggler.png" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->		
        <ul class="nav navbar-nav pull-right">
			<!-- BEGIN USER LOGIN DROPDOWN -->      
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"  data-hover="dropdown" data-close-others="true">
				    <img src="https://www.distributed-computing.co.nz/ru_27/images/no_photo.png"  border="0" class="user-photo-header">
				    <span class="username">System Administrator</span>
              		<i class="fa fa-angle-down"></i>
				</a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="https://distributed-computing.co.nz/ru_27/index.php?module=users/account"><i class="fa fa-user"></i> My Account</a>
                    </li>
                    <li>
                        <a onClick="open_dialog('https://distributed-computing.co.nz/ru_27/index.php?module=users/change_skin')" class="cursor-pointer"><i class="fa fa-picture-o"></i> Change Skin</a>
                    </li>
                    <li>
                        <a href="https://distributed-computing.co.nz/ru_27/index.php?module=users/change_password"><i class="fa fa-unlock-alt"></i> Change Password</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="https://distributed-computing.co.nz/ru_27/index.php?module=users/login&action=logoff"><i class="fa fa-sign-out"></i> Logoff</a>
                    </li>
                </ul>                               
  		    </li>
  		    <!-- END USER LOGIN DROPDOWN -->
  		    <li id="header_bar_widgets">
  		         <?php get_sidebar( 'header' ); ?>
  		    </li>
  		</ul>  	
	    <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END TOP HEADER BAR -->
    <div class="clearfix"></div>