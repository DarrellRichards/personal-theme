<?php get_header(); ?>
<div id="page_wrapper">
	<h2 class="headline">Blog</h2>
	<div class="container">
		<div class="page_content">
			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-md-8">
						<div class="post">
							<a href="<?php the_permalink(); ?>" class="post_link"><h4><?php the_title(); ?></h4></a>
							<p class="home_date">
								<i class="fa fa-calendar"></i>  <?php the_time("j M 'y") ?>
								<i class="fa fa-user"></i> <?php the_author(); ?>
								<i class="fa fa-tags"></i> <?php echo get_the_tag_list(' ',',',''); ?>
							</p>
							<p><?php the_content();	 ?></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="post">
							Sidebar Coming Soon
						</div>
					</div>
			</div>
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>