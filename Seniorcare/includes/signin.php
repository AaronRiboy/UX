<?php

require "dbconnection.php";
$error = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST['username']) && isset($_POST['password'])){
        $sql = "SELECT password,user_type,fullname FROM users WHERE username='".$_POST['username']."'";
        $query = mysqli_query($dbCon,$sql);
        if(mysqli_num_rows($query) < 1){
            $error = "Username entered cannot be found!"; 
			unset($_POST['username']);
			unset($_POST['password']);
        }else{
			$result = mysqli_fetch_array($query);
			if($result['password'] == $_POST['password']){
				$_SESSION['fullname'] = $result['fullname'];
				$_SESSION['username'] = $_POST['username'];
				if($result['user_type'] == "senior"){
					header("Location: homeSenior.php");
				} else {
					header("Location: homeService.php");
				}
			} else {
				$error = "Incorrect Password!";
				unset($_POST['password']);
			}
		}
    }
}
?>