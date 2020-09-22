<?php

include ('include/connect.php');
  if(isset($_GET['supprimer'])){
    $id_prof = $_GET['supprimer'];
    
  $query = "DELETE FROM prof WHERE id_prof ='$id_prof'";
  $result = mysqli_query($conn, $query);
  if($result){

    header("location:prof.php");
  }
  }