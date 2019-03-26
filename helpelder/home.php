<?php include('server.php')?>

<?php
$page_home = 1;
$page_title = "Home";
include("top_layout.php");?>

	<!--slide show-->
	<div>
		<div id="newCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#newCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#newCarousel" data-slide-to="1"></li>
				<li data-target="#newCarousel" data-slide-to="2"></li>
				<li data-target="#newCarousel" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<div class="img" style="background-image: url('image/seniorcare1.jpeg');"></div></div>
				<div class="item">
					<div class="img" style="background-image: url('image/seniorcare2.jpg');"></div></div>
				<div class="item">
					<div class="img" style="background-image: url('image/seniorcare4.jpg');"></div></div>
				<div class="item">
					<div class="img" style="background-image: url('image/seniorcare3.jpg');"></div></div>
			</div>

		<a class="left carousel-control" href="#newCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#newCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
		</div>
		<a href="AboutUs.php" class="btn btn-success btn-lg btn-block">Read More About Us</a>
	</div>

	<!--content-->
		<div class="row">
			<div class="column">
					<div class="col-xs-12 col-md-6">
          	<h3 class="font-libre">Join Us</h3>
							<img src="image/joinus.jpg" alt="Join Us" width="500px" length="300px">
						 		<br><a href="joinus.php" class="btn btn-success btn-lg btn-block"> > Join Us</a></p>
      		</div>
			</div>

				<div class="column">
					<div class="col-xs-12 col-md-6">
						<h3 class="font-libre">Our Services</h3>
							<img src="image/review.jpg" alt="Review" width="500px" length="300px">
					 			<br><a href="services.php" class="btn btn-success btn-lg btn-block" > > Our Services</a></p>
      		</div>
				</div>
   </div>
	<?php include('btm_layout.php') ?>
