<?php 
	get_header();
	echo get_template_part('/inc/page-banner'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<?php
				while ( have_posts() ) {
					the_post(); ?>
						<div class="service-content">
							<div class="service-trim">
								<?php the_content(); ?>
							</div>
						</div>
			<?php	}
			?>
		</div>
	</div>
</div>	






<?php get_footer(); ?>