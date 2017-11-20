<?php do_action('fl_content_close'); ?>

	</div><!-- .fl-page-content -->
	<?php

	do_action('fl_after_content');

	if ( FLTheme::has_footer() ) :

	?>
	<footer class="fl-page-footer-wrap" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
		<?php

		do_action('fl_footer_wrap_open');
		do_action('fl_before_footer_widgets');

		FLTheme::footer_widgets();

		do_action('fl_after_footer_widgets');
		do_action('fl_before_footer');

		FLTheme::footer();

		do_action('fl_after_footer');
		do_action('fl_footer_wrap_close');

		?>
	</footer>

	<?php endif; ?>
	<?php do_action('fl_page_close'); ?>


	<div id="customFooterFive">
		<div class="container">	
			<div class="row">

			   <div class="col-sm-3A">
			   	<?php dynamic_sidebar('FooterMenu01'); ?> 
			   </div>

			   <div class="col-sm-3A">
			   	<?php dynamic_sidebar('FooterMenu02'); ?> 
			   </div>

			   <div class="col-sm-3A">
			   	<?php dynamic_sidebar('FooterMenu03'); ?> 
			   </div>

			   <div class="col-sm-3A">
			   	<?php dynamic_sidebar('FooterMenu04'); ?> 
			   </div>

			   <div class="col-sm-3A">
			   	<?php dynamic_sidebar('FooterMenu05'); ?> 
			   </div>		   		   		   

			</div>
		</div>
	</div><!-- end customFooterFive -->
</div><!-- .fl-page -->





<div id="footerLasts">
	<div class="container ">	
	<div class="row">

		<div class="col-12 col-md-4 col-lg-4 col-xl-4 p-0 m-0">
			<?php dynamic_sidebar('footer-sidebar-left'); ?> 
		</div>

		<div class="col-12 col-md-4 col-lg-4 col-xl-4 middleFooter p-0 m-0">
			<?php dynamic_sidebar('footer-sidebar-middle'); ?>
		</div>

		<div class="col-12 col-md-4 col-lg-4 col-xl-4 p-0 m-0">
			<?php dynamic_sidebar('footer-sidebar-right'); ?>
		</div>

	</div><!-- end row -->
  </div><!-- end container -->
</div><!-- end footerLasts -->


<?php 
	
wp_footer(); 

do_action('fl_body_close');

FLTheme::footer_code();

?>
</body>
</html>