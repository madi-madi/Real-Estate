<footer class="">
						<div class=" soial-media text-center">
            <?php


              echo do_shortcode('[load_soial_media link_soial= http://www.fb.com  div_class = facebook class_icon = "fa fa-facebook"]');

              echo do_shortcode('[load_soial_media link_soial= http://www.google.com  div_class = google class_icon ="fa fa-google-plus"]');

               echo do_shortcode('[load_soial_media link_soial= http://www.twitter.com  div_class = twitter class_icon ="fa fa-twitter"]');

               echo do_shortcode('[load_soial_media link_soial= http://www.linkedin.com  div_class = linkedin class_icon ="fa fa-linkedin"]');

            ?>


		</div>
		<div class="container">
			<div class="col-sm-4 col-xs-12  rew-links"> 
			<h4>Site Maps</h4>
			<div class="col-xs-5">

<?php
//is_active_sidebar
//if(is_active_sidebar($id)){
//dynamic_sidebar
dynamic_sidebar('footer_widget1');

//}

 ?>		
			</div>
			<div class="col-xs-5">
<?php
//is_active_sidebar
//if(is_active_sidebar($id)){
//dynamic_sidebar
dynamic_sidebar('footer_widget2');

//}

 ?>	

			</div>



			 </div>
			<div class="col-sm-4 col-xs-12 rew-about-me"> 
			<h4> Company 3karatcom </h4>
			<p>Description herre about the Company and team in GSG</p>
			</div>
			<div class="col-sm-4 rew-contact-us"> 
			
<?php
//is_active_sidebar
//if(is_active_sidebar($id)){
//dynamic_sidebar
dynamic_sidebar('footer_widget3');

//}

 ?>
			</div>
		</div>


		<div class=" col-xs-12 text-center fot"> All Rights Save ©  <?php echo date('Y').' ';  bloginfo('name');?>  </div>
		<?php wp_footer(); ?>
	</footer>


		
		
<div class="scorll-up" id="scroll-up" ><i class="fa fa-angle-up fa-3x" aria-hidden="true"></i></div>

</body>

</html> 