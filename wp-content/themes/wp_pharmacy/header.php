<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> <?php echo wp_strip_all_tags(get_the_title( $post_id ));?>  | <?php bloginfo( 'name' ); ?> </title>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo get_template_directory_uri();?>/favicon.ico" type="image/x-icon">
		<meta name="description" content="Department of Pharmacy (ফার্মেসী বিভাগ), Noakhali Science and Technology University">
		<meta name="keywords" content="nstupharma, nstu pharma, nstu, pharma">    
		<meta name="google-site-verification" content="ykQ8H070GAX_dDUkqeuPYjzBNK7_BJNeQETr6q0LV4A" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
		<!--
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		-->
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nav.css">
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/comments.css">
		<noscript>
        	<!--[if IE]>
            	<link rel="stylesheet" href="css/ie.css">
            <![endif]-->
        </noscript>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/colorbox.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slicknav.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/responsive.css">
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
		
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head();?>
    </head>
    <body class="loading">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 logo_dept_name">
						<div class="logo fix">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="" />
						</div>
						<div class="uni_name fix">
							<h2 class="dept_name_bold">NSTU</h2>
							<p class="uni_name">Noakhali Science & Technology University</p>
						</div>
						<div class="dept_name fix">
							<h3 class="dept_name">Department of Pharmacy<br>Faculty of Science</h3>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 header_right">
						<div class="upper_menu">
							<?php wp_nav_menu( array( 'theme_location' => 'upper-menu') ); ?>
						</div>
						<div class="search_area fix">
							<form method="get" id="searchform" action="<?php echo home_url(); ?>/">
								<div class="search_field fix">
									<div class="form-group has-feedback">
										<input type="text" class="form-control search_input_field" name="s" id="s" onfocus="if (this.value == '<?php esc_attr_e( 'Search', 'brightpage' ); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php esc_attr_e( '', 'brightpage' ); ?>';}" placeholder="Search your Keyword" />
										<i class="glyphicon glyphicon-search form-control-feedback"></i>
									</div>
								</div>
								<div class="search_button fix">
									<input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'brightpage' ); ?>" />
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="mainmenu">
							<?php wp_nav_menu( array( 'theme_location' => 'main-menu','menu_id' => 'nav') ); ?>
						</div>
					</div>
				</div>
			</div>
		</header>