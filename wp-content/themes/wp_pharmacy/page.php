<?php get_header();?>	
		<div class="main_arae">
			<div class="container">
				<div class="row" style="background:#F3F3F3;margin:15px 0px;padding:15px 0px;" >
					<div class="col-md-4 col-sm-4">
						<?php dynamic_sidebar( 'sidebar-5' ); ?>
						<div class="single_left_sidebar fix">
							<h2><a href="">Find Us in Facebook</a></h2>
							<div class="fb-like-box" data-href="https://www.facebook.com/nstupharma?ref=br_rs" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div>
						</div>
					</div>
					
					<div class="col-md-8 col-sm-8">
					
						<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
						<div class="single_post fix">
							<div class="post" id="post-<?php the_ID(); ?>">								
									<div class="entry">
									
										<?php the_content(); ?> 
									
									</div> <!-- end div .entry -->						
										
							</div> <!-- end div .post -->
						</div>
						<?php endwhile; ?>
						
						<?php else : ?>
						
							<div class="post">
								<h3><?php _e('404 Error&#58; Not Found', 'brightpage'); ?></h3>
							</div>
							
						<?php endif; ?>
						
					</div>
				</div>
			</div>
		</div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<?php get_footer();?>