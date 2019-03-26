<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seniorcare";

$conn = new mysqli($servername, $username, $password, $dbname);

$serviceID= $_POST['serviceID'];
$review = $_POST['review'];
$comment = $_POST['comment'];

if(isset($_POST['submit']))
{
  $sql = "SELECT * FROM booking WHERE serviceID=$serviceID";
  $result = mysqli_query($conn,$sql);

   header('refresh:0;url=review.php');
   if(mysqli_num_rows($result) > 0){
     $sql = "UPDATE review SET review = '$review' WHERE serviceID = $serviceID";
     $sql = "UPDATE review SET comment = '$comment' WHERE serviceID = $serviceID";
   }

    echo "<script type='text/javascript'>alert('Your review has been posted!')</script>";
    mysqli_query($conn, $sql);
    //mysqli_close($conn);

}
 ?>
