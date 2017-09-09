<?php /* Template Name: Contact Us */ 

get_header();

?>

<div class="container">  
  <form id="contact" action="<?php echo $_SERVER['REQUEST_URI'];?>" method="POST">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input name="message_name" placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name="message_email" placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea name="message_text" placeholder="Type your Message Here...." tabindex="4" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>
<?php
//user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $attachments  = array('http://assets.atlasobscura.com/article_images/40500/image.jpg');

//php mailer variables
  $to = 'shoppingt277@gmail.com';//get_option('admin_email');
  $subject = "3karatcom";
  $headers = array("From: My 3karatcom <$email>");

/*
   'From: '. get_option('admin_email') . "\r\n" .
    'Reply-To: ' . get_option('admin_email') . "\r\n";*/

//echo $name . ' ' . $email . " " . $message .' ' . $to .' '. strip_tags($message).' ' . $headers;
    echo strip_tags($message);
//Here put your Validation and send mail
$sent = wp_mail($to, $subject, strip_tags($message), $headers , $attachments );
      if($sent) {
      	echo " <br>Done";

      }//message sent!
      else  {

      		echo "<br>Cancel";
      }//message wasn't sent

?>

<?php get_footer(); ?>