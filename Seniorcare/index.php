<html lang="en" dir="ltr">
<?php include "includes/signin.php"; ?>
<head>
  <meta charset="utf-8">
  <title>SeniorCare</title>
  <link href="style.css" rel="stylesheet">
  <link href="portfolioStyle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img\LogoS.png" class="logo"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" data-toggle="modal" href="#login">Sign In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>




  <!--Banner-->
  <section class="section section-xl bg-gray-700 bg-image home-banner">
    <div class="container">
      <div class="row justify-content-sm-end service-text">

        <div class="col-sm-9 col-md-7 col-lg-6">
          <div class="box-2">
            <br><br><br><br><br>
            <div class="wow-outer">
              <h4>SeniorCare</h4>
              <h3 class="font-weight-bold">Easier LifeStyle</h3>
              <p>The Senior Care is beyond a home for the elderly. We want you to embrace aging and delight in utmost
                comfort by catering exclusivity in the form of a 24-hour. Choose contentment by choosing The Senior
                Care as we are equipped opulently with specialized amenities for senior citizens. We take
                accountability in providing top-notch service by ensuring our residents receive perfect care,
                medications, and physiotherapy aid, to hospital follow-ups, nutritional guidance and mental stimuli.
                Our qualified nurses and caregivers are fully trained to meet the needs of our residents. At The Senior
                Care, we prioritize emotional livelihood and make sure our residents are treated respectfully and with
                love to ensure they feel at home.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--Services-->
  <section id="portfolio">
    <div class="row welcomme text-center">
      <div class="col-12">
        <h1 class="display-4">Type of Services</h1>
      </div>
      <hr>
      <div class="col-12">
        <p class="lead">We will prodive the most convient services</p>
      </div>

    </div>
    <div class="container">
      <div class="row">

        <div class="col-md-4 col-sm-6 portfolio-item">
            <img class="img-fluid" src="img\geriatric-medical-care.jpg" alt="" >
          <div class="portfolio-caption">
            <h4>Medical Care</h4>
            <p class="text-muted">Call us for more details</p>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
            <img class="img-fluid" src="img\services3.jpg" alt="">
          <div class="portfolio-caption">
            <h4>Companionship</h4>
            <p class="text-muted"> We will provide various activities to keep you occupied. You can also bond with the
              other residents of the centre.</p>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
            <img class="img-fluid" src="img\Nurse-older-medication.jpg" alt="">
          <div class="portfolio-caption">
            <h4>Assisted Living</h4>
            <p class="text-muted">We are able to care for the able-bodied & semi able-bodied patients.</p>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
            <img class="img-fluid" src="img\helping-senior-citizen-grocery-shop-750.jpg" alt="">
          <div class="portfolio-caption">
            <h4>Shopping</h4>
            <p class="text-muted">Will Accompany them </p>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
            <img class="img-fluid" src="img\Our_Services-Cleaning_for_Seniors-400x267.jpg" alt="">
          <div class="portfolio-caption">
            <h4>Housekeeping</h4>
            <p class="text-muted">Our Caregiver will carry out round the clock housekeeping and perform chores such as
              doing dishes, laundry, taking out the trash and plus bed making.</p>
          </div>
        </div>


        <div class="col-md-4 col-sm-6 portfolio-item">
            <img class="img-fluid" src="img\Fotolia_49135035_M.jpg" alt="">
          <div class="portfolio-caption">
            <h4>Activities</h4>
            <p class="text-muted">We will arrange for a variety of activities to keep your mind sharp and your body
              healthy. This may include simple tasks like walking around the garden or rigorous such as physiotherapy.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--About US-->
  <section class="bg-light" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
          <h3 class="section-subheading text-muted">Representing from Help University</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img\aaron.jpg" alt="">
            <h4>Aaron Kajenderan</h4>
            <p class="text-muted">Company Director</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/aaron.riboyii">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-phone"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img\khubs.jpg" alt="">
            <h4>Khuberan Raj</h4>
            <p class="text-muted">Lead Marketer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/khubs.raj">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-phone"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
		<div class="col-sm-6">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img\dam.jpg" alt="">
            <h4>Dam Chong</h4>
            <p class="text-muted">Software Developer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/damchong95">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-phone"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
		<div class="col-sm-6">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img\yimin.jpg" alt="">
            <h4>Yi Min</h4>
            <p class="text-muted">Quality Assurance Manager</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/yimin22">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-phone"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
		<div class="col-sm-6">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img\gau.jpg" alt="">
            <h4>Gauthaman</h4>
            <p class="text-muted">Public Relation Manager</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/GauthamGau98">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-phone"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section>



  <!-- Contact -->
  <section id="contact">
    <div class="container-fluid bg-contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase" style="font-weight:bold;">Contact Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required"
                      data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required"
                      data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required"
                      data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required"
                      data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <!-- Footer -->
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send
                    Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; SeniorCare 2018</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-phone"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
    <!-- Sign In Modal-->
	<div id="login" class="modal fade" style="padding : 0px;">
	  <div class="modal-dialog  modal-dialog-centered">
		<div class="modal-content" style="width: auto;margin: auto;">
		  <div class="modal-header" style="margin: auto;">
			 <img src="img/loginSC.png" style="height: 308px; width: 314px;">
		  </div>

		  <div class="modal-body" style="padding: 26px 80px 13px 80px;">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<div class="form-group">
						<input class="form-control" type="text" class="form-control" placeholder="Username" name="username" <?php if(isset($_POST['username'])){echo 'value="'.$_POST['username'].'"';}?> required>
					</div>

					<div class="form-group">
						<input class="form-control" type="password" placeholder="Password" name="password" required>
					</div>

					<div class="form-group">
						<input class="form-control" type="submit" value="Log In"style="background-color:lightblue">
					</div>
					<div style="font-size : 9pt;" class="text-center">
						<a href="#contact" onclick="forgotAcc();">Forgotten account?</a> &middot <a href="">Sign up for SeniorCare</a>
					</div>

				</form>
		  </div>
		</div>

	  </div>
	</div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <script type="text/javascript" class="navbar-script">
  <?php if($error!=""){
		echo 'alert("'.$error.'");';
		echo '$("#login").modal();';
	}?>
	function forgotAcc(){
		$("#login").modal('hide');
	}
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
