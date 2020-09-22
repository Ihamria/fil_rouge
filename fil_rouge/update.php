<?php  include ('include/connect.php');
       include ('include/header.php');

      
$id_prof = $_GET['GetID'];
$query = " SELECT * from prof where id_prof='$id_prof'";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) { 
    $id_prof =  $row['id_prof'];
    $Nom =  $row['nom'];
    $Prenom = $row['prenom'];
    $email =  $row['email'];
    $matieres =  $row['matieres'];
    $villes =  $row['villes'];
}
if(isset($_POST['modifier'])){
     $id_prof = $_GET['GetID'];
     $Nom = $_POST['nom'];
     $Prenom = $_POST['prenom'];
     $email = $_POST['email'];
     $matieres = $_POST['matieres'];
     $villes = $_POST['villes'];
     $sql = "UPDATE prof SET nom='$Nom', prenom='$Prenom', email='$email', matieres='$matieres', villes='$villes' WHERE id_prof='$id_prof';";
    mysqli_query($conn, $sql);
}
?>
<link rel="stylesheet" href="../css/styl.css">
<style>
  
  }
  #modiff{ 
    position: fixed ;
    margin-top: 3%;
    visibility: visible;
  }
    .popups{
    background-color: #f8f9fa;
    height: 465px;
    width: 50%;
    margin-left: 23%;
    margin-top: 10%;
    position: absolute;
    z-index: 99;
    
    }
    .popups form{
        display: flex;
        flex-direction: column;
        
    }
  .form #fname{
    border: transparent;
    border-bottom: solid black;
    width: 44%;
    margin-top: 5%;
    margin-left: 30%;
    outline: none;
    background-color: #f8f9fa;
 }
 .valid{
    height: 41px;
    width: 20%;
    margin-left: 40%;
    margin-top: 3%;
    border-radius: 20px;
    outline: none;
 }
   .popups .close{
    margin-left: 45%;
    margin-top: 30px;  
 }

#modiff:target {
  visibility: visible;
 
}
</style>
<div class="popups" id="modiff">
<a class="close" href=""><img src="img/Icon material-close.png" class="close"></a>
<form action="" method="post" class="form">
<input type="text" id="fname"  name="nom" value="<?php echo $Nom ?>" placeholder="Nom">
<input type="text" id="fname" name="prenom" value="<?php echo $Prenom ?>" placeholder="Prenom" >
<input type="text" id="fname" name="email" placeholder="E-mail" value="<?php echo $email ?>">
<input type="text" id="fname" name="matieres" placeholder="Matiere" value="<?php echo $matieres ?>">
<input type="text" id="fname" name="villes" placeholder="Ville" value="<?php echo $villes ?>">
<button type="valid" class="valid"  name='modifier'>modifier ✔</button>
</form>
</div>
<?php include 'include/footer.php'; ?>