                </div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
</div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER BAR-->
<div class="footer noprint">
    <div class="footer-inner">
	    <?php echo get_theme_mod('ru_copyright'); ?><br>
	    <small>Powered by&nbsp;<a target="_blank" href="https://www.rukovoditel.net" title="Universal Project Management Software">Rukovoditel</a></small>
    </div>
    <div class="footer-tools"></div>
</div><!-- END FOOTER BAR -->
<script>
jQuery(document).ready(function() { 
    App.init();
    // $(".page-sidebar").mCustomScrollbar({
    //     theme: "minimal",
    // });
    $('li.menu-item-has-children a').click(function() {
        location.href = $(this).attr('href');
    });
    $('.btn-primary').click(function(){
        $('.comments-area').toggle();
    });
});
</script>
<!-- END JAVASCRIPTS -->
<?php wp_footer(); ?>
</body>
<!-- END BODY -->
</html>