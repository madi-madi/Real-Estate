<?php get_header();?>




<h1>Author </h1>


<!-- Start Content-->
<main class="container ">
<nav aria-label="...">
  <ul class="pagination">
    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
    <li class=""><a href="#">2 <span class="sr-only">(current)</span></a></li>
    <li class=""><a href="#">3 <span class="sr-only">(current)</span></a></li>
    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
    
  </ul>
</nav>
	
	<div class="row ">



<?php 
//	$args= array(

	//	'post_type'=>'apartment',
		//'posts_per_page'=>,
		/*'category_name'=>'real-estate-rent',*/
		/*'offset'=>1*/


	//	);
//$rew_post = new WP_Query($args);

/*echo "<pre>";
print_r($rew_post);
echo "</pre>";
exit();*/
if (have_posts()) {
	# code...
	while (have_posts()) {

		# code...
		the_post();
		?>

		<!-- start content-rew-post-->
		<article class=" col-md-6 col-sm-12 col-xs-12 rew-post">
		<div class="col-sm-12 col-xs-12 content-rew">
					<h3 class="hidden-xs"> <?php the_title();?> </h3>
		<figure class="col-sm-6 col-xs-12">
			<a href="#">
     <?php the_post_thumbnail('post-thumbnail', array( 'class' => 'img-responsive' ) );?>
			</a>
			<figcaption><?php the_category(' ')?> </figcaption>
		</figure>
		<div class="details col-sm-6 col-xs-12">
			<h4 class="hidden-xs"> 
			<span class="">Villa</span>
			<span class="pull-right"><?php echo get_post_meta(get_the_ID(), 'rew_price' , true); ?> <sup>$</sup></span>

			</h4>
			<h5 class="visible-xs"> REAL ESTATE </h5>
			<p> <?php the_excerpt("Read more..") ?> </p>
			<a href="<?php the_permalink();?>" class="more-details pull-right">
			<span class="glyphicon glyphicon-sound-dolby">
				
			</span> more-details..</a>
		</div>
		<div class="prority-meta col-sm-12 col-xs-12">
			<a href="#"><span class="glyphicon glyphicon-map-marker"></span> <?php echo get_post_meta(get_the_ID(), 'address_flat' , true);?></a> 

			<a href="#"><span class="glyphicon glyphicon-user"></span> <?php the_author_posts_link()?></a> 
			<a href="#"><span class="glyphicon glyphicon-ok-circle"></span><?php echo get_post_meta(get_the_ID(), 'rew_price' , true); ?> <sup>$</sup> </a>
			<a href="#"><span class="fa fa-tags fa-fw"></span><?php the_category(', ') ?> </a> 
			<span class="date pull-right"><span class="glyphicon glyphicon-calendar"></span> <?php the_time('F j, Y');?></span> 
		</div>

		</div>
		</article>
		<!-- end content-rew-post-->

		<?php
	}

	wp_reset_postdata();
}else{

	echo "<h1> Not Found Posts </h1>";
}

/*
if (get_previous_posts_link()) {
	# code...
	previous_posts_link('Prev');
}else{
	echo "No Previous";
}

if (get_next_posts_link()) {
	# code...
	next_posts_link('Next');
}else{
	echo "No Next";
}
*/

 next_posts_link( 'Older Entries »'); 

?>







	</div>

	<!-- end row -->
</main>
<!-- End Content -->
<?php get_footer();?>