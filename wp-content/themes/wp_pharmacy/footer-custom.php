<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<div style="margin-top:15px;padding:3px; margin-bottom:7px" class="well clearfix">

				

    <div>
      <div class="pull-right">
   						<a href="#" >Important Links</a> | <a href="#" > FAQ</a> |<a href="/contact-us/" > Feedback</a>
</br>
							Last modified on <!-- #BeginDate format:Sw1 -->
							<?php the_modified_date('F j, Y'); ?><!-- #EndDate -->
							by Department of Pharmacy

	<?php wp_footer();?>

    </div>
    <div>
  <div>			<a href="#" > Terms of Use</a> | <a href="#" > Privacy</a>
							<!-- | <a href="#">Using this site</a>-->
						
					</br>
							&copy; Copyright 2014 Department of Pharmacy
					

	
	</div>
</div>
</div>


</div>
	</ol>
</div>
	</body>

</html>