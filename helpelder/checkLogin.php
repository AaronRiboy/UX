<?php
if(!isset($_SESSION['logged'])){
    if($page_title != $LOGIN && $page_title != $JOINUS){
      header("Location: login.php");
      exit();
  }
}
else{
  if(isset($type)){
    if($_SESSION['accountType'] <> $type){
      header("Location: account.php");
      exit();
  }
  }
}
?>
