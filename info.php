<?php /* Template Name: Info */ ?>
<?php /* Template Post Type: estate */ ?>
<?php get_header(); ?>
 <!-- Start Section Search-->
<section class="search container">

  
    <div class="row  ">

<div class="search-header col-xs-12">
<div class="col-xs-12 main-search">
  
<h4 class="title search-head"><span class="glyphicon glyphicon-search pull-left " ></span>  Search</div>
</h4>

<form  method="get" action="<?php echo home_url('search-3karatcom')?>">
  <!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  <label class="col-xs-12"> Keyword </label>
  <input type="text" name="search_name" class="col-xs-12" placeholder="Filed Name"/>
</div>
<!-- End Filed div -->

<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  <label class="col-xs-12"> Main Location </label>
  <select class="col-xs-12" id="position" name="address">

    <option value=""> Main Location</option>
    <option value="Ramallah">Ramallah</option>
    <option value="Gaza">Gaza</option>
    <option value="Al-Remal">Al-Remal</option>
    <option value="Jabalia">Jabalia</option>
    <option value="Tl Al-Hawa">Tl Al-Hawa</option>
    <option value="Nosirat">Nosirat</option>
    <option value="Der Al-balh">Der Al-balh</option>
    <option value="Khanyouns">Khanyouns</option>
    <option value="Rafah">Rafah</option>
  </select>
</div>
<!-- End Filed div -->
<!-- Start Filed div -->
<?php
$categores = get_terms('category');
/*var_dump($categores);
exit();*/
?>
<div class="filed-name col-sm-3 col-xs-12">
  <label class="col-xs-12"> Property Status </label>
  <select class="col-xs-12" name="category">
  <option > Property Status</option>
      <?php foreach($categores as $category){

    ?>
    <option value="<?php echo $category->term_id?>"><?php echo $category->name?></option>
    <?php

    }?>
  </select>
</div>
<!-- End Filed div -->


<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  <label class="col-xs-12"> Property Type </label>
    <select class="col-xs-12" id="rew_type" name="property_type">
    <option > Property Type</option>
    <option value="villa"> Villa</option>
    <option value="apartment">Apartment</option>
    <option value="chalit">Chalit</option>
    <option value="land">Land</option>
  </select>
</div>
<!-- End Filed div -->
<div class="clearfix"></div>
<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  <label class="col-xs-12"> Min Romms </label>
  <input type="number" name="min_room" class="col-xs-12" placeholder="Min Beds"/>
</div>
<!-- End Filed div -->

<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  <label class="col-xs-12"> Max Rooms </label>
  <input type="number" name="max_room" class="col-xs-12" placeholder="Max Beds"/>
</div>
<!-- End Filed div -->

<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  <label class="col-xs-12"> Min Price </label>
  <input type="number" name="min_price" class="col-xs-12" placeholder="Min Price"/>
</div>
<!-- End Filed div -->
<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  <label class="col-xs-12"> Max Price </label>
  <input type="number" name="max_price" class="col-xs-12" placeholder="Max Price"/>
</div>
<!-- End Filed div -->
<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  <label class="col-xs-12"> Min Area </label>
  <input type="text" name="min_area" class="col-xs-12" placeholder="Min Area"/>
</div>
<!-- End Filed div -->
<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  <label class="col-xs-12"> Max Area </label>
  <input type="text" name="max_area" class="col-xs-12" placeholder="Max Area"/>
</div>
<!-- End Filed div -->
<br/>
<div class="filed-name col-sm-3 col-xs-12 search-submit">
<input type="submit" name="submit" class="btn btn-info col-xs-12 btn-search" value="Search ">
</div>
</form>




</div>
  

</div>  


  

</section>

<!-- End Section Search-->


  

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

$paged =  get_query_var('page')  ? get_query_var('page') : 1;


  $args= array(

    'post_type'=>array('apartment', 'villa', 'store' , 'land'),
    'posts_per_page'=>2,
    /*'category_name'=>'real-estate-rent',*/
    /*'offset'=>1*/
    'paged' => $paged,
   // 'page' => $paged,


    );
$rew_post = new WP_Query($args);
/*
echo "<pre>";
print_r($rew_post);
echo "</pre>";
exit();*/
if ($rew_post->have_posts()) {
  # code...
  while ($rew_post->have_posts()) {

    # code...
    $rew_post->the_post();
    ?>

    <!-- start content-rew-post-->
    <article class=" col-md-6 col-sm-12 col-xs-12 rew-post">
    <div class="col-sm-12 col-xs-12 content-rew">
          <h3 class="hidden-xs"> <?php the_title();?> </h3>
    <figure class="col-sm-6 col-xs-12">
      <a href="#">
     <?php the_post_thumbnail('post-thumbnail', array( 'class' => 'img-responsive' ) );?>
      </a>
      <figcaption class="category"><?php the_category(' ')?> </figcaption>
    </figure>
    <div class="details col-sm-6 col-xs-12">
      <h4 class="hidden-xs"> 
      <span class=""><?php echo ucfirst(get_post_type());   ?></span>
      <span class="pull-right"><?php echo get_post_meta(get_the_ID(), 'rew_price' , true); ?> <sup>$</sup></span>

      </h4>
      <h5 class="visible-xs"> REAL ESTATE </h5>
      <p> <?php the_excerpt("") ?> </p>
      <a href="<?php the_permalink();?>" class="more-details pull-right">
      <span class="glyphicon glyphicon-sound-dolby">
        
      </span> more-details..</a>
    </div>
    <div class="prority-meta col-sm-12 col-xs-12">
      <a href="#"><span class="glyphicon glyphicon-map-marker"></span> <?php echo get_post_meta(get_the_ID(), 'address_flat' , true);?></a> 

      <!--<a href="#"><span class="glyphicon glyphicon-user"></span> <?php //the_author_posts_link()?></a> -->
      <a href="#"><span class=""><i class="fa fa-area-chart" aria-hidden="true"></i></span> <?php echo get_post_meta(get_the_ID(), 'Apartment_area' , true);?> <sup>m<sup>2</sup></sup> </a> 
      <a href="#"><span class="glyphicon glyphicon-ok-circle"></span><?php echo get_post_meta(get_the_ID(), 'rew_price' , true); ?> <sup>$</sup> </a>
            <?php if (get_post_type() == 'land') {
        # code...
      }else{

          ?>
                <a href="#"><span class="glyphicon glyphicon-ok-circle"></span> Room:<?php echo get_post_meta(get_the_ID(), 'rew_rooms' , true);?> </a>
          <?php

      }

       ?>
      <a href="#"><span class="fa fa-tags fa-fw"></span><?php the_category(', ') ?> </a> 
      <span class="date pull-right"><span class="glyphicon glyphicon-calendar"></span> <?php the_time('F j, Y');?></span> 
    </div>

    </div>
    </article>
    <!-- end content-rew-post-->

    <?php
  }

  // get_next_posts_link() usage with max_num_pages
// echo get_next_posts_link( 'Older Entries', $the_query->max_num_pages );
// echo get_previous_posts_link( 'Newer Entries' );
  //echo "Done";
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

 //next_posts_link( 'Older Entries »'); 

?>








  </div>

  <!-- end row -->

      <?php
     /* if (function_exists(custom_pagination)) {
        custom_pagination($custom_query->max_num_pages,"",$paged);
      }*/
    ?>
</main>
<!-- End Content -->
  <?php get_footer();?>