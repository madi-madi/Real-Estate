<?php /* Template Name: Search  */


 


get_header();
?>

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
<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  <label class="col-xs-12"> Main Location </label>
  <select class="col-xs-12" id="main-address" name="address">

    <option value=""> Main Location</option>
    <option data-value="ramallah" value="ramallah">Ramallah</option>
    <option data-value="gaza" value="gaza">Gaza</option>
    <option data-value="" value="nosirat">Nosirat</option>
    <option data-value="der-Al-balh" value="der-al-balh">Der Al-balh</option>
    <option data-value="khanyouns" value="khanyouns">Khan Youns</option>
    <option data-value="rafah" value="rafah">Rafah</option>
  </select>
</div>
<!-- End Filed div -->

<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  <label class="col-xs-12"> District </label>
  <select class="col-xs-12" id="district-address" name="district">

    <option value=""> District</option>
    <option value="" class="gaza"> <b>Gaza : </b></option>
    <option value="sheikh-ajlin" class="gaza" <?php selected( $district, 'sheikh-ajlin' ); ?> >Sheikh Ajlin</option>
    <option data-value="tal-al-hawa" value="tal-al-hawa" class="gaza" <?php selected( $district, 'tal-al-hawa' ); ?> >Tal Al-Hawa</option>
    <option value="al-ramla" class="gaza" <?php selected( $district, 'al-ramla' ); ?> >Al-Ramla</option>
    <option value="al-sahaa" class="gaza" <?php selected( $district, 'al-sahaa' ); ?> >Al-Sahaa</option>
    <option value="zaytoun" class="gaza" <?php selected( $district, 'zaytoun' ); ?> >Zaytoun</option>
     <option value="jabalia" class="gaza" <?php selected( $district, 'jabalia' ); ?> >Jabalia</option>
     <option value="alnasr" class="gaza" <?php selected( $district, 'alnasr' ); ?> >Al-Nasr</option>
     <option value="al-shaffa" class="gaza" <?php selected( $district, 'al-shaffa' ); ?> >Al-Shaffa</option>
     <option value="al-shajaeia" class="gaza" <?php selected( $district, 'al-shajaeia' ); ?> >Al-shajaeia</option>
     <option value="al-mueaskar" class="gaza" <?php selected( $district, 'al-mueaskar' ); ?> >Al-mueaskar</option>
     <option value="al-shshati" class="gaza" <?php selected( $district, 'al-shshati' ); ?> >Al-shshati</option>
     <option value="sheikh-radwan" class="gaza" <?php selected( $district, 'sheikh-radwan' ); ?> >Sheikh Radwan</option>
     <option value="al-jala" class="gaza" <?php selected( $district, 'al-jala' ); ?> >Al-jala</option>

    <option value="Nosirat">Nosirat</option>
    <option value="Der Al-balh">Der Al-balh</option>
    <option value="" class="khanyouns"> <b>Khan Youns : </b></option>
    <option value="Al-Qarara" class="khanyouns">Al-Qarara</option>
    <option value="Bani Suhaila" class="khanyouns">Bani Suhaila</option>
    <option value="Rafah" class="rafah"><b>Rafah :</b></option>
    <option value="Al-balad" class="rafah">Al-balad</option>
    <option value="Musabah" class="rafah">Musabah</option>
  </select>
</div>
<!-- End Filed div -->
<div class="clearfix"></div>
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
<input type="submit" name="submit" class="btn btn-info col-xs-12" value="Search ">
</div>
</form>




</div>
  

</div>  


  

</section>

<!-- End Section Search-->


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

$search_name = get_query_var('search_name' , null);
$address     = get_query_var('address', null);
$district     = get_query_var('district', null);
$category     = get_query_var('category', null);
$property_type     = get_query_var('property_type',null);
$min_room     = get_query_var('min_room', null);
$max_room     = get_query_var('max_room', null);
$min_price     = get_query_var('min_price', null);
$max_price     = get_query_var('max_price', null);
$min_area     = get_query_var('min_area', null);
$max_area     = get_query_var('max_area', null);

//echo '<h1>'.is_null($max_price).'</h1> '. '<h1>'.isset($min_price).'</h1> ';

///  check min price and max price with search form
if ($min_price != ''  && $max_price != ''   ) {
//echo '<h1>'.$max_price.'</h1> '. '<h1>'.$min_price.'</h1> ';
	// echo "Done min";
	// exit();

		     	$max_min_search =
		array(
			'relation'=>'and',
          array(
	 'key'=> 'rew_price',
       'value'=> $min_price,
      'compare'=> '>=',
      'type'=>'NUMERIC'
     		),

          array(
	 'key'=> 'rew_price',
       'value'=> $max_price,
      'compare'=> '<=',
      'type'=>'NUMERIC'
     		),
     		); 

}elseif ( $max_price != '') {
	// echo "Done max";
	// exit();
	
	$max_min_search =
		array(
			'relation'=>'and',
          array(
	 'key'=> 'rew_price',
       'value'=> $max_price,
      'compare'=> '<=',
      'type'=>'NUMERIC'
     		),
     		); 

}else{
	// echo "Done all";
	// exit();

	     	$max_min_search =
		array(
			'relation'=>'and',

          array(
	 'key'=> 'rew_price',
       'value'=> $min_price,
      'compare'=> '>=',
      'type'=>'NUMERIC'
     		),
     		); 
      }


    //  $search_array = $max_min_search;


///

