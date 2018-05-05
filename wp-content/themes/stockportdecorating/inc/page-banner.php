<div class="page-banner">
	<?php
		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	?>
    <div class="page-banner__bg-image" style="background-image: url(<?php echo $url; ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
      	<?php
      		while (have_posts()) {
      			the_post(); ?>
				<p><?php the_field('page_introduction'); ?></p>
      		<?php }
      	?>
      </div>
    </div>  
</div>