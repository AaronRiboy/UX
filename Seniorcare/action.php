<?php

function update($status) {
	include("includes/dbconnection.php");
	$sql = "UPDATE request SET status = '".$status."', supplier = '".$_SESSION['username']."' WHERE ID = ".$_GET['id'].";";
	echo $sql;
	if (mysqli_query($dbCon, $sql)){
		echo '<script language="javascript">';
		echo 'alert("Request '.$status.'!")';
		echo '</script>';
		echo  "<script> window.location.assign('homeService.php'); </script>";
	} else {
		echo "Error Action!";
	}
}

switch ($_GET['action']){
    case 1 : 
		update("accepted");
		break;
	case 2 : 
		update("completed");
		break;
}
?>