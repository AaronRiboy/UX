<?php

if(isset($_POST['submitR']))
{
	require_once("connection.php");
	$mysqli = new mysqli($servername, $name, "", $dbname);

	# check connection
	if ($mysqli->connect_errno) {
				  echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
				  exit();
	}
			$sql= "SELECT * FROM booking;";
			$result = mysqli_query($mysqli, $sql);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck >0){
					while ($row = mysqli_fetch_assoc($result)){
						$serviceID = $row['serviceID'];
					}
			}

		$rating=$_POST['phprating'];
		$comment=$_POST['note'];

		$sqli = "INSERT INTO review ( serviceID, rating, comment)
		VALUES ('$serviceID', '$rating', '$comment')";
		if ($mysqli->query($sqli) === TRUE) {

			header('location:manageRequestUser.php');
			echo '<script type="text/javascript"> alert("Your request has been submitted! ")</script>';
		 } else {
			echo '<script type="text/javascript"> alert("Please try again!")</script>';
		 }

}
?>
