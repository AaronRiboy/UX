<?php
include("server.php");
$type = $SERVICEPROVIDER;
$page_title = "Update Service";
include('checkLogin.php');
include("top_layout.php");
if(isset($_POST["serviceCode"])){
  $serviceCodeArray = explode("-",$_POST["serviceCode"]);
  $connect->query("DELETE FROM providedservices WHERE username LIKE ".warpQuote($_SESSION['logged']));
  foreach($serviceCodeArray as $service){
    $connect->query("INSERT INTO providedservices VALUES (".warpQuote($_SESSION['logged']).",".warpQuote($service).")");
  }
}

$serviceArray = array();
$serviceList = $connect->query("SELECT * FROM services ORDER BY serviceCode");
while($row = $serviceList->fetch_assoc()){
  array_push($serviceArray,array($row["serviceCode"],$row["serviceDescription"]));}
$getServices = $connect->query("SELECT serviceCode FROM providedservices WHERE username LIKE ".warpQuote($_SESSION['logged']));
$csvService = "";
while($row = $getServices->fetch_assoc()){
$csvService .= $row["serviceCode"].",";}

?>

<!--content-->
<div class="container marginTB">
        <div class="formStyle">
            <h2 class="text-center"><Strong>Record Service Type</Strong></h2>
            <div style="padding: 30px;">
            <?php for($row = 0;$row <= count($serviceArray);$row+=2){
              echo '<div class="row">';
              echo '<div class="col-lg-offset-3 col-lg-4"><label><input name="services" type="checkbox" value="'.$serviceArray[$row][0].'" id="'.$serviceArray[$row][0].'">'.$serviceArray[$row][0].' - '.$serviceArray[$row][1].'</label></div>';
              if(($row+1)<count($serviceArray)){
                echo '<div class="col-lg-5"><label><input name="services" type="checkbox" value="'.$serviceArray[$row+1][0].'"  id="'.$serviceArray[$row+1][0].'">'.$serviceArray[$row+1][0].' - '.$serviceArray[$row+1][1].'</label></div>';
              }
              echo '</div>';
            }?>
            </div>
            <div class="row">
              <div class="col-md-offset-2 col-md-4">
            <button onclick="submit()" class="btn btn-success btn-lg btn-block">Submit</button>
          </div>
          <div class="col-md-4">
        <a href="account.php" class="btn btn-success btn-lg btn-block">Close</a>
      </div>
        </div>
</div>
<script>
$(document).ready(function(){
  var serviceCSV = "<?php echo $csvService?>";
  var serviceArray = serviceCSV.split(",")
  for(var i=0;serviceArray[i];i++){
    document.getElementById(serviceArray[i]).checked = true;
  }});

function submit(){
  var csv = new Array();
  var serviceCheckBox = document.getElementsByName("services");
  for(var i = 0; serviceCheckBox[i];i++){
    if(serviceCheckBox[i].checked){
      csv.push(serviceCheckBox[i].value);}
  }
  if(csv.length == 0){
    alert("Must choose at least one service");
  }else{//
  var form = $('<form></form>');
  form.attr("method", "post");
  form.attr("action","recordServiceType.php");
  var field = $('<input></input>');
  field.attr("type", "hidden");
  field.attr("name", "serviceCode");
  field.attr("value", csv.join('-'));
  form.append(field);
  $(document.body).append(form);
  form.submit();}
}

</script>
<?php include("btm_layout.php") ?>
