<?php  include "includes/signup.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>SeniorCare</title>


  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>



  <!-- Main Styles -->

  <!-- Responsive CSS Styles -->
  <link rel="stylesheet" href="responsive.css" type="text/css">
</head>
<style>

  body, html {

          background-size: cover ;
          background-repeat: no-repeat;


        }



        .card-container.card {
            max-width: 700px;
            background-color:  #dddddd;


        }

        .btn {
            font-weight: 700;
            height: 36px;
            -moz-user-select: none;
            -webkit-user-select: none;
            user-select: none;
            cursor: default;
        }

        /*
         * Card component
         */
        .card {

            /* just in case there no content*/
            padding: 20px 0px 30px;
            margin: 0 auto 25px;

            /* shadows and rounded borders */
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        /* Center the avatar image inside this container */
        .imgcontainer {
            text-align: center;
            margin: 24px 0px 12px 0;

        }

        /* Avatar image */
        img.avatar {




        }

        img.logo {
            width: 10%;
            margin-left: auto;
            margin-right: auto;
            display: block;



        }

        .input{
          width: 99%;
          height: 100%;
        }
        img.avatar {
            width: 30%;
            border-radius: 50%;
            opacity: 1;
        }

        img.logo {
            width: 20%;
            margin-left: auto;
            margin-right: auto;
            display: block;
            margin-top: -60px;
            opacity: 1;

        }
        span.signup {
            float: right;
            padding-top: 25px;
        }

</style>

<body style="background-image:url(signup2.jpg) ; background-size: cover">


  <!-- Header Section Start -->
  <div class="header">
    <h1 style="color:#00b3b3; text-align:center; padding-top:20px; font-weight:bold">SeniorCare SignUp</h1><br>

    <!-- Start intro section -->

    <!-- Header Section End -->

    <!-- Off Canvas Navigation -->
    <div class="container">
      <div class="card-container card">
        <div class="imgcontainer">
          <img src="images\sign-up.png" alt="Avatar" class="avatar">
        </div>
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
          <div class="login-wrap">
            <div class="login-html">
              <div class="login-form">
                <div class="sign-in-htm">
                  <div class="group">
                    <label for="user" class="label" style="color:#00b3b3; font-size:20px; font-weight:bold">Username</label>
                    <input id="user" type="text" class="input" name="username" style="font-size: 20px" value="<?php echo $username; ?>">
                    <span>
                      <?php echo $username_error; ?></span>
                  </div>
                  <div class="group">
                    <label for="pass" class="label" style="color:#00b3b3; font-size:20px; font-weight:bold">Password</label>
                    <input id="pass" type="password" class="input" name="password" style="font-size: 20px">
                    <span>
                      <?php echo $password_error; ?></span>

                  </div>
                  <div class="group">
                    <label for="pass" class="label" style="color:#00b3b3; font-size:20px; font-weight:bold">Fullname</label>
                    <input id="fullname" type="text" class="input" name="name" style="font-size: 20px" value="<?php echo $name; ?>">
                    <span>
                      <?php echo $name_error; ?></span>
                  </div>
                  <div class="group">
                    <label for="pass" class="label" style="color:#00b3b3; font-size:20px; font-weight:bold">Email
                      Address</label>
                    <input id="email" type="text" class="input" name="email" style="font-size: 20px" value="<?php $email; ?>">
                    <span>
                      <?php echo $email_error; ?></span>
                  </div>
                  <div class="group">
                    <label for="number" class="label" style="color:#00b3b3; font-size:20px; font-weight:bold">Mobile No</label>
                    <input id="number" type="integer" class="input" name="mobile" style="font-size: 20px" value="<?php $phone; ?>">
                    <span>
                      <?php echo $phone_error; ?></span>
                  </div>
                  <div class="group">
                    <label for="address" class="label" style="color:#00b3b3; font-size:20px; font-weight:bold">Address</label>
                    <input id="address" type="text" class="input" name="address" style="font-size: 20px" value="<?php $address; ?>">
                    <span>
                      <?php echo $phone_error; ?></span>
                  </div>
                  <div class="group">
                    <label for="pass" class="label" style="color:#00b3b3; font-size:20px; font-weight:bold">User Type</label><br />
                    <input type="radio" value="senior" name="user_type" style="font-size:18px">&nbsp;<label style="font-size:15px">Senior
                      Citizen</label>
                    <input type="radio" value="service-provider" name="user_type" style="font-size:18px">&nbsp;<label
                      style="font-size:15px">Service Provider</label><br><br>
                  </div>

                  <div class="group text" style="margin-left: 245px; padding-top:40px;">
                    <input type="submit" style="float: center; width: 25%; padding: 14px 20px; background-color: #b30059; font-size:20px"
                      class="button" value="Sign Up">


                    <a href="index.php"><input type="submit" style="float: center; width: 25%; padding: 14px 20px; background-color: #00b3b3; font-size:20px"
                        class="button" value="Cancel"></a>
                  </div>

                </div>
              </div>
            </div>

          </div>
      </div>
      </form>
      <span class="signup" style="color:#ffffff ; margin-left:580px; font-size:16px">Already Registered? <a href="signin.php"
          style="color: #00b3b3; font-size:16px; font-weight:bold">Log In</a></span>
    </div>

  </div>
</body>

</html>