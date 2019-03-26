<?php
include('server.php');
$page_title = "View Rating";
include('checkLogin.php');
include('top_layout.php');
$username = $_GET['username'];
$sql = "SELECT * FROM reviews R
WHERE R.reviewTo LIKE '$username'";
$reviews = $connect->query($sql);
?>
	<div class="container marginTB">
			<div class="formStyle">
				<h2 class="text-center">Reviews for <Strong><?php echo $username ?></Strong></h2>
				<?php if($reviews->num_rows > 0){ ?>
			  	<div class="reg-type center">
						<div class="container marginTBL border tablerating">
								<div class="row hidden-xs " style="padding-top:10px; padding-bottom:10px; border-top: 0px;">
								<div class="col-sm-3 hidden-xs ">
									<span class="lefty marginright10 ">Review user</span>
								</div>
								<div class="col-sm-3 hidden-xs ">
									<span>Date</span>
								</div>
								<div class="col-sm-3 hidden-xs ">
									<span>Rating (1-5)</span>
								</div>
								<div class="col-sm-3 hidden-xs ">
									<span>Comment</span>
								</div>
							</div>
						<?php while($row = $reviews->fetch_assoc()){ ?>
						<div class="row hidden-xs " style="padding-top:10px; padding-bottom:10px; border-top: 0px;">
							<div class="col-sm-3 hidden-xs ">
								<span class="lefty marginright10 ">	<?php echo $row["reviewFrom"] ?></span>
							</div>
							<div class="col-sm-3 hidden-xs ">
								<span><?php echo $row["reviewedDate"] ?></span>
							</div>
							<div class="col-sm-3 hidden-xs ">
								<span><?php echo $row["rating"] ?></span>
							</div>
							<div class="col-sm-3 hidden-xs ">
								<span><?php echo $row["comment"] ?></span>
							</div>
						</div>
					<?php }
					} else {
						echo("There is no reviews for this user.");
					}
					$connect->close();?>
					<br><button onclick="location.href='account.php'" class="btn btn-success">Back</button>
		 </div>

	  </div>
	 </div>
	</div>
  <?php include('btm_layout.php') ?>
