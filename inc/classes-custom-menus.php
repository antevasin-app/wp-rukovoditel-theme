<?php
/*
based on https://awhitepixel.com/blog/wordpress-menu-walkers-tutorial/ 
and 
https://wisdmlabs.com/blog/redesigning-wordpress-menus-custom-walker-class/
*/
class _RU_Walker_Nav_Menu extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : ''; // if variable depth is defined then add as many tabs as defined by the depth
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;  // if the array of classes for the menu item is empty then define $classes as an array, otherwise $classes is the array of classes
        
        $output .= '<li><a href="' . $item->url . '"><i class="' . implode(" ", $item->classes) . '"></i>';
        $output .= $item->title;
        if ($args->show_carets && $args->walker->has_children) {
	        $output .= '<span class="arrow "></span>';
        }
        $output .= '</a>';
        if ($args->walker->has_children) {
	        $output .= '';
        }        
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {

    }
}

class RU_Walker_Nav_Menu extends Walker_Nav_Menu {
    var $number = 1;
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
       	$object = $item->object;
    	$type = $item->type;
    	$title = $item->title;
    	$description = $item->description;
    	$permalink = $item->url;
    	$tooltip = "";
    	$is_active = "";
    	$is_submenu = "";
    	
        if( $description != '' && $depth == 0 ) {
      	    $tooltip .= "title='" . $description . "'";
        }
        
        if (array_search('current-menu-item', $item->classes) != 0) {
            $is_active = 'class="active"';
        }          
    	
    	$output .= "<li $tooltip " . $is_active . ">";
    	
    	//Add SPAN if no Permalink
        if( $permalink && $permalink != '#' ) {
            $output .= '<a href="' . $permalink . '">';
        } else {
            $output .= '<span>';
        }
        
        $output .= '<i class="' .  implode(" ", $item->classes) . ' aria-hidden="true"></i>' . $is_submenu . ' - ' . $title;

        if( $permalink && $permalink != '#' ) {
          	$output .= '</span></a>';
        } else {
          	$output .= '</span>';
        }      
    }

  //function end_el( &$output, $item, $depth = 0, $args = array() ) {
    // Copy all the end_el code from source, and modify
  //}
}