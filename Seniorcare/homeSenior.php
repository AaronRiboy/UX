<?php include "includes/dbconnection.php"?>
<html lang="en" dir="ltr">

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

<body style="background-image: url('img/homeSe.jpg');background-size: cover;">
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
            <a class="nav-link js-scroll-trigger" href="serviceRequest.php">Make Request</a>
          </li>
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




  <!--Banner-->
  <section class="section section-xl bg-gray-700" style="height:85%;">
    <div class="container">
      <div class="row service-text">
        <div class="col-sm-9 col-md-7 col-lg-6">
          <div class="box-2">
            <br><br><br>
            <div class="wow-outer" style="color:#00b3b3; padding-left:10%; padding-top: 15%">
              <h3>Welcome,</h3>
              <h1 class="font-weight-bold" style="padding-left: 20%"><?php echo $_SESSION['fullname']; ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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