<?php
include("server.php");
$page_title = "Request";
include('checkLogin.php');
include("top_layout.php");
include("query.php");
$option = array("completed","cancelled");
if($_SERVER['REQUEST_METHOD']=="POST"){
  $updateQuery = "UPDATE servicerequest SET ";
  $updateinfo = false;
  if(isset($_POST['status'])){
  $status = " status = ".warpQuote($_POST['status']);
}

$inputNote = (isset($_POST['notes']))?$_POST['notes']:"";
  if($inputNote!=""){
    $note = " notes = ".warpQuote($inputNote);
  }
  if(isset($_POST['status'])&&($inputNote!="")){
    $updateQuery .= $status.", ".$note;
    $updateinfo = true;
  }elseif($inputNote!=""){
    $updateQuery .= $note;
    $updateinfo = true;
  }elseif(isset($_POST['status'])){
    $updateQuery .= $status;
    $updateinfo = true;
  }
  if($updateinfo){
      $update = $connect->query($updateQuery." WHERE requestID LIKE ".$_POST['id']);
      if($update){
        $update = "Update succesful !";
      }else{
    $update = "Update un-succesful !";
    }
  }else{
    $update = "No changes! ";
  }
  $reqID = $_POST["id"];

}else{
  $reqID = $_GET["id"];
}

$detailCon = $connect->query($getServiceRequest." WHERE sr.requestID LIKE ".$reqID);
if($detailCon->num_rows>0){
  $detail = mysqli_fetch_assoc($detailCon);
  $SVDES = mysqli_fetch_assoc($connect->query($getServiceDescription.warpQuote($detail['serviceCode'])));
?>

<form id="updateForm" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"><input name="id" type="hidden" value="<?php echo $reqID; ?>"></input></form>
<div class="container marginTB">
  <div class="formStyle text-center">
    <h2 class="mb-4"><strong>Request : <?php echo $reqID?></strong></h2>
<div class="row">
        <p class="col-md-4">Service : <strong><?php echo $detail['serviceCode']." - ".$SVDES['serviceDescription']?></strong></p>
        <p class="col-md-4">Required Date : <strong><?php echo $detail['requiredDate']?></strong></p>
        <div class="col-md-4">
        <label>Status :</label> <select name="status" form="updateForm">
          <?php
          if($detail['serviceProvider']==''){
            echo'<option value="" disabled selected>Pending</option>';
          }else{
            echo'<option value="" disabled selected>Accepted</option>';
          }
          foreach($option as $opt){ ?>
              <option value="<?php echo $opt?>"<?php echo $opt==$detail['status']?"selected":"" ?>><?php echo $opt?></option><?php } ?>
</select>
        </div>
    </div>
    <div class="row">
      <label>Notes:</label>
    </div>
    <div class="row">
    <textarea form="updateForm" name="notes" placeholder="<?php echo $detail['notes']?>" row="6" <?php echo $_SESSION['accountType']==$SERVICEPROVIDER?"disabled":""?>></textarea>
    </div>
        <div class="row">
          <div class="col-md-4">
          <?php if($detail['requestSenior']!="" && $detail['serviceProvider']!=""){?>
          <form method="post" action="giveReview.php">
          <button name="requestID" type="submit" value="<?php echo $reqID ?>" class="btn btn-success col-md-11">✏️ Rate <?php echo $_SESSION['accountType']==$SENIOR?$detail['serviceProvider']:$detail['requestSenior'] ?></button>
        </form>
      <?php }?>
      </div>
          <div class="col-md-4">
      <button id="updatebtn" type="submit" form="updateForm" class="btn btn-success col-md-11">Update</button>
    </div>
    <div class="col-md-4">
  <button type="button" onclick="location.href='account.php'" class="btn btn-success col-md-11">Back</button>
</div>
</div>
  </div>
</div>
<?php
}else{
  echo '<script>alert("ERROR : No Request Found ! Please do not enter request ID at URL");location.href="account.php";</script>';
}
if(isset($update)){
  echo '<script>alert('.warpQuote($update).');</script>';
}
include("btm_layout.php"); ?>
