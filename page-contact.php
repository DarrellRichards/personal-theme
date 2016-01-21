<?php get_header(); ?>
<div id="page_wrapper">
	<h2 class="headline"><?php the_title(); ?></h2>
	<div class="container">
		<div class="page_content">
			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div id="contact_form" class="col-md-7">
						<?php the_content(); ?>
					</div>

					<div class="col-md-5">
						<div id="content_side">
							<p>Contact Information</p>
						</div>
					</div>
					
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>