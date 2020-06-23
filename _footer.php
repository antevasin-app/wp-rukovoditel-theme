<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rukovoditel
 */

?>

<div class="footer noprint">
    <div class="footer-inner">
    	 <?php echo get_theme_mod('ru_copyright', '© Rukovoditel 2020'); ?><br>
    	 <small>
    	    Powered by <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'antevasin' ) ); ?>">Wordpress</a>
			Theme: Rukovoditel by <a target="_blank" href="https://www.antevasin.app" title="Antevasin Software">Antevasin</a></small>
    </div>
    <div class="footer-tools">
    	
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
