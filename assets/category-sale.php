<?php get_header();?>


<!-- Start Content-->
<main class="container ">

	<div class="row ">

<h
		
	
	<aside class="col-sm-3 pull-right">
 <!-- Start Section Search-->
<?php get_search_form();?>
<!-- End Section Search-->

	</aside>
	
		 <div class="col-lg-9 col-md-9 col-sm-9">
     <?php
      /* Start the Loop */
      $args = array(
        'post_type'=>'apartment',
      	'category_name'=>'sale',


      	);
      $article_array = new WP_Query($args);
   /*   echo "<pre>";
print_r($article_array);
echo "</pre>";
exit();*/
      if ($article_array->have_posts()) {
      while ( $article_array->have_posts() ) {
       $article_array->the_post();


     
      ?>


           		 <!-- start content-rew-post-->
		 <article class="col-sm-6">
           <div class="thumbnail img-thumb-bg">
           <?php the_post_thumbnail('post-thumbnail', array( 'class' => 'img-responsive' ) );?>
               <div class="overlay"></div>
               <div class="caption">
                   
                   <div class="title"><a href="#"><?php the_title();?></a></div>

                   <div class="content">
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo nulla porro qui quo expedita voluptas ab iure dolore.</p>
                   <div class="tag"><a href="<?php the_permalink();?>" class="more-details ">more-details..</a></div>
                   </div>

                                      <div class="clearfix meta">
                       <span class="meta-data"> <a href="">
                       <i class="glyphicon glyphicon-user"></i> <?php the_author_posts_link()?></a></span>
                       <span class="meta-data"><a href=""><i class="glyphicon glyphicon-map-marker">
                       </i> <?php echo get_post_meta(get_the_ID(), 'address_flat' , true);?></a></span> 
                       <span class="meta-data"><a href=""><i class="glyphicon glyphicon-ok-circle">
                       </i> Villa </a></span> 
                       <span class="meta-data"><a href=""><i class="glyphicon glyphicon-usd"></i>
                        <?php echo get_post_meta(get_the_ID(), 'rew_price' , true); ?>
                        </a></span> 
                   </div>
           
               </div>
           <figcaption class="rent"><?php the_category(' ')?></figcaption>
           </div>

           </article>

           <!-- end content-rew-post-->

           <?php
       }
 wp_reset_postdata();
   }else{

   	echo "<h1> Sorry Not Found  </h1>";
   }
    

    ?>

                   </div>
		






	</div>

	<!-- end row -->

</main>
<!-- End Content -->


<?php get_footer()?>