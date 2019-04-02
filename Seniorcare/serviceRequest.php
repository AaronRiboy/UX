<?php include("includes/dbconnection.php"); 
if(isset($_POST['serviceCode'])){
	$time = $_POST['bookingDate']." ".str_replace("%3A",":",$_POST['bookingTime']);
	$sql = "INSERT INTO Request (demander,service,acquiredDate) VALUES
			('".$_SESSION['username']."','".$_POST['serviceCode']."','".$time."');";
	if (mysqli_query($dbCon, $sql)){
		echo '<script language="javascript">';
		echo 'alert("Service Requested!")';
		echo '</script>';
		echo  "<script> window.location.assign('homeSenior.php'); </script>";
	} else {
		echo "Error Encountered!";
	}
}

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Service Request</title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous">
  </head>
  <body style="background-image: url(img/elijah-o-donnell-760370-unsplash.jpg);  background-size: cover;background-position: center;">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="homeSenior.php"><img src="img\LogoS.png" class="logo"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">


            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="manageRequestUser.php">Manage Request</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="review.php">Review</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="includes/logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



    <!--Booking-->
		<section>
			<div id="booking" class="section-1">
				<div class="section-center">
					<div class="container ">
						<br><br><br><br><br>
							<div class="row ">
								<div class="booking-form col-md-12 col-sm-12">
									<form name="myForm" id="myForm" action="<?php $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm()" method="POST">
										<div class="text-center welcome">
											<h1>Service Request</h1>
										</div>
										<div class="row">
											<div class="form-group col-md-6">
												<span class="form-label">Type Of Services</span>
												<select class="form-control" name="serviceCode" required >
												<option value="">Select Here</option>
												<option value="SV001">Medical Care</option>
												<option value="SV002">Companionship</option>
												<option value="SV003">Assisted Living</option>
												<option value="SV004">Buying Grocery</option>
												<option value="SV005">Housekeeping</option>
												<option value="SV006">Activities</option>
												</select>
												<span class="select-arrow"></span>
											</div>

											<div class="form-group col-md-6" >
												<span class="form-label">Booking Date</span>
												<input class="form-control" type="date" name="bookingDate" required>
											</div>
										</div>

										<div class="row">
											<div class="form-group col-md-6" >
											<span class="form-label">Booking time</span>
											<input class="form-control" type="time" name="bookingTime" required>
											</div>

											<div class="form-group col-md-6" >
												<span class="form-label">Notes</span>
												<input class="form-control" type="text" placeholder="Optional" name="notes" >
											</div>
										</div>

										<div class="row justify-content-center">
											<div class="col-md-3 center ">
												<div class="form-btn">
													<button class="submit-btn" name"submit">Confirm Booking</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
					</div>
				</div>
			</div>
		</section>
<br><br><br><br>
  <?php include "footer.php" ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>

    <script type="text/javascript" class="navbar-script">
      (function ($) {
        "use strict"; // Start of use strict

        // Smooth scrolling using jQuery easing
        $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
          if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: (target.offset().top - 54)
              }, 1000, "easeInOutExpo");
              return false;
            }
          }
        });

        // Closes responsive menu when a scroll trigger link is clicked
        $('.js-scroll-trigger').click(function () {
          $('.navbar-collapse').collapse('hide');
        });

        // Activate scrollspy to add active class to navbar items on scroll
        $('body').scrollspy({
          target: '#mainNav',
          offset: 56
        });

        // Collapse Navbar
        var navbarCollapse = function () {
          if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
          } else {
            $("#mainNav").removeClass("navbar-shrink");
          }
        };
        // Collapse now if page is not at top
        navbarCollapse();
        // Collapse the navbar when page is scrolled
        $(window).scroll(navbarCollapse);

        // Hide navbar when modals trigger
        $('.portfolio-modal').on('show.bs.modal', function (e) {
          $('.navbar').addClass('d-none');
        })
        $('.portfolio-modal').on('hidden.bs.modal', function (e) {
          $('.navbar').removeClass('d-none');
        })

      })(jQuery); // End of use strict

      //for booking validation
      function validateForm() {
      var x = document.forms["myForm"]["numOfServices"].value;
      if (x == "") {
          alert("Please select the number of services");
          return false;
      } 
    }


    </script>


  </body>
</html>
