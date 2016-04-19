<?php include("Includes/header.php"); //nav-container overlay <div class="page-title"><p>Our Services</p></div>?>

	<div class="nav-container2">
		<?php include("Includes/nav.php");?>
	</div>



	<div class="request-quote-container">

		<div class="quote_hero_text">
			<h1>Why not contact
        <br>us today?</h1>
      <div class="contact-info">
          <span class="phone-num"> <i class="fa fa-phone"> </i>&nbsp  083 108 6566 </span>
          <span class="email"> <i class="fa fa-envelope"> </i>&nbsp  info@clickshift.ie </span>
      </div>

      <div class="socail-media-svg">
          <a href=""><img src="assets/facebook.png" ></a>
          <a href=""><img src="assets/twitter.png" ></a>
          <a href=""><img src="assets/linkedin.png" ></a>
      </div>
		</div>

		<div class="hompage-contact-form">
				<div class="contact-form-heading">
					<h2>Get In Touch</h2>
				</div>
				<form class="contact-form-content" id="contact-form" method="post" action="sendEmail.php" novalidate>
          <div class="error_message"></div>
					<div class="name_input_holder">
						<input  type="text" name="first_name" class="first_name" placeholder="First Name *" required>
						<input  type="text" name="last_name" class="last_name" placeholder="Last Name *" required>
					</div>
					<div class="email_input_holder">
						<input  type="email" name="email" class="email" placeholder="Email *" required>
					</div>
					<div class="textarea_holder">
						<textarea  name="message" class="message" placeholder="Message *" required></textarea>
					</div>
					<div class="submit_holder">
						 <input type="submit" value="Submit" class="submit"/>
					</div>
				</form>
		</div>
	</div>

  <?php include("Includes/footer.php"); ?>
