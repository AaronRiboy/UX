<?php
$getRequestOffer = 'SELECT * FROM requestoffer '.((isset($_SESSION["logged"]))?'WHERE Offer LIKE '.warpQuote($_SESSION["logged"]):'');
$getServices = $connect->query("SELECT serviceCode,serviceDescription FROM services ORDER BY serviceCode");
$getUserLogin = "SELECT username,password,type FROM userlogin";
$getServiceRequest = "SELECT sr.serviceCode,sr.requestID,sr.requiredDate,sr.notes,sr.status,sn.fullname AS requestSenior,sn.username AS seniorUsername,sp.fullname AS serviceProvider,sp.username AS serviceproviderUsername FROM servicerequest AS sr INNER JOIN senior AS sn ON sn.username LIKE sr.requestSenior LEFT OUTER JOIN serviceprovider AS sp ON sp.username LIKE sr.serviceProvider";
$getServiceDescription = "SELECT serviceDescription FROM services WHERE serviceCode LIKE ";
?>
