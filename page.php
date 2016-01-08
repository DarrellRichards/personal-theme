<?php get_header(); ?>
<div id="page_wrapper">
	<h2 class="headline"><?php the_title(); ?></h2>
	<div class="container">
		<div class="page_content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<p><?php the_content();	 ?></p>
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>