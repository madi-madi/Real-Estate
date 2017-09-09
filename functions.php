<?php
/// rigester js | css in your Site
function rew_enqueue_scripts(){
  // wp_enqueue_style( handel 'bootstrap-css', '', false );wp_enqueue_style();
	//css
	wp_enqueue_style(   'botstrap-min-3karatcom-css',  get_theme_file_uri('/assets/css/bootstrap.min.css'),
		 '3.3.7' );
	wp_enqueue_style(   'botstrap-3karatcom-css',  get_theme_file_uri('/assets/css/bootstrap.css'),'3.3.7' );
	wp_enqueue_style(   'font-awesome-css',  get_theme_file_uri('/assets/css/font-awesome.min.css'));
	//wp_enqueue_style(   'media-screen-css',  get_theme_file_uri('/assets/css/media-screen.css'),array());
	wp_enqueue_style(   'style-css',  get_theme_file_uri('/style.css'), '' );

/// js
	wp_enqueue_script('jquery-js', get_theme_file_uri('/assets/js/jquery-3.1.1.min.js'),array(),'3.1.1',true);
	wp_enqueue_script('bootstrap-js', get_theme_file_uri('/assets/js/bootstrap.min.js'),array(),'3.3.7',true);
	wp_enqueue_script('plugins-js', get_theme_file_uri('/assets/js/plugins.js'),array(),'1.0',true);
	//wp_enqueue_style( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, string $media = 'all' )
}

add_action( 'wp_enqueue_scripts', 'rew_enqueue_scripts' );//( this  static 'wp_enqueue_scripts' , 'name function')


/// regestir menu
function rew_register_menu_nav(){

	 register_nav_menu( 'rew-top-menu','3karatcom top nav'  );
}

add_action( 'init', 'rew_register_menu_nav' ); // add action 1- init , name function


function rew_register_menu_footer(){

	 register_nav_menu( 'rew-footer-menu','3karatcom footer'  );
}

add_action( 'init', 'rew_register_menu_footer' ); // add action 1- init , name function


