<?php get_header();?>


<!-- Start Content-->
<main class="container ">


	<div class="row ">


		
	
	<aside class="col-sm-3 pull-right">
    <!-- Start Section Search-->
<section class="search-rent">

<div class="search-header col-xs-12 ">
<div class="col-xs-12 main-search ">
  
<h4 class="title search-head"><span class="glyphicon glyphicon-search pull-left " ></span>  Search</div>
</h4>

<!-- Start Filed div -->
<div class="filed-name  col-xs-12">
  <input type="text" name="filed-name" class="col-xs-12" placeholder="Keyword..."/>
</div>
<!-- End Filed div -->

<!-- Start Filed div -->
<div class="filed-name  col-xs-12">
  <select class="col-xs-12" id="position" placeholder="Main Location">
    <option value="ps"> Palestine</option>
    <option value="gaza">Gaza</option>
    <option value="rfh">Rafah</option>
  </select>
</div>
<!-- End Filed div -->
<!-- Start Filed div -->
<div class="filed-name  col-xs-12">
  <input type="text" name="filed-name" class="col-xs-12" placeholder="Property Status"/>
</div>
<!-- End Filed div -->

<!-- Start Filed div -->
<div class="filed-name  col-xs-12">
  <input type="text" name="filed-name" class="col-xs-12" placeholder="Property Type"/>
</div>
<!-- End Filed div -->
<!-- Start Filed div -->
<div class="filed-name  col-xs-12">
  <input type="text" name="filed-name" class="col-xs-12" placeholder="Min Beds"/>
</div>
<!-- End Filed div -->
<!-- Start Filed div -->
<div class="filed-name  col-xs-12">
  <input type="text" name="filed-name" class="col-xs-12" placeholder="Min Baths"/>
</div>
<!-- End Filed div -->
<!-- Start Filed div -->
<div class="filed-name  col-xs-12">
  <input type="text" name="filed-name" class="col-xs-12" placeholder="Min Price"/>
</div>
<!-- End Filed div -->
<!-- Start Filed div -->
<div class="filed-name  col-xs-12">
  <input type="text" name="filed-name" class="col-xs-12" placeholder="Max Price"/>
</div>
<!-- End Filed div -->
<!-- Start Filed div -->
<div class="filed-name  col-xs-12">
  <input type="text" name="filed-name" class="col-xs-12" placeholder="Min Area"/>
</div>
<!-- End Filed div -->
<!-- Start Filed div -->
<div class="filed-name  col-xs-12">
  <input type="text" name="filed-name" class="col-xs-12" placeholder="Max Area"/>
</div>
  <div class="col-md-12 ">
    <button class="btn btn-info col-sm-12"> Search</button>
  </div>
<!-- End Filed div -->




</div>
  

</section>
<!-- End Section Search-->
	</aside>
	
		 <div class="col-lg-9 col-md-9 col-sm-9">
     <?php
      /* Start the Loop */
      $args = array(
        'post_type'=>'apartment',
      	'category_name'=>'rent',


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