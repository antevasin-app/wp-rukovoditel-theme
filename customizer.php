<?php

add_action( 'customize_register', 'ru_customizer_settings' );
function ru_customizer_settings( $wp_customize ) {
    $wp_customize->add_section( 'ru_rukovoditel' , array(
        'title'      => 'Rukovoditel',
        'priority'   => 30,
    ));
    $wp_customize->add_setting( 'ru_copyright' , array(
        'default'     => '© Rukovoditel 2020',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ru_copyright', array(
	    'label'        => 'Footer Copyright Text',
	    'section'    => 'ru_rukovoditel',
	    'settings'   => 'ru_copyright',
	    'type'      =>  'text',
    )));
        $wp_customize->add_setting( 'ru_app_root_path' , array(
        'default'     => 'https://rukovoditel.net',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ru_app_root_path', array(
	    'label'        => 'Path to Rukovoditel Application Root',
	    'description'   => 'Enter the path as absolute e.g. "https://www.domain.com/path/"',
	    'section'    => 'ru_rukovoditel',
	    'settings'   => 'ru_app_root_path',
	    'type'      =>  'text',
    )));
    $wp_customize->add_setting( 'ru_app_logo_path' , array(
        'default'     => 'relative to root e.g. uploads/app_logo_1592257075.png',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ru_app_logo_path', array(
	    'label'        => 'Path to Application Logo File',
	    'section'    => 'ru_rukovoditel',
	    'settings'   => 'ru_app_logo_path',
	    'type'      =>  'text',
    ))); 
    $wp_customize->add_setting( 'ru_skin_css_file' , array(
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ru_skin_css_file', array(
	    'label'        => 'Path to Custom Skin CSS file',
	    'section'    => 'ru_rukovoditel',
	    'settings'   => 'ru_skin_css_file',
	    'type'      =>  'text',
    )));
}