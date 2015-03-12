<?php
/*
Template Name:Faculty Template
*/
get_header();?>
		<div class="dept_bg_area fix">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<img class="responsive" src="<?php echo get_template_directory_uri(); ?>/img/faculty.jpg" alt="Department of Pharmacy" />
					</div>
				</div>
			</div>
		</div>
		
		<div class="main_arae faculty_member">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<h2 class="page_header">FACULTY MEMBER</h2>
								<div class="faculty_area fix">
									<?php 
								
									$temp = $wp_query; 
									$wp_query = null; 
									$wp_query = new WP_Query(); 
									$wp_query->query('showposts=3 & post_type=teachers & order=asc'.'&paged='.$paged); 

									while ($wp_query->have_posts()) : $wp_query->the_post();

										global $post;
													
										$tea_page_photo = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'tea_page_photo' );

										$tea_name = get_post_meta( $post->ID, 'tea_name', true );
										
										$tea_desig = get_post_meta( $post->ID, 'tea_desig', true );
										
										$tea_quali = get_post_meta( $post->ID, 'tea_quali', true );
										
										$tea_phone = get_post_meta( $post->ID, 'tea_phone', true );
										
										$tea_fax = get_post_meta( $post->ID, 'tea_fax', true );
										
										$tea_mobile = get_post_meta( $post->ID, 'tea_mobile', true );
										
										$tea_email = get_post_meta( $post->ID, 'tea_email', true );
										
										$tea_site = get_post_meta( $post->ID, 'tea_site', true );
											
										$tea_cv = get_post_meta( $post->ID, 'tea_cv', true );											

									?>
								
									<div class="single_teacher fix">
										<div class="teacher_photo fix">
											<img src="<?php echo $tea_page_photo[0]; ?>" alt="" />
										</div>
										<div class="teacher_info fix">
											<h2 class="teacher_name"><?php echo $tea_name; ?></h2>
											<h3 class="designation"><?php echo $tea_desig; ?></h3>
											<p><span class="name">Qualification : </span><?php echo $tea_quali; ?></p>
											<p><span class="contact_about">Phone : </span><?php echo $tea_phone; ?>, Fax: <?php echo $tea_fax; ?></p>
											<p><span class="contact_about">Mobile : </span><?php echo $tea_mobile; ?></p>
											<p><span class="contact_about">E-mail : </span><?php echo $tea_email; ?></p>
											<p><span class="contact_about">Website : </span><a class="website" href=""><?php echo $tea_site; ?></a></p>
											<p class="details"><span class="cv"><a class="iframe click_details" href="<?php echo $tea_cv; ?>">Click for details</a></span></p>
										</div>
									</div>
									<?php endwhile; ?>
							
									<nav class="teachers_paginition">
										<?php previous_posts_link('&laquo; Previous') ?>
										<?php next_posts_link('Next &raquo;') ?>
									</nav>

									<?php 
									  $wp_query = null; 
									  $wp_query = $temp;  // Reset
									?>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<div class="recents_notice_area fix">
							<h2>Notice</h2>
							<ul>
								<?php 
									$catquery = new WP_Query( 'cat=4&posts_per_page=8' );
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
									$catquery = new WP_Query( 'cat=7&posts_per_page=8' );
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
		<?php get_footer();?>