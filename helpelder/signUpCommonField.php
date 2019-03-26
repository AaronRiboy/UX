<form method="POST" action="joinus.php">
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-vcard"></i></span>
  <input class="form-control" placeholder="Full name" type="text" name="fullname" required <?php echo isset($fullname)?"value=".warpQuote($fullname):""; ?>>
        </div>

    <div class="input-group">
      <span class="input-group-addon" ><i class="fa fa-user-circle"></i></span>
      <input class="form-control" placeholder="Username" type="text" name="username" required <?php echo isset($username)?"value=".warpQuote($username):""; ?>>
    </div>

    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-key"></i></span>
      <input class="form-control" placeholder="Password" type="password" name="password" required <?php echo isset($password)?"value=".warpQuote($password):""; ?>>
    </div>

    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-key"></i></span>
      <input class="form-control" placeholder="Re-enter Password" type="password" name="rePassword" required <?php echo isset($repassword)?"value=".warpQuote($repassword):""; ?>>
    </div>

    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-phone"></i></span>
      <input class="form-control" placeholder="Phone Number" type="text" name="phoneNumber" required <?php echo isset($phonenum)?"value=".warpQuote($phonenum):""; ?>>
    </div>
