<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8"/>
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width"/>
<link rel="shortcut icon" href="logos/50.png">
<title>NSS-DTU</title>


<!-- Included CSS Files-->
<link rel="stylesheet" href="stylesheets/style.css">
<link rel="stylesheet" href="stylesheets/homepage.css"><!-- homepage stylesheet -->
<link rel="stylesheet" href="stylesheets/glyphicon.css"><!-- to make use of glyphicons in footer basically -->
<link rel="stylesheet" href="stylesheets/skins/blue.css"><!-- skin color -->
<link rel="stylesheet" href="stylesheets/responsive.css">

</head>
<body>




<!-- Header -->
<div class="row">
		<div class="three columns" >
			<div class="logo1 " >
				<img src="logos/name.jpg" alt="">
			</div>
		</div>	
		
		
		<div class="nine columns noleftmarg">		
			<nav id="nav-wrap">
				<ul class="nav-bar sf-menu">
				
					<li >
					<a href="index.php">Home</a>		
					</li>

					<li>
					<a href="about.php">About Us</a>	
					</li>


					<li>
					<a href="#">Events</a>
						<ul>
						<li><a href="past_events.php">Past Events</a></li>
						<li><a href="special_events.php">Special Events</a></li>
						<li><a href="upcoming_events.php">Upcoming Events</a></li>
						<li><a href="internships.php">Internship Opportunities</a></li>
						<li><a href="engifest.php">Engifest DTU</a></li>

						</ul>
					</li>
					
					<li>
					<a href="https://nssdeltech.wordpress.com/" target="_blank">Blog</a>
						
					</li>

					<li>
					<a href="gallery2.php">Gallery</a>
					</li>
					
					

					<li>
					<a href="collaborations.php">Collaborations</a>
					</li>
					
					
					<li class="active">
					<a href="contact1.php">Contact Us</a>
					</li>
					
				</ul>
				 <!----start-top-nav-script---->
		                     
				
				</nav>
		</div>	
	
</div>
<div class="clear">
</div>
<!-- Header ends -->


<!-- SUBHEADER
================================================== -->
<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="left">
				 <h1 class=" mobile-adjustment ">Contact Us</h1>
			</p>
			
		</div>
	</div>
</div>
<div class="hr">
</div>


<!-- Map -->
<div class="row">
    <!-- GOOGLE MAP IFRAME -->
    <div class="twelve columns">
    	<div class="contact-map" id="map-canvas"> </div>  
        <div class="clearfix"></div>
    </div>
	
</div>
<!-- Map section ends -->


<!-- Contact us form -->

	<div class="row" style="margin-top:30px;">
		
		<div class="twelve columns" >
			<div class="wrapcontact ">
				<h3 style="color:#000;">Send us a Message</h3>
				
				<div class="hr">
				</div>

				<div class="done">
					<div class="alert-box success"  >
					 Message has been sent! <a href="" class="close">x</a>
					</div>
				</div>			
					<form method="post" action="contact.php" id="contactform">
					<div class="form">
					    <div class="six columns noleftmargin"  >
						<label>Name</label>
						<input type="text" name="name" class="smoothborder" placeholder="Your name *"/>
						</div>
						<div class="six columns noleftmargin"  >
						<label>E-mail address</label>
						<input type="text" name="email" class="smoothborder" placeholder="Your e-mail address *"/>
						</div>
						
						<label>Message</label>

						<textarea name="comment" class="smoothborder ctextarea" rows="14" placeholder="Message, feedback, comments *"></textarea>
						<input type="submit" id="submit" class="readmore" value="Submit">
					</div>
					</form>			
			</div>
		</div>
													
	</div>
	<div class="hr">
	</div>

<!-- Form ends -->

	<div class="hr">
	</div>
	

<div class="row">
		<div class="twelve columns">
		<h3 style="color:#000;">Contacts</h3>		
		</div>
		
		<div class="six columns">
		
		<p>		
				Name 1 (+91999999999)<br>
				Name 1 (+91999999999)<br>
				Name 1 (+91999999999)<br>
		</p>
		</div>
		<div class="six columns">
		
		<p>		
				<strong>Email id :</strong>&nbsp nss@dtu.ac.in <br>
				<strong>Blog :</strong>&nbsp https://nssdeltech.wordpress.com <br>
				<strong>Etc :</strong>&nbsp<br>
		</p>
		</div>
		<br>
</div>

<!-- FOOOTER 
================================================== -->
<?php include("footer.php");  ?>



<!-- JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->
<script src="javascripts/foundation.min.js"></script>
<script src="javascripts/formvalidation.js"></script>
<script src="javascripts/jquery.cycle.js"></script>
<script src="javascripts/app.js"></script>
<script src="javascripts/modernizr.foundation.js"></script>
<script src="javascripts/slidepanel.js"></script>
<script src="javascripts/scrolltotop.js"></script>
<script src="javascripts/hoverIntent.js"></script>
<script src="javascripts/superfish.js"></script>
<script src="javascripts/responsivemenu.js"></script>
<script src="javascripts/map.js"></script> <!-- deals with map -->
<!-- coming two js files deals with bouncing effect of text -->
<script src="javascripts/wow.min.js"></script>
<script>new WOW().init();</script> 
<!--script src="js/preloader.js"></script><!-- deals with preloader-->
  


</body>
</html>