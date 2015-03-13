<?php get_header();?>	
		<div class="main_arae">
			<div class="container">
				<div class="row" style="background:#F3F3F3;margin:15px 0px;padding:15px 0px;" >
					<div class="col-md-4 col-sm-4">
						<?php dynamic_sidebar( 'sidebar-5' ); ?>
					</div>
					
					<div class="col-md-8 col-sm-8">
					
						<h1 class="page-title"><?php _e( 'Not Found', 'twentyfourteen' ); ?></h1>
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfourteen' ); ?></p>

						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
		</div>
	<?php get_footer();?>