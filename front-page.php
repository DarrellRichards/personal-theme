<?php get_header(); ?>
	<div class="portfolio" id="portfolio">
	<h2 class="headline">Portfolio</h2>
	<div class="container">
		<div class="row">
			<p class="text-center">Unfortunately at this time. I do not have work to show for because of contract with companies.</p>
		</div>
	</div>
</div>
<div class="recent_posts">
	<h2 class="headline">Blog</h2>
	<div class="container">
		<div class="row">
			<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 6
				);
				$the_query = new WP_Query( $args );

				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
				?>
						<div class="col-md-6">
							<div class="post">
								<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									}
								?>
								<a href="<?php the_permalink(); ?>" class="post_link"><h2><?php the_title(); ?></h2></a>
								<p class="home_date">
									<i class="fa fa-calendar"></i>  <?php the_time("j M 'y") ?>
									<i class="fa fa-user"></i> <?php the_author(); ?>
									<i class="fa fa-comment"></i> <a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a>
									<i class="fa fa-tags"></i> <?php echo get_the_tag_list(' ',',',''); ?></p>
								<p class="home-content"><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
							</div> <!-- end post -->
						</div> <!-- end col-md-6 -->
			<?php
					}
				} else {
					// no posts found
				}
				/* Restore original Post Data */
				wp_reset_postdata();
			?>
		</div>
	</div>
</div>
<div class="services">
	<h2 class="headline">Services</h2>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p>Coming Soon!</p>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>