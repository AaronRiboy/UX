<!DOCTYPE html>
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
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!--===============================================================================================-->

  <link rel="stylesheet" type="text/css" href="style_mr.css">



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

<body>
  <h1 class="#">Manage Request</h1>
  <br>
  <div class="container table-responsive" id="live_data">
    <table>
      <tr>
        <th>Service ID</th>
        <th>Service Name</th>
        <th>Booking Date</th>
        <th>Booking Time</th>
        <th>Notes</th>
        <th>Number of Services</th>
        <th>Status</th>

      </tr>

      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "seniorcare";
      $con = new mysqli($servername, $username, $password, $dbname);

      $sql = "SELECT serviceID, serviceName,bookingDate,bookingTime,notes,numOfServices,status from booking2";



          $result = $con -> query($sql);

          if ($result-> num_rows > 0 ){
            while($row = $result -> fetch_assoc()){

              echo "<tr> <td>".$row["serviceID"]."</td> <td>".$row["serviceName"]."</td><td>".$row["bookingDate"]."</td><td>"
              .$row["bookingTime"]."</td><td>".$row["notes"]."</td><td>".$row["numOfServices"]."</td><td>".$row["status"]."</td></tr>";

            }
            echo "</table>";

          }
          else {
            echo "0 result";

          }
          $con ->close();

           ?>
    </table>

  </div>

</body>

</html>