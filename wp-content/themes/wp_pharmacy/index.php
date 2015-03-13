
	<?php get_header();?>	
		<div class="main_arae">
			<div class="container">
				<div class="row" style="background:#F3F3F3;margin:15px 0px;padding:15px 0px;" >
					<div class="col-md-4 col-sm-4">
						
					</div>
					
					<div class="col-md-8 col-sm-8">
					
						<?php
							if ( have_posts() ) :
								// Start the Loop.
								while ( have_posts() ) : the_post();

									/*
									 * Include the post format-specific template for the content. If you want to
									 * use this in a child theme, then include a file called called content-___.php
									 * (where ___ is the post format) and that will be used instead.
									 */
									get_template_part( 'content', get_post_format() );

								endwhile;
								// Previous/next post navigation.
								twentyfourteen_paging_nav();

							else :
								// If no content, include the "No posts found" template.
								get_template_part( 'content', 'none' );

							endif;
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