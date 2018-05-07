<?php
	get_header();
	echo get_template_part('inc/page-banner'); ?>

<section class="container-fluid contact-page">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="well well--contact-head ini-pos-js">Your message is very important to us. Generally we reply within 6 hours and reach out to you asap <i class="fa fa-motorcycle" aria-hidden="true"></i>. For emergency <i class="fa fa-fire" aria-hidden="true"></i> purpose, don't hesitate to call us at <b>07875855516.</b></h2>
			</div>

			<div class="col-md-8 col-md-offset-2 contact-page--form ini-pos-js">
				<?php
					while( have_posts() ) {
						the_post();
						the_content();
					}
				?>
			</div>
			

   
		</div> <!-- row -->
	</div> <!-- container -->
</section>	

<?php get_footer(); ?>