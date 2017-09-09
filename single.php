
<?php 





get_header();?>


<!-- Start Content-->
<main class="container  " style="margin-top: 200px;">

<div class="row">


	<aside class="col-sm-3 pull-left">
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
	<!-- End aside -->

      <?php
      /* Start the Loop */
      while ( have_posts() ) {
       the_post();


     
      ?>
      <div class="col-xs-9">
          <h2> <?php the_title() ?> </h2>
        <ol class="breadcrumb">
  <li><a href="#"><span class="glyphicon glyphicon-map-marker"></span> <?php echo  get_post_meta(get_the_ID(),'address_flat' , true); ?></a> </li>
  <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php the_author_posts_link()?></a> </li>
  <li class=""><a href="#"><span class="glyphicon glyphicon-ok-circle"></span> <?php echo ucfirst(get_post_type());   ?></a></li>
   <li class=""><a href="#"><span class="fa fa-tags fa-fw"></span> <?php the_category(' ')   ?></a></li>
    <li class=""><a href="#"><span class=""><i class="fa fa-area-chart" aria-hidden="true"></i></span> <?php echo get_post_meta(get_the_ID(), 'Apartment_area' , true);?> <sup>m<sup>2</sup></sup> </a></li>
     <li class="">      <?php if (get_post_type() != 'land') {
        # code...

          ?>
                <a href="#"><span class="glyphicon glyphicon-ok-circle"></span> Rooms : <?php echo get_post_meta(get_the_ID(), 'rew_rooms' , true);?> </a>
          <?php

      }

       ?></li>
</ol>
      </div>
	<div class="col-xs-4 pull-right">
		<!-- start Slider info-->
<div id="map" col-xs-12></div>
		<!-- End Slider info-->
	</div>
	<div class="col-xs-5 more-info">
		<h3> <?php the_title() ?>  <span class="pull-right price">  <?php echo get_post_meta(get_the_ID(), 'rew_price' , true); ?> <sup>$</sup></span></h3>
		<div class="stars col-xs-12">
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star"></span>
		<span class="fa fa-star"></span>
		| 
		<i class="fa fa-eye" aria-hidden="true"></i>1240
		</div>
     <?php the_post_thumbnail('post-thumbnail', array( 'class' => 'img-responsive' ) );?>
		<div class="Description-rew ">
<?php the_content();
 ?>
		</div>



		</div>

<?php
}

  ?>



	</div>



</div>




	<div class="row page-info ">

<div class="col-xs-12 similar-rew text-center"> Similar Real Estate </div>

	 <div class="col-lg-12 col-md-12 col-sm-12 all-post">

<?php
  

 //print_r(wp_get_post_categories(get_queried_object_id()));
   // print_r(get_post_type(get_the_ID()));
   // exit();

  $arrgs_rand = array(
                    
                      'post_type'=>get_post_type(get_the_ID()),
                    'orderby'      => 'rand',
                    'category__in' => wp_get_post_categories(get_queried_object_id()),
                    'post__not_in' => array(get_queried_object_id()),
                    'posts_per_page'=>3,

    );


      $article_array_rand = new WP_Query($arrgs_rand);
 /*    echo "<pre>";
print_r($article_array_rand);
echo "</pre>";
exit();*/
      if ($article_array_rand->have_posts()) {
      while ( $article_array_rand->have_posts() ) {
       $article_array_rand->the_post();


     
      ?>


               <!-- start content-rew-post-->
     <article class="col-sm-4">
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
      <style>
      #map {
        width: ;
        height: 400px;
        background-color: grey;
      }
    </style>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyAk-adYligmF_feOPJdXXQDYCfGpE1NJco &callback=initMap">
    </script>
  <script>
  var labels = 'Gaza';
      function initMap() {
        var uluru = {lat: 31.529396, lng: 34.479741};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: uluru,



        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,


        });
      }
    </script>

<?php get_footer();?>
