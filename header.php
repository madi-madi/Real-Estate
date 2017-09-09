<!DOCTYPE html>

<html lang="en">
<head>

	<meta charset="utf-8">
	<!-- IE Compatiblty Meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- First Mobbile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php 

	bloginfo('name');
	wp_title('|','true','left');

	

		
	?></title>

	<?php wp_head(); ?>
 
  


</head>
<body>


 <!-- section header-->
 <header>
 	
<!-- Start Our Navbar -->


			<nav class="navbar navbar-default navbar-inverse ">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournavbar" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <?php 
	    wp_nav_menu( array(
								'theme_location' => 'rew-top-menu',
								'menu_class'=>'nav navbar-nav navbar-right',
								'depth'             => 4,
								'container_class'=>'collapse navbar-collapse navbar-right',
								'container_id'=>'ournavbar',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
        'class'=>'pull-right'

	));

	     ?>
	  </div>   <!-- End of  Container-->
	</nav>


	    
 <!-- End Our Navbar-->

<section class="main-header">
	 	<div class="container-fluid ">
	</div>
</section>
 </header>
 <!-- end section header -->
