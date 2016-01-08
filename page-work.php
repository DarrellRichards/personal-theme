<?php get_header(); ?>
<div id="page_wrapper">
	<h2 class="headline"><?php the_title(); ?></h2>
	<div class="container">
		<div class="page_content">
			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php if( have_rows('projects') ): while ( have_rows('projects') ) : the_row(); 
						$image = get_sub_field('project_main_image');
						$title = get_sub_field('project_title');
						$project_link = get_sub_field('project_link');
					?>
						<div class="col-md-4">
							<a href="<?php echo $project_link; ?>">
								<div class="project">
									<img src="<?php echo $image; ?>" alt="">
									<span class="text-content"><span><?php echo $title; ?></span></span>
								</div>
							</a>
						</div>
					<?php endwhile; else : ?>
						<p>Sorry, Looks Like I need to add work</p>
					<?php endif; ?>
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>