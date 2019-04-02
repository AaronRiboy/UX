<?php include "includes/dbconnection.php"?>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Service Request</title>
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">

</head>

<body style="background-color:#1F2739;">

  <!-- Navigation -->
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

  <br><br><br><br><br><br><br>
<div style="padding : 100px 0px 0px 0px">
  <h1 style = "font-size:3em;
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;">Your Feedback Matters </h1>
    <form method="post" action="insert_rating.php">
      <div class="dive" ALIGN="center">
        <p style = "color:white;">How would you rate your satisfaction with SeniorCare services?</p>

        <input type="hidden" id="php1_hidden" value="1" name="phprating">
        <img src="images/star1.png" onmouseover="change(this.id);" id="php1" class="php">
        <input type="hidden" id="php2_hidden" value="2" name="phprating">
        <img src="images/star1.png" onmouseover="change(this.id);" id="php2" class="php">
        <input type="hidden" id="php3_hidden" value="3" name="phprating">
        <img src="images/star1.png" onmouseover="change(this.id);" id="php3" class="php">
        <input type="hidden" id="php4_hidden" value="4" name="phprating">
        <img src="images/star1.png" onmouseover="change(this.id);" id="php4" class="php">
        <input type="hidden" id="php5_hidden" value="5" name="phprating">
        <img src="images/star1.png" onmouseover="change(this.id);" id="php5" class="php">
      </div>
      <input type="hidden" id="phprating">

	<div class="row justify-content-md-center" style="padding: 10px 50px 10px 50px">
      <div class="col-md-4" >
        <textarea name="note" class="col-md-12" placeholder="Your comment here..." required="" rows="3"></textarea>

      </div>
      </div>

      <div class="set-reset row justify-content-md-center" style="padding: 0px 100px 0px 100px">
        <input class="form-control col-md-2" type="submit" name="submitR" id="btnSubmit" value="Submit " onclick="myMsg()">
      </div>

    </form>
 </div>






  <br><br><br><br><br>

  <?php include "footer.php" ?>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script type="text/javascript">

  function change(id) {
    var cname = document.getElementById(id).className;
    var ab = document.getElementById(id + "_hidden").value;
    document.getElementById(cname + "rating").innerHTML = ab;

    for (var i = ab; i >= 1; i--) {
      document.getElementById(cname + i).src = "images/star1.png";
    }
    var id = parseInt(ab) + 1;
    for (var j = id; j <= 5; j++) {
      document.getElementById(cname + j).src = "images/star2.png";
    }
  }

</script>
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

    function myMsg() {
      alert("Your request has been submitted! ")
    }

  </script>


</body>

</html>