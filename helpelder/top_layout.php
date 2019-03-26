<!DOCTYPE HTML>
<html lang="en">
<head>
    <title><?php echo $page_title ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="en">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/helpelder.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/helpelder.js"></script>
    <?php if($page_title == $ACCOUNT){ ?>
      <style>
      body {
  background: url("https://diariotv.cl/wp-content/uploads/2018/08/PIEL.jpg");
  background-size:cover;
}
      </style> <?php } ?>
</head>
<body style="padding-bottom:100px;">
  <header>
    <nav class="navbar-style navbar-default" id="nav">
        <div class="navbar-header">
          <a class="navbar-brand" href="home.php"><img class="logo" src="image/logo.jpg" alt="HelpElder Logo" ></a>
          <button type="button" class="navbar-toggle tabMobile" data-toggle="collapse" data-target="#navToggle" id="tabMobile">
            <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navToggle">
          <ul class="nav navbar-nav">
            <li <?php if ($page_title == $HOME){ ?>class="active"<?php } ?>>
              <a href="home.php">Home</a></li>
            <li <?php if ($page_title == $ABOUTUS){ ?>class="active"<?php } ?>>
                <a href="aboutUs.php">About Us</a></li>
            <?php if(!isset($_SESSION['logged'])){?>
            <li <?php if ($page_title == $JOINUS){ ?>class="active"<?php } ?>>
              <a href="joinus.php">Join Us</a></li>
            <li <?php if ($page_title == $LOGIN){ ?>class="active"<?php } ?>>
              <a href="login.php">Login</a></li><?php }else{?>
                <li <?php if ($page_title == $LOGIN){ ?>class="active"<?php } ?>>
                  <a href="account.php"><?php echo $_SESSION['logged'] ?></a></li><?php } ?>
          </ul>
        </div>
    </nav>
  </header>
