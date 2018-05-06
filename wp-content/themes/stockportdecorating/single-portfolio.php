<?php
	get_header();
?>

<?php
	while( have_posts() ){
		the_post(); ?>
		<div class="page-banner">
			<?php
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			?>
		    <div class="page-banner__bg-image" style="background-image: url(<?php echo $url; ?>);"></div>
		    <div class="page-banner__content container container--narrow">
		      <h1 class="page-banner__title page-banner__title__center"><?php the_title(); ?></h1>
		    </div>  
		</div>
		<div class="portfolio-meta">
			<p>
				<?php
					$start_date = get_field('project_started');	// get raw date
					$start_date = new DateTime($start_date); // make date object

					$end_date = get_field('project_end');	
					$end_date = new DateTime($end_date);
				?>
				Posted on: <?php the_time('l, F jS, Y') ?> | 
				Project started on: <?php echo $start_date->format('j M Y'); ?> | 
				Project completed on: <?php echo $end_date->format('j M Y'); ?> |  
				Project location: <?php the_field('project_location'); ?>
			</p>
		</div>

		<div class="container single-service-content single-service-content--pptmntce ini-pos-js">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 well well--single-pptmntc">
					<?php the_content(); ?>
				</div>		
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 well">
					<h1 class="single-service-content-contact">Start your project with us.</h1>
					<h1 class="single-service-content-contact"><i class="fa fa-phone-square" aria-hidden="true"></i> Contact Us: 07875855516</h1>
				</div>
			</div>
		</div>
	<?php }
?>






<?php get_footer(); ?>