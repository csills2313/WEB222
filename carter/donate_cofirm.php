<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<title>Birds With Dentures Charity</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Birds With Dentures" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<script src="scripts/jquery.bgswitcher.js"></script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/swipebox.css" type="text/css" media="all" />

<style type="text/css">
table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
	padding: 15px;
    text-align: center;
}

</style>

<!--// css -->

<script >
$(document).ready(function(){
$(".banner").bgswitcher({

	 images: ["images/bald-eagles-44243_1280.jpg", "images/eagle1.jpg", "images/bird_teeth.jpg", "images/Birds-Brushing-Their-Teeth--121823.jpg"], // Background images

	  effect: "fade", // fade, blind, clip, slide, drop, hide

	  interval: 5000, // Interval of switching

	  loop: true, // Loop the switching

	  shuffle: false, // Shuffle the order of an images

	  duration: 3000, // Effect duration

	  easing: "swing" // Effect easing

	});
	});
</script>

<!--fonts-->

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,800,700,600' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

<!--/fonts-->


</head>
<body>
	<div class="banner">

			<div class="banner-grids">

				<div class="banner-grid-left">

					<div class="header-logo" style="float:left">

						<h1>Birds With Dentures Charity</h1>

					</div>

					<div class="top-nav" style="float:left">

							<ul class="cl-effect-1">

								<li><a href="index.php">Home</a></li>                                             

								<li><a href="about.php">About</a></li>

								<li><a href="donations.php"><strong>Donate Now</strong></strong></a></li> 

								<li><a href="contact.php">Contact</a></li>
                                
                                <li><a href="shoppingcart/index.php">My Cart</a></li>     

							</ul>

					</div>

				</div>

				<div class="banner-grid-info">

					<div class="social-icons">

						<ul>

							<li><a href="#" class="facebook"></a></li>

							<li><a href="#" class="facebook twitter"></a></li>

							<li><a href="#" class="facebook dribble"></a></li>

						</ul>

					</div>
				</div>

				<div class="clearfix"> </div>

			</div>

	</div>
	<!-- blog -->
	<div class="blog">
		<!-- container -->
		<div class="container">
			<div class="col-md-9 blog-grids">
			  <div class="blog-left single-left">
			    <p><a href="single.html">Thank you for your donation.  View your donation confirmation here</a></p>
				  <p>&nbsp;</p>
                 <table>
                 <th>Donor's Name</th><th>Email Address</th><th>Address</th><th>State</th><th>Zip Code</th>
                 <tr>
                 <td><?php echo $_POST["name"] ?></td><td><?php echo $_POST["email"] ?></td><td><?php echo $_POST["address"] ?></td><td><?php echo $_POST["state"] ?></td><td><?php echo $_POST["zipcode"] ?></td>
                 </tr>
                 </table>
                  <table></br></br></br>
                  <th>Name</th><th>Donation Code</th><th>Quantity</th><th>Amount Donated</th>
				 <?php		
    foreach ($_SESSION["cart_item"] as $item){
		?>
        
				<tr>
				<td><strong><?php echo $item["name"]; ?></strong></td>
				<td><?php echo $item["code"]; ?></td>
				<td><?php echo $item["quantity"]; ?></td>
				<td align="right"> <?php echo "$".$item["price"]; ?></td>				
				</tr>
				<?php
        $item_total += ($item["price"]*$item["quantity"]);
		}
		session_destroy();
		?>
        </table>
				  <p class="likes">&nbsp;</p>
<img src="images/parrot-1209201_1280.jpg" alt="" />
				<p>&nbsp;</p>
			  </div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //blog -->
	<!-- footer -->
	<div class="footer">

		<!-- container -->

		<div class="container">

			<div class="footer-top">

				<div class="footer-logo">

					<h1 style="color:#CCC">Birds With Dentures</h1>

				</div>

				<div class="footer-nav">

					<ul>

						<li><a href="about.html">About</a></li>

						<li><a href="blog.html">Blog</a></li>

						<li><a href="contact.html">Contact</a></li>

					</ul>

				</div>

				<div class="clearfix"> </div>

			</div>

			<div class="footer-bottom">

				<div class="col-md-3 footer-left">

							<h3>About</h3>

					<p>We are a group of devoted bird entusiasts whom want to increase the safety and future of these majest creatures through proper dental advancements......</p>

				</div>

				<div class="col-md-3 posts">

					<h3>Latest Posts</h3>

					<div class="post-info">

						<a href="#">Would the Doto have gone extinct...</a>

						<p>2 June 2016</p>

					</div>

					<div class="post-info">

						<a href="#">What to do if you are chased by...</a>

						<p>23 May 2016</p>

					</div>

					<div class="post-info">

						<a href="#">Umbrellas to shew away seagulls, fact or fiction...</a>

						<p>3 May 2016</p>

					</div>

				</div>

				<div class="col-md-3 comments">

					<h3>Comments</h3>

					<p>How to spot a bird in need.</p>

					<p>Why did it take so long to address their needs.</p>

					<p>Regular cleaning of bird's teeth equals less bird flu.</p>

				</div>

				<div class="col-md-3 address">

					<h3>Address</h4>

					<ul>

					    <li>500 S Birds Nest Ln</li>

						<li>Somewhere Warm</li>

						<li>USA</li>

						<li>Phone:(555) 555-5555</li>

						<li>Fax: (555) 555-5551</li>

						<li><a href="mailto:dentures4birds@birdmail.com">dentures4birds@birdmail.com</a></li>

					</ul>

				</div>

				<div class="clearfix"> </div>

				<div class="copyright">

					<p>&nbsp;</p>

				</div>

			</div>

		</div>

		<!-- //container -->

	</div>
	<!-- //footer -->
</body>
</html>