<?php /* Static Name: Slider */ ?>
<?php if(of_get_option('slider_type') != 'none_slider'){ ?>
	<div id="slider-wrapper" class="slider">
		<div class="container">
			<!--<img class="visible-480" src="/wp-content/uploads/2015/12/slide1.jpg?1545950013718" alt="">-->
			<?php do_action( 'cherry_before_slider' ); ?>
			
			<?php get_slider_template_part(); ?>
			
			<?php do_action( 'cherry_after_slider' ); ?>
			
		</div>
	</div><!-- .slider -->
<?php }else{ ?>
	<div class="slider_off"><!--slider off--></div>
<?php } ?>