//wordpress add add active class
function special_nav_class ($classes, $item) {
	//var_dump($item);
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

// add filter 
//1- nav_menu_css_class
// 2- name function
// 3- 10 , 6  

add_filter('nav_menu_css_class' , 'special_nav_class' ,10 , 6); 


// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');


// Register YAMM Navigation Walker
require_once('yamm-nav-walker.php');







	 function rew_youtube($atts){
	 $value_atts = shortcode_atts(array(
	 		'youtybe_code'=>'Uvu5bhlVpPQ',
	 		'width'=> 560,
	 		'height'=>350

	 		), $atts ); //ddefault vs  $atts


	 	return '<iframe width="'.$value_atts['width'].'" height="'.$value_atts['height'].'" src="https://www.youtube.com/embed/'.$value_atts['youtybe_code'].'" frameborder="0" allowfullscreen></iframe>';

	 }
	 add_shortcode('load_youtube' ,'rew_youtube' );// two parmeter



//// Shortcode Soial Media

function rew_soial_media($atts){
$value_soial = shortcode_atts(array(
	'link_soial'=>'',
	//'name_soial'=>'',
	'div_class'=>' ',
	'class_icon'=>''



	), $atts);
return '<a href="'.$value_soial['link_soial'].'"><div class="col-xs-3 '.$value_soial['div_class'].' "><i class="'.$value_soial['class_icon'] .'"></i></div></a>';

}//fa fa-facebook

add_shortcode('load_soial_media','rew_soial_media');



 // rew : real Apartment website

/// Servises 
/*

************************************************
  Register Taxonomy Servises Tags

************************************************
*/

function rew_genreic_taxonomy(){

	$args= array(
		'label'=>'Services'
		);
	register_taxonomy( 'services', array('apartment', 'villa', 'land', 'store'), $args );
}

	add_action('init','rew_genreic_taxonomy');

/*

************************************************
  Register custom post Apartment

************************************************
*/

function add_rew_apartment()
{
	$lables = array(
			'name' => 'Apartments',
			'singular_name'=>'Apartment',
			'rewrite'  => array( 'slug' => 'apartment' ),
			'all_items'=> 'All Apartments',
			'add_new'=>'Add New Apartment',
			'add_new_item'=>' Add New Apartment',
    

		 );

	$tax = array(

					'category',

					
		);
	$args = array(
		'labels'=> $lables,
		'public'=>true,
		'show_in_menu'=>true,
		'show_in_admin_bar'=>true,
		'show_in_nav_menus'=>true,
		'description'=>'Enter your Description',
		'menu_position'=>10,
		'menu_icon'=>'dashicons-format-quote',
		'taxonomies'=>$tax,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'query_var'          => true,

		);	
	register_post_type('Apartment', $args);
	//add_action('init' , 'codex_custom_init');
	
}

add_action('init' , 'add_rew_apartment');

//


/*************************************************
  Register custom post Villa

************************************************
*/

function add_rew_villa()
{
	$lables = array(
			'name' => 'Villas',
			'singular_name'=>'Villa',
			'rewrite'  => array( 'slug' => 'villa' ),
			'all_items'=> 'All Vills',
			'add_new'=>'Add New Villa',
			'add_new_item'=>' Add New Villa',
    

		 );

	$tax = array(

					'category',

					
		);
	$args = array(
		'labels'=> $lables,
		'public'=>true,
		'show_in_menu'=>true,
		'show_in_admin_bar'=>true,
		'show_in_nav_menus'=>true,
		'description'=>'Enter your Description',
		'menu_position'=>10,
		'menu_icon'=>'dashicons-format-quote',
		'taxonomies'=>$tax,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'query_var'          => true,

		);	
	register_post_type('Villa', $args);
	//add_action('init' , 'codex_custom_init');
	
}

add_action('init' , 'add_rew_villa');

//



/*************************************************
  Register custom post Land

************************************************
*/

function add_rew_land()
{
	$lables = array(
			'name' => 'Lands',
			'singular_name'=>'Land',
			'rewrite'  => array( 'slug' => 'land' ),
			'all_items'=> 'All Lands',
			'add_new'=>'Add New Land',
			'add_new_item'=>' Add New Land',
    

		 );

	$tax = array(

					'category',

					
		);
	$args = array(
		'labels'=> $lables,
		'public'=>true,
		'show_in_menu'=>true,
		'show_in_admin_bar'=>true,
		'show_in_nav_menus'=>true,
		'description'=>'Enter your Description',
		'menu_position'=>10,
		'menu_icon'=>'dashicons-format-quote',
		'taxonomies'=>$tax,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'query_var'          => true,

		);	
	register_post_type('Land', $args);
	//add_action('init' , 'codex_custom_init');
	
}

add_action('init' , 'add_rew_land');

//


/*************************************************
  Register custom post Store

************************************************
*/

function add_rew_store()
{
	$lables = array(
			'name' => 'Stores',
			'singular_name'=>'Store',
			'rewrite'  => array( 'slug' => 'store' ),
			'all_items'=> 'All Stores',
			'add_new'=>'Add New Store',
			'add_new_item'=>' Add New Store',
    

		 );

	$tax = array(

					'category',

					
		);
	$args = array(
		'labels'=> $lables,
		'public'=>true,
		'show_in_menu'=>true,
		'show_in_admin_bar'=>true,
		'show_in_nav_menus'=>true,
		'description'=>'Enter your Description',
		'menu_position'=>10,
		'menu_icon'=>'dashicons-format-quote',
		'taxonomies'=>$tax,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'query_var'          => true,

		);	
	register_post_type('Store', $args);
	//add_action('init' , 'codex_custom_init');
	
}

add_action('init' , 'add_rew_store');

//



// Register Custom Taxonomy
/*function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Taxonomies', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Taxonomy', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_col
		on'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'taxonomy', array( 'apartment' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );

*/




/*

************************************************
  Register custom fielde in post

************************************************
*/


function address_input(){
	$main_address = get_post_meta(get_the_ID(), 'main_address' , true);
	//echo $address_flat;
	//exit;
	?>
	<fieldset>
		<label for="address_rew" > Address  </label>
		<input type="text" name="main_address"  id="main_address" value="<?php echo $main_address; ?>"/>
	</fieldset>
	<?php
}

function address_district_input(){
	$district_address = get_post_meta(get_the_ID(), 'district_address' , true);
	//echo $address_flat;
	//exit;
	?>
	<fieldset>
		<label for="address_district_rew" > District </label>
		<input type="text" name="district_address"  id="district_address" value="<?php echo $district_address; ?>"/>
		<select class="col-xs-12" id="district_address" name="district_address">

    <option value=""> District</option>
    <option value="" class="gaza"> <b>Gaza : </b></option>
    <option value="sheikh-ajlin" class="gaza" <?php selected( $district_address, 'sheikh-ajlin' ); ?> >Sheikh Ajlin</option>
    <option data-value="tal-al-hawa" value="tal-al-hawa" class="gaza" <?php selected( $district_address, 'tal-al-hawa' ); ?> >Tal Al-Hawa</option>
    <option value="al-ramla" class="gaza" <?php selected( $district_address, 'al-ramla' ); ?> >Al-Ramla</option>
    <option value="al-sahaa" class="gaza" <?php selected( $district_address, 'al-sahaa' ); ?> >Al-Sahaa</option>
    <option value="zaytoun" class="gaza" <?php selected( $district_address, 'zaytoun' ); ?> >Zaytoun</option>
     <option value="jabalia" class="gaza" <?php selected( $district_address, 'jabalia' ); ?> >Jabalia</option>
     <option value="alnasr" class="gaza" <?php selected( $district_address, 'alnasr' ); ?> >Al-Nasr</option>
     <option value="al-shaffa" class="gaza" <?php selected( $district_address, 'al-shaffa' ); ?> >Al-Shaffa</option>
     <option value="al-shajaeia" class="gaza" <?php selected( $district_address, 'al-shajaeia' ); ?> >Al-shajaeia</option>
     <option value="al-mueaskar" class="gaza" <?php selected( $district_address, 'al-mueaskar' ); ?> >Al-mueaskar</option>
     <option value="al-shshati" class="gaza" <?php selected( $district_address, 'al-shshati' ); ?> >Al-shshati</option>
     <option value="sheikh-radwan" class="gaza" <?php selected( $district_address, 'sheikh-radwan' ); ?> >Sheikh Radwan</option>
     <option value="al-jala" class="gaza" <?php selected( $district_address, 'al-jala' ); ?> >Al-jala</option>
    <option value="nosirat" <?php selected( $district_address, 'nosirat' ); ?> >Nosirat</option>
    <option value="der-al-balh" <?php selected( $district_address, 'der-al-balh' ); ?> >Der Al-balh</option>
    <option value="" class="khanyouns"  > <b>Khan Youns : </b></option>
    <option value="al-qarara" class="khanyouns" <?php selected( $district_address, 'al-qarara' ); ?> >Al-Qarara</option>
    <option value="bani-suhaila" class="khanyouns" <?php selected( $district_address, 'bani-suhaila' ); ?> >Bani Suhaila</option>
    <option value="rafah" class="rafah"  ><b>Rafah :</b></option>
    <option value="al-balad" class="rafah" <?php selected( $district_address, 'al-balad' ); ?> >Al-balad</option>
    <option value="musabah" class="rafah" <?php selected( $district_address, 'musabah' ); ?> >Musabah</option>
  </select>
	</fieldset>
	<?php
}


function rew_floors(){
	$rew_floor = get_post_meta(get_the_ID(), 'rew_floor' , true);
	?>

		<fieldset>
		<label for="address_rew" > Floor Number </label>
		<input type="number" name="rew_floor" id="rew_floor" value="<?php echo $rew_floor; ?>">
	</fieldset>
	<?php
}


function rew_rooms(){
	$rew_rooms = get_post_meta(get_the_ID(), 'rew_rooms' , true);
	?>

		<fieldset>
		<label for="address_rew" > Rooms Number </label>
		<input type="number" name="rew_rooms" id="rew_rooms" value="<?php echo $rew_rooms; ?>">
	</fieldset>
	<?php
}



function rew_area(){
	$Apartment_area = get_post_meta(get_the_ID(), 'Apartment_area' , true);
	?>

		<fieldset>
		<label for="address_rew" >  Esatate Area </label>
		<input type="number" name="Apartment_area" id="Apartment_area" value="<?php echo $Apartment_area; ?>">
	</fieldset>
	<?php
}



function rew_price(){
	$rew_price = get_post_meta(get_the_ID(), 'rew_price' , true);
	?>

		<fieldset>
		<label for="address_rew" > Real Estate Price </label>
		<input type="number" name="rew_price" id="rew_price" value="<?php echo $rew_price;  ?>">
	</fieldset>
	<?php
}

/// villa garden 
function rew_garden(){
	$rew_garden = get_post_meta(get_the_ID(), 'rew_garden' , true);
	?>

		<fieldset>
		<label for="address_rew" > Garden </label>
		<input type="radio" name="rew_garden" id="rew_garden" value="Garden" <?php if($rew_garden == 'Garden') echo 'checked';  ?>> 
				<label for="address_rew" > None Garden </label>
		<input type="radio" name="rew_garden" id="rew_garden" value="None-Garden" <?php if($rew_garden == 'None-Garden') echo 'checked';  ?> > 
	</fieldset>
	<?php
}

/*

************************************************
  function  used to add meta box in custom post 

************************************************
*/


function address_meta_box()
{

	add_meta_box('main_address', 'Address Real Estate' , 'address_input',  array('apartment', 'villa','land' , 'store') , 'advanced' , 'high',null);

	add_meta_box('district_address', 'District Real Estate' , 'address_district_input',  array('apartment', 'villa','land' , 'store') , 'advanced' , 'high',null);
		add_meta_box('rew_floor', 'Floor Number' , 'rew_floors', array('apartment', 'villa')  , 'advanced' , 'high',null);
		add_meta_box('rew_rooms', 'Rooms Number' , 'rew_rooms',array('apartment', 'villa')  , 'advanced' , 'high',null);
		add_meta_box('Apartment_area', 'Real Estate Area' , 'rew_area', array('apartment', 'villa','land' , 'store')  , 'advanced' , 'high',null);
	add_meta_box('rew_price', 'Real Estat Price' , 'rew_price', array('apartment', 'villa','land' , 'store')  , 'advanced' , 'high',null);

	/// villa rew_garden
	add_meta_box('rew_garden', 'Garden Real Estate' , 'rew_garden',  array( 'villa') , 'advanced' , 'high',null);

}


add_action('add_meta_boxes' , 'address_meta_box');

/// end function  used to add meta box in custom post 


/*

************************************************
  function  used to add meta box in custom post 

************************************************
*/

function  save_rew_meta_box_input($rew_id)
{

	if (isset($_POST['main_address'])){
		
		update_post_meta($rew_id , 'main_address', $_POST['main_address']);
	}

	if (isset($_POST['district_address'])){
		
		update_post_meta($rew_id , 'district_address', $_POST['district_address']);
	}

	if (isset($_POST['rew_rooms'])){
		
		update_post_meta($rew_id , 'rew_rooms', $_POST['rew_rooms']);
	}


	if (isset($_POST['rew_floors'])){
		
		update_post_meta($rew_id , 'rew_floors', $_POST['rew_floor']);
	}
	if (isset($_POST['Apartment_area'])){
		
		update_post_meta($rew_id , 'Apartment_area', $_POST['Apartment_area']);
	}

	if (isset($_POST['flat_type'])){
		
		update_post_meta($rew_id , 'flat_type', $_POST['flat_type']);
	}

	if (isset($_POST['rew_price'])){
		
		update_post_meta($rew_id , 'rew_price', $_POST['rew_price']);
	}



		// villa rew_garden
	if (isset($_POST['rew_garden'])){
		
		update_post_meta($rew_id , 'rew_garden', $_POST['rew_garden']);
	}

}

add_action('save_post' , 'save_rew_meta_box_input');

//  end function save value with custom post 


/* End  custom post Apartment */


//// show widget in dashbord
/*
function rew_footer_widget(){
	$args = array(
		'name'=>'',
		'id'=>'',


		);

}

*/




/*

************************************************
  support featur Image : add image main post or cover 

************************************************
*/
add_theme_support( 'post-thumbnails' ); 



/*

************************************************

function return just 20 chart in p 

************************************************
*/

function pargraph_custom_excerpt_length( $lenght){

	return 15;
}
add_filter('excerpt_length','pargraph_custom_excerpt_length',999);

// end  function  excerpt length

 
/*

************************************************
   functiion Excerpt More 
   filter the excerpt "read more " string 

************************************************
*/

function paragraph_excerpt_more($more)
{
	return '';/// return read more default [...] -> change to null or link  read more
}

add_filter('excerpt_more', 'paragraph_excerpt_more');

// End Function  Excerpt more 

/*

************************************************

query var Search   /// return value for input  filde

************************************************
*/

function add_query_vars_filter( $vars ){
  $vars[] = "search_name";
  $vars[] = "address";
  $vars[] = "district";
  $vars[]="category";
  $vars[]="property_type";
  $vars[]="min_room";
  $vars[]="max_room";
  $vars[]="min_price";
  $vars[]="max_price";
  $vars[]="min_area";
  $vars[]="max_area";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );

///// end function search return  value with form 



/*

************************************************

Pagination here 

************************************************
*/

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }

}



