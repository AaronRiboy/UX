<?php
include("server.php");
$page_title = $LOGIN;
include('checkLogin.php');
include("top_layout.php");

if(isset($_POST["username"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $inView = $connect->query("SELECT * FROM userlogin WHERE username LIKE '".$username."'");
  $foundUser = $inView->num_rows;
  $comparison = mysqli_fetch_assoc($inView);
  if($foundUser>0){
    if($comparison["password"] == $password){
      $_SESSION['logged'] = $username;
      $_SESSION['accountType'] = $comparison["type"];
      header("Location: account.php"); /* Redirect browser */
      exit();
    }else{
      unset($password);
      echo "<script type='text/javascript'>alert('Incorect password! Please try again');</script>";
    }
  }else{
    echo "<script type='text/javascript'>alert('Incorect username! Please try again');</script>";
    unset($username);
    unset($password);
  }
}
?>
<div class="container" style="padding-top: 10%;">
  <form action="logIn.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="input-group">
              <span class="input-group-addon"><label for="username"><i class="fa fa-user-circle"></i></label></span>
              <input class="form-control" placeholder="Username" type="text" name="username" <?php echo (isset($username))?"value=".warpQuote($username):"";?> required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label class="sr-only" for="password">Password</label>
                <div class="input-group">
                  <span class="input-group-addon"><label for="password"><i class="fa fa-key"></i></label></span>
                  <input class="form-control" placeholder="Password" type="password" name="password" required>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <button type="submit" class="btn btn-success btn-block btn-lg formButton">Login</button>
      </div>
    </div>
  </form>
</div>
<?php include("btm_layout.php")?>
