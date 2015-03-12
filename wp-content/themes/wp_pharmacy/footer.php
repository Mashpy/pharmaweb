		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="footer_area fix">
							<div class="col-md-4 col-sm-4 quick_links">
								<?php dynamic_sidebar( 'sidebar-8' ); ?>
							</div>
							<div class="col-md-4 col-sm-4 social_connect">
								<p>Connect With NSTU Pharma</p>
								<div class="col-md-6 col-sm-6 so_style">
									<ul>
										<li><a href="https://www.facebook.com/nstupharma"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png" alt="" />Facebook</a></li>
										<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/link.jpg" alt="" />Linkedln</a></li>
										<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/pin.png" alt="" />Pinterset</a></li>
									</ul>
								</div>
								<div class="col-md-6 col-sm-6 so_style">
									<ul>
										<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/tw.png" alt="" />Twitter</a></li>
										<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" alt="" />Youtube</a></li>
										<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/plus.png" alt="" />Google Plus</a></li>
									</ul>
								</div>
								<p>Join Our Social Media Communities > </p>
							</div>
							<div class="col-md-4 col-sm-4 footer_txt">
								<p>Terms of use privacy</p>
								<p>&copy; Copyright 2015, Department of Pharmacy</p>
								<br>
								<p>Importants links | FAQ | Feedback</p>
								<p>Last Modified on <?php the_modified_date('F j, Y'); ?> by Department of Pharmacy</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.colorbox.min.js"></script>
	   	<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"70%", height:"90%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
		<script>
			(function($){
				
				//cache nav
				var nav = $("#nav");
				
				//add indicator and hovers to submenu parents
				nav.find("li").each(function() {
					if ($(this).find("ul").length > 0) {
						$("<span class='glyphicon glyphicon-play' aria-hidden='true'></span>").text("").appendTo($(this).children(":first"));
					}
				});
			})(jQuery);
		</script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slicknav.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#nav').slicknav();
		});
		</script>
		<?php wp_footer(); ?>
    </body>
</html>
