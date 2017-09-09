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
 
<section id="primary" class="site-content">
<div id="content" role="main">
 
<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>
 
<header class="archive-header">
<h1 class="archive-title">Category: <?php single_cat_title( '', false ); ?></h1>
 
 
<?php
// Display optional category description
 if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>
</header>
 
<?php
 
// The Loop
while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
 
<div class="entry">
<?php the_content(); ?>
 
 <p class="postmetadata"><?php
  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
?></p>
</div>
 
<?php endwhile; 
 
else: ?>
<p>Sorry, no posts matched your criteria.</p>
 
 
<?php endif; ?>
</div>
</section>

                   </div>
    






  </div>

  <!-- end row -->

</main>
<!-- End Content -->


<?php get_footer()?>