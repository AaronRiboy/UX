  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Manage Service Request</title>
    <link href="style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
      crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous">
    <!--===============================================================================================-->

	</head>

<body style="background-color:#1F2739;">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="homeService.php"><img src="img\LogoS.png" class="logo"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="accept.php">Accept Request</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="includes/logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <br><br><br> <br> <br><br>

<div style="padding : 100px 0px 0px 0px">
    <h1 style = "font-size:3em;
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: yellow;padding : 0px 0px 25px 0px;">Manage Request</h1>
    <br>
    <div class="container">
      <table style="border-collapse: collapse;
width: 100%;">
        <tr style="color:lightgray;">
          <th>Service Name</th>
          <th>Booking Datetime</th>
          <th>Notes</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        <?php
		include "includes/dbconnection.php";

          $sql = "SELECT 
					R.ID AS serviceID,
					S.title AS serviceName,
					R.acquiredDate AS bookingDate,
					NULL AS bookingTime,
					R.notes,
					NULL AS numOfServices,
					R.status
					FROM request AS R 
					INNER JOIN services AS S ON S.serviceCode = R.service
					WHERE R.supplier LIKE '".$_SESSION['username']."';";
          $result = mysqli_query($dbCon,$sql);

          if ($result-> num_rows > 0 ){
            while($row = $result -> fetch_assoc()){?>
              <tr style="color:white;"> 
				<td>
					<?php echo $row["serviceName"];?>
				</td>
				<td>
					<?php echo $row["bookingDate"];?>
				</td>
				<td>
					<?php echo $row["notes"]?>
				</td>
				<td>
					<?php echo $row["status"]?>
				</td>
				<td>
					<?php if($row["status"]=="accepted"){
						echo '<a href="action.php?id='.$row['serviceID'].'&action=2">Completed</a>';
					}elseif($row["status"]=="completed"){
						//echo '<a href="rate.php?id='.$row['serviceID'].'">Rate</a>';
						echo '<a href="">Rate</a>';
					} ?>
					
				</td>
              </tr>
			<?php }} else {
            echo "0 result";
          }
           ?>
      </table>

</div>
    </div>

  <?php include "footer.php" ?>
</body>

</html>