<?php
include('server.php');
$type = $SERVICEPROVIDER;
$page_title = "Service Request";
include('checkLogin.php');
include("top_layout.php");
include("query.php");
$serviceRequest = $connect->query($getRequestOffer);
?>

  <div class="container marginTB">
  <br><br>
    <div class="formStyle">
      <h2><p><Strong>Service Request</Strong></p></h2>
      <div class="reg-type center">
        <small><p>Here's the list of Senior's service request:</p></small>
				<?php	if(($serviceRequest->num_rows) > 0){ ?>
						<div class="container marginTBL border tablerating">
		            <div class="row hidden-xs " style="padding-top:10px; padding-bottom:10px; border-top: 0px;">
		            <div class="col-sm-2 hidden-xs ">
		              <span class="lefty marginright10 "></span>
		              <span>Service Code</span>
		            </div>
		            <div class="col-sm-3 hidden-xs ">
		              <span>Request ID</span>
		            </div>
		            <div class="col-sm-3 hidden-xs ">
		              <span>Required Date</span>
		            </div>
		            <div class="col-sm-2 hidden-xs">
		              <span>Status</span>
		            </div>
		            <div class="col-sm-2 hidden-xs">
		              <span></span>
		            </div>
		          </div>

						<?php while($row = mysqli_fetch_assoc($serviceRequest)){ ?>

							<div class="row hidden-xs " style="padding-top:10px; padding-bottom:10px; border-top: 0px;">
		          <div class="col-sm-2 hidden-xs ">
		            <span><?php echo $row["serviceCode"] ?></span>
		          </div>
		          <div class="col-sm-3 hidden-xs">
								<a href="acceptRequest.php?requestID=<?php echo $row['requestID']?>"><?php echo $row["requestID"]?></a>
		          </div>
		          <div class="col-sm-3 hidden-xs ">
		            <span><?php echo $row["requiredDate"] ?></span>
		          </div>
		          <div class="col-sm-2 hidden-xs">
		            <a class="btn btn-success btn-sm fullwidth"><?php echo $row["RequestStatus"] ?></a>
		          </div>
		          <div class="col-sm-2 hidden-xs">
		            <span></span>
		          </div>
		        </div><?php }}else{
						echo("There is no service request.");
					}
					?>
   </div>
 </div>
</div>
</div>
<?php include('btm_layout.php') ?>
