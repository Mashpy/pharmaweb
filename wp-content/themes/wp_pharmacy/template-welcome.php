<?php
/*
Template Name: Welcome Template
*/
get_header();?>
		<div class="dept_bg_area fix">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<img class="responsive" src="<?php echo get_template_directory_uri(); ?>/img/dept.jpg" alt="Department of Pharmacy" />
					</div>
				</div>
			</div>
		</div>
		
		<div class="main_arae">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<section class="slider">
									<?php echo do_shortcode("[metaslider id=202]"); ?>
								</section>
								<div class="wel_mess_area fix">
									<section class="chr_text fix">
										<h2>Welcome to NSTU Pharma Family!</h2>
										<?php dynamic_sidebar( 'sidebar-9' ); ?>
									</section>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<div class="chr_mess_area fix">
							<h2>Message from the Chairman</h2>
							<div class="photo_name fix">
								<img src="<?php echo get_template_directory_uri(); ?>/img/chr.jpg" alt="" />
								<h2>Dr. Mohammad Selim Hossain</h2>
							</div>
							<div class="chr_mess fix">
								<p>Hello visitors / aspirants,</p>
								<p><?php dynamic_sidebar( 'sidebar-10' ); ?></p>
								<a href="" class="see_more">...see more</a>
							</div>
						</div>
						<div class="recents_notice_area fix">
							<h2>Notice</h2>
							<ul>
								<?php 
									$catquery = new WP_Query( 'cat=4&posts_per_page=-1' );
									while($catquery->have_posts()) : $catquery->the_post();
								?>
								<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
								<?php endwhile;  wp_reset_query(); ?>	
							</ul>
						</div>
						<div class="recents_events_area fix">
							<h2>Events</h2>
							<ul>
								<?php 
									$catquery = new WP_Query( 'cat=7&posts_per_page=-1' );
									while($catquery->have_posts()) : $catquery->the_post();
								?>
								<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
								<?php endwhile;  wp_reset_query(); ?>	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="intro_photos_area fix">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="intro_photos fix">
							<div class="col-md-3 col-sm-3">
								<a href="http://localhost/new/medical-plant-garden/"><img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="" class="img-responsive" /></a>
							</div>
							<div class="col-md-3 col-sm-3">
								<a href="http://localhost/new/lab-facilities/"><img src="<?php echo get_template_directory_uri(); ?>/img/2.jpg" alt="" class="img-responsive" /></a>
							</div>
							<div class="col-md-3 col-sm-3">
								<a href="http://localhost/new/pharmacy-club/"><img src="<?php echo get_template_directory_uri(); ?>/img/3.jpg" alt="" class="img-responsive" /></a>
							</div>
							<div class="col-md-3 col-sm-3">
								<a href="http://localhost/new/photo-gallery/"><img src="<?php echo get_template_directory_uri(); ?>/img/4.jpg" alt="" class="img-responsive" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php get_footer();?>