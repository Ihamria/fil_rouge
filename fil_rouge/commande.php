<?php include 'include/header.php'; 
include 'include/connect.php';

?>

<style>

    .popups{
    background-color: #f8f9fa;
    height: 465px;
    width: 50%;
    margin-left: 23%;
    margin-top: 10%;
    z-index: 99;
    
    }
    .popups form{
        display: flex;
        flex-direction: column;
        margin-top: 8%;
}
        
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
    margin-left: 50%;
    margin-top: 3%;
    border-radius: 20px;
    outline: none;
 }
   .popups .close{
    margin-left: 45%;
    margin-top: 30px;  
 }

</style>
<div class="popups" id="frm">
<form  method="POST" class="forme">
<input type="text" id="fname" name="nom" placeholder="Nom">
<input type="text" id="fname" name="prenom" placeholder="Prenom">
<input type="text" id="fname" name="email" placeholder="E-mail">
<input type="text" id="fname" name="niveau" placeholder="Niveaux scolaire">
<button type="submit" name="valider" class="valid">Valider ✔</button>
</form>
</div>
<?php

if(isset($_POST['valider'])){
    $id_prof = $_GET['GetID'];
    $Nom = $_POST['nom'];
    $Prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $Niveau = $_POST['niveau'];
$sql = " INSERT INTO etudiant ( id_prof ,nom,prenom,email,niveau_scolaire) VALUES ('$id_prof','$Nom','$Prenom','$email','$Niveau')"; 

$result = mysqli_query($conn, $sql);
if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    
}
$query2 = " INSERT INTO demmande (id_etd , id_prof ) VALUE (' $last_id', '$id_prof ')";
$resulst = mysqli_query($conn, $query2);
if (mysqli_query($conn, $query2)) {
    echo 'jfgff';
}
}
?>
<?php include 'include/footer.php'; ?>