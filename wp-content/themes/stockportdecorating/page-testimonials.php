<?php 
	get_header();
	echo get_template_part('/inc/page-banner'); ?>

<section id="demos" class="testimonial-page">
	<div class="container">
		<div class="row">
			<div class="owl-carousel owl-theme">
		      	<?php
		      		$args = array(
						'post_type' => 'testimonials',
		                'posts_per_page' => -1,
		                'orderby' => 'menu_order', 
		                'order' => 'ASC',
		      		);

		      		$testimonial = new WP_Query( $args );

		      		while( $testimonial->have_posts() ) {
		      			$testimonial->the_post(); ?>
		      			<div class="item">

		      				<div class="client">
								<?php the_post_thumbnail('medium', array('class' => 'alignleft')); ?>
							</div>
							<div class="client--text">
								<?php the_content(); ?>
							</div>
							<div class="client-name">
								Client: <?php the_field('client_name'); ?>
							</div>
							<div class="client-meta">
								<?php the_field('client_meta'); ?>
							</div>

				        </div>
		      		<?php }

		      	?>

			</div> <!-- owl-carousel owl-theme -->

		<div class="button-container button-container--blue button-container--multiple">
			<a class="button secondary stop">Stop</a>
			<a class="button secondary play">Start Again</a> 
		</div>

   
		</div> <!-- row -->
	</div> <!-- container -->
</section>






<?php get_footer(); ?>