<?php include "includes/signin.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">


    <style>

        body, html {
          background-image: url(img/sc2.jpg);
          background-size: cover ;
          background-repeat: no-repeat;


        }

        

        .card-container.card {
            max-width: 700px;
            padding: 40px 40px;

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
            padding: 20px 25px 30px;
            margin: 0 auto 25px;
            margin-top: 50px;
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
            margin: 24px 0 12px 0;

        }

        /* Avatar image */
        img.avatar {
            width: 15%;
            border-radius: 50%;
            opacity: 1;
        }

        img.logo {
            width: 10%;
            margin-left: auto;
            margin-right: auto;
            display: block;
            margin-top: -10px;
            opacity: 1;

        }

        .input{
          width: 100%;
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
            margin-top: -10px;
            opacity: 1;

        }
        span.signup {
            float: right;
            padding-top: 25px;
        }

</style>

</head>

<body>
    <div class="container">
        <div class="card card-container">

            <div class="imgcontainer">
                <img src="img/loginSC.png" alt="Avatar" class="avatar">
            </div>

            <div>
                <img src="img/LogoS.png" alt="logo" class="logo">

            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="container sign-in-html">



                    <?php if (isset($_GET['msg'])&&$_GET['msg']!=''){
                ?>
                    <div class="alert info" style="color: #000; background: #ff8080">
                        <?php echo $_GET['msg']; ?>
                    </div>

                    <?php } ?>


                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" placeholder="Enter Username" class="input" name="username" value="<?php echo $username; ?>">
                        <span>
                            <?php echo $username_error; ?></span>

                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" placeholder="Enter Password" class="input" data-type="password"
                            name="password">
                        <span>
                            <?php echo $password_error; ?></span>
                    </div>



                    <br /><br />

                    <span class="login-error">
                        <?php echo $error_msg; ?></span>


                </div>

                <div class="container" style="background-color:#ddd">
                    <br>
                    <button type="submit" name="submit" class="signinbtn btn btn-xs btn-primary btn-block" style="color: black">Sign
                        In</button>
                    <a href="index.php"><button type="button" class="cancelbtn btn btn-xs btn-danger btn-block" style="color: black;">Cancel</button></a><br>
                    <span class="signup">Haven't registered? <a href="signup.php" style="color: #00b3b3 ; font-weight: bold">Sign
                            Up</a></span>
                </div>
            </form>

        </div><!-- /card-container -->
    </div><!-- /container -->



</body>

</html>