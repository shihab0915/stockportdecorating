<?php
	get_header();
	get_template_part('/inc/page-banner');
?>

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 service-loop">
		<?php
			$args = array(
				'paged' => get_query_var('paged', 1), // this one is fallback for first page
				'post_type' => 'services',
                'posts_per_page' => 3,
                'orderby' => 'menu_order', 
                'order' => 'ASC',
			);

			$service = new WP_Query( $args );
			while( $service->have_posts() ) {
				$service->the_post(); ?>
				<div class="service-headline">
					<h1 class="headline headline--left"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				</div>
				<div class="service-content">
					<div class="service-thumb">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('medium', array('class' => 'alignleft')); ?>
						</a>
					</div>
					<div class="service-trim">
						<?php echo wp_trim_words( get_the_content(), 140, '...' ); ?>
						<a class="continue-reading" href="<?php the_permalink(); ?>">Check detailed service &raquo;</a>
					</div>
				</div>

			<?php } echo '<div class="service-pagination">';
			echo paginate_links( array(
				'total' => $service->max_num_pages
			) );	echo '</div>';
		?>
		

		</div>
	</div> <!-- row -->
</div> <!-- container -->



<?php get_footer(); ?>