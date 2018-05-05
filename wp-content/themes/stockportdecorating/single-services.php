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
		<div class="container single-service-content">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 well">
					<?php the_content(); ?>
				</div>		
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 well">
					<h1 class="single-service-content-contact"><i class="fa fa-phone-square" aria-hidden="true"></i> Contact Us: 07875855516</h1>
				</div>
			</div>
		</div>
	<?php }
?>






<?php get_footer(); ?>