/**************************************************

Widget Register 

****************************************************/

//add_action('widgets_init','rew_register_footer_widgets');

    function rew_register_footer_widgets1(){
      $args=array(
         'name'=>'Footer_widget1',
         'id'=>'footer_widget1',
         'before_widget' => '<ul class="list-unstyled three-columns">',
         'after_widget' => '</ul>'
      	);
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_register_footer_widgets1');


    ////

        function rew_register_footer_widgets2(){
      $args=array(
         'name'=>'Footer_widget2',
         'id'=>'footer_widget2',
         'before_widget' => '<ul class="list-unstyled three-columns">',
         'after_widget' => '</ul>'
      	);
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_register_footer_widgets2');



////

         function rew_register_footer_widgets3(){
      $args=array(
         'name'=>'Footer_widget3',
         'id'=>'footer_widget3',
         'before_widget' => '<div class="col-sm-12 col-xs-12">',
         'after_widget' => '</div>'
      	);
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_register_footer_widgets3');


////


         function rew_register_footer_widgets4(){
      $args=array(
         'name'=>'Footer_widget4',
         'id'=>'footer_widget4',
         'before_widget' => '<div class="col-sm-4 col-xs-12 rew-about-me"> ',
         'after_widget' => '</div>'
      	);
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_register_footer_widgets4');


/*************************************************************

Custom logo

*************************************************************/

//add_theme_support( 'custom-logo' ); 1

/*add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) ); 2*/

function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}

add_action( 'after_setup_theme', 'theme_prefix_setup' );




function wpdocs_set_html_mail_content_type() {
    return 'text/html';
}

add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );
 
 /* $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $to_sent = 'shoppingt277@gmail.com';
   $attachments  = array('http://assets.atlasobscura.com/article_images/40500/image.jpg');

//php mailer variables
  $to = get_option('admin_email');
  $subject = "3kartcom";
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $to_sent . "\r\n";

//echo $name . ' ' . $email . " " . $message .' ' . $to .' '. strip_tags($message).' ' . $headers;
//Here put your Validation and send mail
$sent = wp_mail($to, $subject, strip_tags($message), $headers , $attachments);*/
 
// Reset content-type to avoid conflicts -- https://core.trac.wordpress.org/ticket/23578
remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );

add_action( 'phpmailer_init', 'my_phpmailer_example' );
function my_phpmailer_example( $phpmailer ) {
    $phpmailer->isSMTP();     
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true; // Force it to use Username and Password to authenticate
    $phpmailer->Port = 587;
    $phpmailer->Username = 'shoppingt277@gmail.com';
    $phpmailer->Password = 'shop123456';

    // Additional settings…
    $phpmailer->SMTPSecure = "tls"; // Choose SSL or TLS, if necessary for your server
    $phpmailer->From = $email;
    $phpmailer->FromName = "Forsan";
}

//print_r(my_phpmailer_example($phpmailer));
/*
add_action( 'phpmailer_init', 'mailer_config', 10, 1);
function mailer_config(PHPMailer $mailer){
  $mailer->IsSMTP();
  $mailer->Host = get_option('admin_email'); // your SMTP server
  $mailer->Port = 587;
  $mailer->SMTPDebug = 2; // write 0 if you don't want to see client/server communication in page
  $mailer->CharSet  = "utf-8";
}
 */


/*************************************************************

pagintation Site function 

*************************************************************/


function rew_pagination(){

	global $wp_query;


	$all_pages = $wp_query->max_num_pages;


	$current_page = max(1, get_query_var('page'));

	if ($all_pages > 1) {
		# code...
		return paginate_links(array(

			'base'		=> get_pagenum_link(). '%_%',
			'format'	=> 'page/%#%',
			'current'	=> $current_page,
			'total'		=> $all_pages

			));
	}
}




/**************************************************

change logo login

**************************************************/

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/forsan.png);
		height:80px;
		width:80px;
		border-radius: 50%;
		/*background-size: 320px 65px;*/
		background-repeat: no-repeat;
        	/*padding-bottom: 30px;*/
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


