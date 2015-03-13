<?php
/*
Template Name Posts: without comment
*/
get_header(); ?>
		<div class="main_arae">
			<div class="container">
				<div class="row" style="background:#F3F3F3;margin:15px 0px;padding:15px 0px;" >
					<div class="col-md-4 col-sm-4">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="single_left_sidebar fix">
									<h2><a href="">NSTU Pharma Blog</a></h2>
									<p>Welcome to our nstu pharma blog . Here you can share your knowledge, experience and ideas.Welcome to our nstu pharma blog . Here you can share your knowledge, experience and ideas.</p>
								</div>
								<div class="single_left_sidebar fix">
									<h2><a href="">Find Us in Facebook</a></h2>
									<div class="fb-like-box" data-href="https://www.facebook.com/nstupharma?ref=br_rs" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div>
								</div>
								<div class="single_left_sidebar fix">
									<h2><a href="">Recent Posts</a></h2>
									<ul>
										<?php
											$args = array( 'numberposts' => '5' );
											$recent_posts = wp_get_recent_posts( $args );
											foreach( $recent_posts as $recent ){
												echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
											}  
										?>
									</ul>
								</div>
								<?php dynamic_sidebar( 'Blog Sidebar' ); ?>
							</div>
						</div>
					</div>
					
					<div class="col-md-8 col-sm-8">
					
						<?php
							// Start the Loop.
							while ( have_posts() ) : the_post();

								/*
								 * Include the post format-specific template for the content. If you want to
								 * use this in a child theme, then include a file called called content-___.php
								 * (where ___ is the post format) and that will be used instead.
								 */
								get_template_part( 'content', get_post_format() );

								// If comments are open or we have at least one comment, load up the comment template.
							
							endwhile;
						?>
						
					</div>
				</div>
			</div>
		</div>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	<?php get_footer();?>