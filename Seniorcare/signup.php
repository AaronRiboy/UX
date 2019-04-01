<?php
include('server.php');
$page_title = $JOINUS;
include('top_layout.php');
include('query.php');
if(isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['rePassword'];
	$fullname = $_POST['fullname'];
	$phonenum = $_POST['phoneNumber'];
	$address = "";

	$checkUsernameSQL =  $getUserLogin." WHERE username LIKE ".warpQuote($username);
	if($connect->query($checkUsernameSQL)->num_rows == 0){
		if($repassword==$password){
		$sql = "INSERT INTO ";
		$commonVal = warpQuote($fullname).",".warpQuote($username).",".warpQuote($password).",".warpQuote($phonenum);

		if($_POST['type']==$SENIOR){
			$address = $_POST['address'];
			$_SESSION['address'] = $_POST['address'];
			$sql .= $SENIOR." VALUES (".$commonVal.",".warpQuote($address).");";
		}else if ($_POST['type']==$SERVICEPROVIDER) {
			$sql .= $SERVICEPROVIDER." VALUES (".$commonVal.");";
			$sqlProvidedService = "INSERT INTO providedservices VALUES(".warpQuote($_POST['username']).",".warpQuote($_POST['serviceType']).");";
		}

		$connect->query($sql);
		$connect->query($sqlProvidedService);
		$_SESSION['logged']=$username;
		$_SESSION['accountType']=$_POST['type'];
		header("Location: account.php");
		exit();
	}else{
		$error = "Passward re-enter incorrect!";
		unset($password);
		unset($repassword);}
}else{
		$error = 	"$username has been taken!";
		unset($username);
	}}
?>
<style>
/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.5s;
}
/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
}
</style>
  <!--content-->
  <div class="container marginTB">
    <div class="formStyle col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
      <h2><p><Strong>JOIN US!</Strong></p></h2>
        <p><small>Please choose an user type to register</small></p>
				<div class="reg-type center" id="signup">
					<div class="tab">
	  				<button class="tablinks col-md-6 btn-success" onclick="reg(event, 'sn')" id="defaultOpen"><i class="fa fa-blind"></i><br>Senior</button>
	  				<button class="tablinks col-md-6 btn-info" onclick="reg(event, 'sp')"><i class="fa fa-child"></i><br>Service Provider</button>
					</div>
	<!-- Tab content -->
	<div id="sn" class="tabcontent">
	<?php include('signUpCommonField.php') ?>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-globe"></i></span>
					<input class="form-control" placeholder="Address" type="text" name="address" required <?php echo isset($address)?"value=".warpQuote($address):""; ?>>
				</div>
					<button name="type" value="<?php echo $SENIOR ?>" type="submit" class="btn btn-success btn-block btn-lg formButton">Register</button>
		  </form>
	</div>

	<div id="sp" class="tabcontent">
	<?php include('signUpCommonField.php') ?>
	<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
			<select class="form-control" name="serviceType">
				<?php
				while($row = mysqli_fetch_assoc($getServices)){
					echo '<option value='.warpQuote($row["serviceCode"]).'>'.$row["serviceDescription"].'</option>';
				}
				?>
			</select>
	</div>
	<button name="type" value="<?php echo $SERVICEPROVIDER ?>" type="submit" class="btn btn-success btn-block btn-lg formButton">Register</button>
</form>
      </div>

					<br>
          <p><small><a href="login.php">Have an account? Log In here.</a></small></p>
      </div>
</div>
</div>
<script>
<?php echo isset($error)?"alert(".warpQuote($error).");\n":"" ?>
function reg(evt, tabName) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
		location.href="#signup";
}
</script>
<?php include('btm_layout.php'); ?>
