<?php
include("server.php");
$page_title = "Manage Request";
include("checkLogin.php");
include("top_layout.php");
$sql = 'SELECT * FROM serviceRequest SR INNER JOIN services SV on SV.serviceCode LIKE SR.serviceCode WHERE SR.'.($_SESSION["accountType"]==$SENIOR?"requestSenior":"serviceProvider").' LIKE '.warpQuote($_SESSION["logged"]);
	$serviceRequest = $connect->query($sql);
?>
<div class="container marginTB">
<div class="formStyle">
    <h2><p><Strong>Manage Request</Strong></p></h2>
      <?php	if(($serviceRequest->num_rows) > 0){ ?>
				<div class="card-body table-responsive">
            <table class="table table-borderless table-md" id="requestsTable">
                <thead>
                <tr>
                    <th>Service Code</th>
                    <th>Service Description</th>
                    <th onclick="sortRequestsTable(2)"><a href="">Request ID</a></th>
                    <th onclick="sortRequestsTable(3)"><a href="">Date</a></th>
                    <th onclick="sortRequestsTable(4)"><a href="">Status</a></th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($row = mysqli_fetch_array($serviceRequest)) {
                    echo "<tr>";
                    echo "<td>" . $row['serviceCode'] . "</td>";
                    echo "<td>" . $row['serviceDescription'] . "</td>";
                    echo "<td><a href='request.php?id=".$row['requestID']."'>".$row['requestID']."</a></td>";
                    echo "<td>" . $row['requiredDate'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div><?php }else{
          echo("There is no request.");
          }
          ?>
    </div>
</div>
</div>
<?php include("btm_layout.php"); ?>
