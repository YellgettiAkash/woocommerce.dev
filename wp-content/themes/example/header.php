<!DOCTYPE html>
<html>
<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
</head>
<body>

	<!-- Navigation -->
    <nav class="navbar navbar-inverse " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <?php
								$args =[
								    'theme_location'  =>  'primary',
								    'container'       => '',
								    'container_class' => '',
								    'menu_class'      => 'nav navbar-nav navbar-right',
								    'menu_id'         => 'nav',

								];		
							 wp_nav_menu( $args ); ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
