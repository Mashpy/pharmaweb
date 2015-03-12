<?php get_header();?>	
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
								<?php dynamic_sidebar( 'sidebar-6' ); ?>
							</div>
						</div>
					</div>
					
					<div class="col-md-8 col-sm-8">
						<h2 class="search_heading"><?php printf( __( 'Search Results for: %s', 'brightpage' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
						<?php if(have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						
						<div class="single_post fix">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="post_info fix">
								<p>Posted On <?php the_time('M'); ?> <?php the_time('d');?>, <?php the_time('Y');?> posted by <?php the_author(); ?>	<?php echo "views ". setAndViewPostViews(get_the_ID()). " times";  ?></p>
							</div>
							<div class="post_details">
								<p>
									<?php
										$excerpt = get_the_excerpt();
										echo string_limit_words($excerpt,40);
									?>
								</p>
							</div>
							<a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
						</div>
						
						<?php endwhile;?>
								
							<?php else : ?>
								<div class="search_noting fix">
									<p>Your Search keyword does not exist</p>
								</div>
						<?php endif;?>
							
							<div class="post_pagination fix">
								<?php numeric_posts_nav(); ?>
							</div>

					</div>
				</div>
			</div>
		</div>
		
		<?php get_footer();?>