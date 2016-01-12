<?php get_header(); ?>
	<div id="intro_content">
  <div class="container">
  	<div id="intro_wrapper">
  		<h1>My name is Darrell Richards Jr</h1>
  		<hr>
  		<p>I'm a Web Developer located in Roanoke,Virginia</p>
  		<a href="#portfolio" class="intro_button"><i class="fa fa-arrow-down fa-1x"></i></a>
  	</div>
  </div>
</div>
	<div class="portfolio" id="portfolio">
	<h2 class="headline">Portfolio</h2>
	<div class="container">
		<div class="row">
			<?php 
				$project = array('pagename' => 'work' );
				$the_query = new WP_Query( $project );

				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						
			?>
			<?php 
				if( have_rows('projects') ):

						// loop through the rows of data
				    while ( have_rows('projects') ) : the_row();
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

		<?php
					endwhile;

						else :

   						 echo "Sorry nothing found";

						endif;
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
			<?php 
				$services = array('pagename' => 'services' );
				$the_query = new WP_Query( $services );

				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						
			?>
			<?php 
				if( have_rows('projects') ):

						// loop through the rows of data
				    while ( have_rows('projects') ) : the_row();
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

		<?php
					endwhile;

						else :

   						 echo "Sorry nothing found";

						endif;
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
<?php get_footer(); ?>