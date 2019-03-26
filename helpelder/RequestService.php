<?php
include("server.php");
$type = $SENIOR;
$page_title = "Request Service";
include('checkLogin.php');
include("top_layout.php");
include("query.php");
if(isset($_POST["button"])){
  if($_POST["button"]=="cancel"){
    header("Location: account.php");
    exit();
  }else{
    $service = $_POST["serviceCode"];
    $date = $_POST["date"];
    $note = (isset($_POST["notes"]))?$_POST["notes"]:"";
    $values = warpQuote($service).",".warpQuote($date).",".warpQuote($note).",".warpQuote($_SESSION['logged']);
    if($connect->query("INSERT INTO servicerequest (serviceCode,requiredDate,notes,requestSenior)VALUES($values)")){
      header("Location: account.php");
      exit();
    }else{
      $error = "Submit Failure, please contact us at +012 345 6789";
    }
  }
}
?>
<div class="container marginTB">
  <div class="formStyle">
    <h2 class="mb-4 text-center"><strong>Request Service</strong></h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
                    <div class="form-group row">
                        <label for="serviceCode" class="col-sm-3 col-form-label">Service Code</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="serviceCode" required>
                                <?php
                                while ($row = mysqli_fetch_array($getServices))
                                {
                                    echo "<option value='".$row['serviceCode']."'>".$row['serviceCode']." - ".$row['serviceDescription']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-sm-3 col-form-label">Date</label>
                        <div class="col-sm-9">
                            <input name="date" type="date" class="form-control" id="date" required>
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="date" class="col-sm-3 col-form-label">Notes</label>
                            <div class="col-sm-9">
                                    <textarea name="notes" class="form-control" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="form-group text-center" style="padding-top:10px;">
                            <button name="button" value="request" type="submit" class="btn btn-success">Request</button>
                            <span style="padding-right: 10px;"></span>
                            <button name="button" value="cancel" type="submit" class="btn btn-danger">Cancel</button>
                        </div>
                </form>
  </div>
</div>
<script>
<?php (isset($error))?"alert($error)":"" ?>
var today = new Date(Date.now());
var todayStr = today.getFullYear() + "-" + (today.getMonth()+1) + "-" + (today.getDate()+1);
document.getElementById("date").min = todayStr;
document.getElementById("date").value = todayStr;
</script>
<?php include("btm_layout.php");?>
