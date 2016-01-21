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
						<div id="contact_side">
							<div class="contact_info">
								<h3>Contact Details</h3>
								<p class="phone"><i class="fa fa-phone"></i> (540)526-4499</p>
								<p class="email"><i class="fa fa-envelope-o"></i> <a href="mailto:hello@darrellrichards.com">hello@darrellrichards.com</a></p>
								<p class="website"><i class="fa fa-globe"></i> <a href="http://www.darrellrichards.com">www.darrellrichards.com</a></p>
								<hr>
								<ul class="social">
									<li><a href="https://twitter.com/Via_MacAttack" target="_blank"><i class="fa fa-twitter fa-1x"></i></a></li>
									<li><a href="https://www.instagram.com/darrellrrichards/" target="_blank"><i class="fa fa-instagram fa-1x"></i></a></li>
									<li><a href="https://www.linkedin.com/in/darrellrdesigns" target="_blank"><i class="fa fa-linkedin fa-1x"></i></a></li>
								</ul>
							</div>
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