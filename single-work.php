<?php 
	/**
 		* Template Name: Single Work
 	*/
	get_header();
?>

<div id="page_wrapper">
	<h2 class="headline"><?php the_title(); ?></h2>
	<div class="container">
		<div class="page_content">
			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-md-8">
						<div id="project_full_image">
							<?php if ( has_post_thumbnail() ) {
							?>
								<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" width="100%" height="100%">
							<?php } ?>
						</div>
					</div>
					<div class="col-md-4">
						<div class="project_information">
							<div id="project_sub">
								<h3>Project Information</h3>
								<p><?php the_field('project_info'); ?></p>
							</div>
							<div id="links">
								<h4>Learn More About This Company</h4>
								<ul>
									<li><a href="<?php the_field('project_url'); ?>" target="_blank"><i class="fa fa-globe"></i></a></li>
									<li><a href="https://twitter.com/<?php the_field('project_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="<?php the_field('project_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, Looks like this page has crashed, Send a email to me @ hello@darrellrichards.com' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>