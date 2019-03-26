<?php
include('server.php');
include('defaultValues.php');
include('query.php');
$page_title ="Review";
include('checkLogin.php');
include('top_layout.php');
$requestID = $_POST['requestID'];
$sqlFetchRequest = $getServiceRequest." WHERE SR.requestID LIKE ".$requestID;
$fetchRequest = $connect->query($sqlFetchRequest);
$row = mysqli_fetch_assoc($fetchRequest);
if(isset($_POST['rating'])){
  $rating = $_POST['rating'];
  $comment = $_POST["comment"];
  $value = array($requestID,warpQuote($_SESSION['accountType']==$SENIOR?$row['serviceproviderUsername']:$row['seniorUsername']),warpQuote($_SESSION['logged']),$rating,warpQuote($comment == "" ? "No comment":$comment));
  $insertSQL = 'INSERT INTO reviews (requestID,reviewTo,reviewFrom,rating,comment) VALUES ('.join(",",$value).')';
  $submitReview = $connect->query($insertSQL);
  header("Location: manageRequest.php");
  exit();
}
  $reviewed = $connect->query("SELECT * FROM reviews WHERE reviewFrom LIKE ".warpQuote($_SESSION['logged'])." AND requestID LIKE ".$requestID);
?>

    <div class="container marginTB">
      <?php if(mysqli_num_rows($reviewed)<1){?>

        <form class="formStyle" action="giveReview.php" method="post">
          <h2><p>Review: <a href="viewRating.php?username=<?php echo ($_SESSION['accountType']==$SENIOR?$row['serviceproviderUsername']:$row['seniorUsername'])?>"><strong><?php echo ($_SESSION['accountType']==$SENIOR?$row['serviceProvider']:$row['requestSenior'])?></strong></a> on <a href="request.php?id=<?php echo $requestID ?>"><?php echo $requestID ?></a></p></h2>
        <div class="form-group"><label for="radio">Rating of User :</label>
        <?php for($i = 1; $i < $MAX_RATING;$i++){ ?>
          <label class="radio-inline"><input type="radio" name="rating" value="<?php $i ?>"><?php echo $i ?></label>
        <?php } ?>
          <label class="radio-inline"><input type="radio" name="rating" value="5" checked>5</label></div>
        <div class="form-group"><label for="comment">Comment :</label>
        <textarea class="form-control" rows="5" name="comment"><?php echo (isset($_POST['comment']))?$comment:""?></textarea></div>
        <button name="requestID" value="<?php echo $requestID ?>" type="submit" class="btn btn-success btn-lg form-group">Submit</button></form>
<?php }else{
  $reviewedRow = mysqli_fetch_assoc($reviewed); ?>
    <div class="formStyle text-center"><label><a href="viewRating.php?username=<?php echo ($_SESSION['accountType']==$SENIOR?$row['serviceproviderUsername']:$row['seniorUsername'])?>"><strong><?php echo ($_SESSION['accountType']==$SENIOR?$row['serviceProvider']:$row['requestSenior'])?></strong></a> has been reviewed on <?php echo $reviewedRow["reviewedDate"]?></label><br>
    <a class="btn btn-success btn-lg" href="account.php">Back</a></div>
<?php } ?>
</div>
<?php
 include('btm_layout.php'); ?>
