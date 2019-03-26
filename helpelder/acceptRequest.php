<?php
include('server.php');
$type = $SERVICEPROVIDER;
$requestID = $_GET['requestID'];
$page_title = "Request - ".$requestID;
include('checkLogin.php');
include('top_layout.php');
 ?>
  <div class="container marginTB">
  <br><br>
    <div class="formStyle">
      <?php
			$updated = false;

			if($_SERVER['REQUEST_METHOD'] == 'POST'){
			 $sqlUpdate = "UPDATE servicerequest
 			 SET serviceProvider = '".$_SESSION['logged']."', status = 'accepted'
 			 WHERE requestID LIKE '$requestID'";
			 $updated = $connect->query($sqlUpdate);

			}

      $sqlListing = "SELECT * FROM servicerequest SR
       INNER JOIN senior S ON S.username = SR.requestSenior
       INNER JOIN services SV ON SV.serviceCode = SR.serviceCode
       WHERE SR.requestID LIKE '$requestID'";

      $getDetail = $connect->query($sqlListing);
      $row = mysqli_fetch_assoc($getDetail);
      echo '<h2 class="text-center"><Strong>Request ID: '.$row["requestID"].'</Strong></h2>';?>
      <div class="reg-type center">
        <div class="container marginTBL border tablerating">

            <div class="row hidden-xs " style="padding-top:10px; padding-bottom:10px; border-top: 0px;">
            <div class="col-sm-2 hidden-xs ">
              <span>Required Date</span>
            </div>
            <div class="col-sm-2 hidden-xs">
              <span>Senior Name</span>
            </div>
            <div class="col-sm-2 hidden-xs">
              <span>Service Type</span>
            </div>
            <div class="col-sm-3 hidden-xs ">
              <span>Notes</span>
            </div>
            <div class="col-sm-2 hidden-xs ">
              <span>Status</span>
            </div>
            <div class="col-sm-2 hidden-xs">
              <span></span>
            </div>
          </div>

          <div class="row hidden-xs " style="padding-top:10px; padding-bottom:10px; border-top: 0px;">
          <div class="col-sm-2 hidden-xs ">
            <span><?php echo $row["requiredDate"] ?></span>
          </div>
          <div class="col-sm-2 hidden-xs ">
            <span><?php echo $row["fullname"] ?></span>
          </div>
          <div class="col-sm-2 hidden-xs">
            <span><?php echo $row["serviceCode"].' '.$row["serviceDescription"] ?></span>
          </div>
          <div class="col-sm-3 hidden-xs ">
            <span><?php echo $row["notes"] ?></span>
          </div>
          <div class="col-sm-2 hidden-xs">
            <a class="btn btn-success btn-sm fullwidth"><?php echo $row["status"] ?></a>
          </div>
          <div class="col-sm-2 hidden-xs">
            <span></span>
          </div>
        </div>

        <div class="row" style="padding-top: 1rem">
						<div class="col-xs-9 col-md-2">
								<a href="viewRating.php?username=<?php echo $row["username"]?>" class="btn btn-success btn-block btn-lg formButton">View Rating</a>
						</div>

            <div class="col-xs-12 col-md-4">
								<?php if($updated){
									echo'<a href="account.php" class="btn btn-success btn-block btn-lg formButton">Back</a>';
								} else {
										echo'<form action="acceptRequest.php?requestID='.$requestID.'" method="post">
										<button type="submit" class="btn btn-success btn-block btn-lg formButton">Accept</button></form>';
								}?>
						</div>

            <div class="col-xs-9 col-md-4">
							<button onclick="window.history.back();" class="btn btn-success btn-block btn-lg formButton" <?php echo ($updated ? "disabled" : "")?>>Cancel</button>
						</div>

				</div>

        </div>
      </div>
    </div>
  </div>
  <?php include('btm_layout.php') ?>
