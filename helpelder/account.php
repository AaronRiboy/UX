<?php
include('server.php');
$page_title = $ACCOUNT;
include('checkLogin.php');
include('top_layout.php');
$textTitle = "Welcome ".($_SESSION['accountType']==$SENIOR?"Senior":"Service Provider")."! \r\n You are in good hands";
if(isset($_GET['logout'])){
  header("Location: home.php");
  session_destroy();
  exit();
}
 ?>

<!--content-->
  <div class="container">
    <style>
    .title {
  margin: 6em 0;
  color: #fff;
  text-align-last: center;
  height: 100px;
  margin-bottom: 150px;
}
     .title span {
  max-width: 200px;
  white-space: pre;
  background-color: rgba(192,192,192,0.7);
  font-family: Roboto, sans-serif
  z-index: 1;
  font-size:70px;
  color:purple;
  font-weight:900;
}
    </style>
    <div class="title">
      <span><?php echo $textTitle ?></span>
    </div>
    <form>
      <div class="col-md-4 col-md-offset-4">
    <?php if($_SESSION['accountType']==$SENIOR){ ?>
    <button class="btn btn-success btn-block btn-lg formButton" type="submit" formaction="requestService.php">Request Service</button>
  <?php }else{ ?>
    <button class="btn btn-success btn-block btn-lg formButton" type="submit" formaction="serviceRequest.php">View Pending Request</button>
    <?php } ?>
    <button class="btn btn-success btn-block btn-lg formButton" type="submit" formaction="manageRequest.php">Manage Request</button>
    <button class="btn btn-success btn-block btn-lg formButton" type="submit" formaction="viewRating.php" method="get" name="username" value="<?php echo $_SESSION['logged']?>">View Rating</button>
    <?php if($_SESSION['accountType']==$SERVICEPROVIDER){ ?>
    <button class="btn btn-success btn-block btn-lg formButton" type="submit" formaction="recordServiceType.php">Update Services</button>
    <?php } ?>
    <button class="btn btn-primary btn-block btn-lg formButton" type="submit" formaction="account.php" method="get" name="logout" value="true">Log Out</button>
  </div>
  </form>
  </div>
<?php include('btm_layout.php') ?>
