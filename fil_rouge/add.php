<?php
      include '../include/connect.php';
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styll.css">
    <title>Document</title>
</head>
<body>
<div class="header">
        
<a href="../logo.php"> <img src="../img/Groupe 10.png" class='logo'></a>
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
      <img class="img/fas fa-ellipsis-h" src="Icon open-menu.png"></img>
    </label>
    <ul class="menu">
    <a class="nav-item nav-link active" href="../index.php">Acceuil </a>
      <a class="nav-item nav-link" href="../prof.php">Prof</a>
      <a class="nav-item nav-link" href="../contact.php">Contact</a>
      <label for="chk" class="hide-menu-btn">
        <img class="fas fa-times" src="img/Icon material-close.png"></img>
      </label>
    </ul>
  </div> 
  <form class="bttn">
                    <a href="login.php" class="botton1">Connexion</a>
                    <a href="signup.php" class="botton2">Inscription</a>
                </form>
<?php 

if(isset($_POST['submit'])){
   
    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $email = $_POST['email'];
    $matieres = $_POST['matieres'];
    $villes = $_POST['villes'];
    $sql = mysqli_query($conn," INSERT INTO prof (nom,prenom,email,matieres,villes) VALUES ('$Nom','$Prenom','$email','$matieres','$villes')");  
}

?>
<form  method="POST" class="forme">
<input type="text" id="fname" name="Nom" placeholder="Nom">
<input type="text" id="fname" name="Prenom" placeholder="Prenom">
<input type="text" id="fname" name="email" placeholder="E-mail">
<input type="text" id="fname" name="matieres" placeholder="matieres">
<input type="text" id="lname" name="villes" placeholder="villes">

<button type="submit" name="submit" class="submit">ajouter</button>
</form>


<?php include '../include/footer.php'; ?>