///  check min rooms and max rooms with search form
if ($min_room != ''  && $max_room != ''   ) {
//echo '<h1>'.$max_price.'</h1> '. '<h1>'.$min_price.'</h1> ';
	// echo "Done min";
	// exit();

		     	$max_min_rooms =
    	array(

    		'relation'=>'and',

     	array(
	 'key'=> 'rew_rooms',
      'value'=> $min_room,
       'compare'=> '>=',
       'type'=>'NUMERIC'
     		),

       array(
 'key'=> 'rew_rooms',
       'value'=> $max_room,
       'compare'=> '<=',
       'type'=>'NUMERIC'
     		),
     		); 

}elseif ( $max_room != '') {
	// echo "Done max";
	// exit();
	
	$max_min_rooms =
    	array(

    		'relation'=>'and',
       array(
 'key'=> 'rew_rooms',
       'value'=> $max_room,
       'compare'=> '<=',
       'type'=>'NUMERIC'
     		),
     		);

}elseif($min_room != ''){
	// echo "Done all";
	// exit();

	     	$max_min_rooms =
    	array(

    		'relation'=>'and',

     	array(
	 'key'=> 'rew_rooms',
      'value'=> $min_room,
       'compare'=> '>=',
       'type'=>'NUMERIC'
     		),


     		); 
      }


    //  $search_array = $max_min_search;

///  check min area and max area with search form
if ($min_area != ''  && $max_area != ''   ) {
//echo '<h1>'.$max_price.'</h1> '. '<h1>'.$min_price.'</h1> ';
	// echo "Done min";
	// exit();

		     	$max_min_area =
    	array(

    		'relation'=>'and',

     	array(
	 'key'=> 'Apartment_area',
      'value'=> $min_area,
       'compare'=> '>=',
       'type'=>'NUMERIC'
     		),

       array(
 'key'=> 'Apartment_area',
       'value'=> $max_area,
       'compare'=> '<=',
       'type'=>'NUMERIC'
     		),
     		); 

}elseif ( $max_area != '') {
	// echo "Done max";
	// exit();
	
	$max_min_area =
    	array(

    		'relation'=>'and',
       array(
 'key'=> 'Apartment_area',
       'value'=> $max_area,
       'compare'=> '<=',
       'type'=>'NUMERIC'
     		),
     		);

}elseif($min_area != ''){
	// echo "Done all";
	// exit();

	     	$max_min_area =
    	array(

    		'relation'=>'and',

     	array(
	 'key'=> 'Apartment_area',
      'value'=> $min_area,
       'compare'=> '>=',
       'type'=>'NUMERIC'
     		),

     		); 
      }


    //  $search_array = $max_min_search;

/*
function search_filter($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_search) {
      $query->set('post_type', array( 'post', 'movie' ) );
    }
  }
}

add_action('pre_get_posts','search_filter');rew_rooms
*//*
if ($min_room !='' || $max_room !='') {
	$custom_post_search = array('apartment', 'villa', 'store' ,);
}else{
	$custom_post_search = array('apartment', 'villa', 'store' ,'land');
}
*/

//$custom_post_search = array('apartment', 'villa', 'store' ,'land');
if ($property_type =='apartment') {
	$custom_post_search = array('apartment');
}elseif ($property_type =='villa') {
	# code...
	$custom_post_search = array('villa');
}elseif ($property_type =='store') {
	# code...
	$custom_post_search = array( 'store');
}elseif ($property_type =='land') {
	# code...
	$custom_post_search = array('land');
}else{

	$custom_post_search = array('apartment', 'villa', 'store' ,'land');
}

$args = array(

		'post_type'=>$custom_post_search,
		//'relation'=> 'AND',
		's'=>$search_name,

	
    'meta_query'=>  array(
     	'relation'=>'AND',
     	array(
	 'key'=> 'main_address',
       'value'=> $address,
      'compare'=> 'LIKE'
     		),

     	array(
	 'key'=> 'district_address',
       'value'=> $district,
      'compare'=> 'LIKE'
     		),

     		$max_min_rooms,
			$max_min_search, 


     		$max_min_area,
			     



    ),

    /*   'tax_query' => array(

       // 'relation' => 'AND',
     array(
       'taxonomy' => 'category',
       'field' => 'term_id',
       'terms' => $category,
       'operator' => 'in'
     )
     )*/

);


$result_search = new WP_Query($args);


/*
echo "<pre>";
print_r($property_type);
//exit();
echo '</pre>';
*/

if ($result_search->have_posts()) {

	while ($result_search->have_posts()) {
		$result_search->the_post();
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
      <a href="#"><span class="glyphicon glyphicon-map-marker"></span> <?php echo ucfirst(get_post_meta(get_the_ID(), 'district' , true)) ;?></a> 

			<!--<a href="#"><span class="glyphicon glyphicon-user"></span> <?php //the_author_posts_link()?></a> -->
			<a href="#"><span class=""><i class="fa fa-area-chart" aria-hidden="true"></i></span> <?php echo get_post_meta(get_the_ID(), 'Apartment_area' , true);?> <sup>m<sup>2</sup></sup> </a> 
			<a href="#"><span class="glyphicon glyphicon-ok-circle"></span><?php echo get_post_meta(get_the_ID(), 'rew_price' , true); ?> <sup>$</sup> </a>
			      <?php if (get_post_type() == 'land') {
        # code...
      }else{

          ?>
                <a href="#"><span class="glyphicon glyphicon-ok-circle"></span> Rooms :<?php echo get_post_meta(get_the_ID(), 'rew_rooms' , true);?> </a>
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
		# code...
	}
	# code...
}else{

	echo "<h1> No Items </h1>";
}

?>



	</div>

	<!-- end row -->
</main>
<!-- End Content -->


<?php




get_footer();

?>