/***************************************************
remove logo  admin bar

***************************************************/

add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );

function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}

//require_once (plugin_dir_path(__FILE__).'../../wp-includes/pluggable.php');



/////////

/*
 
 //1. Add a new form element...
add_action( 'register_form', 'myplugin_register_form' );
function myplugin_register_form() {

    $first_name = ( ! empty( $_POST['first_name'] ) ) ? trim( $_POST['first_name'] ) : '';
        
        ?>
        <p>
            <label for="first_name"><?php _e( 'First Name', 'mydomain' ) ?><br />
                <input type="text" name="first_name" id="first_name" class="input" value="<?php echo esc_attr( wp_unslash( $first_name ) ); ?>" size="25" /></label>
        </p>
        <?php
    }

    //2. Add validation. In this case, we make sure first_name is required.
    add_filter( 'registration_errors', 'myplugin_registration_errors', 10, 3 );
    function myplugin_registration_errors( $errors, $sanitized_user_login, $user_email ) {
        
        if ( empty( $_POST['first_name'] ) || ! empty( $_POST['first_name'] ) && trim( $_POST['first_name'] ) == '' ) {
            $errors->add( 'first_name_error', __( '<strong>ERROR</strong>: You must include a first name.', 'mydomain' ) );
        }

        return $errors;
    }

    //3. Finally, save our extra registration user meta.
    add_action( 'user_register', 'myplugin_user_register' );
    function myplugin_user_register( $user_id ) {
        if ( ! empty( $_POST['first_name'] ) ) {
            update_user_meta( $user_id, 'first_name', trim( $_POST['first_name'] ) );
        }
    }

*/


    //run git function now 