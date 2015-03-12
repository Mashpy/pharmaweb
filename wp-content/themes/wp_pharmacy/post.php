<?php

/*
Template Name Posts: without comment
*/


get_header(); ?>




<div style="margin-bottom: 60px" class="row marketing">
<div class="col-lg-3">


</div>
<div class="col-lg-9">
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


<?php
get_footer();
