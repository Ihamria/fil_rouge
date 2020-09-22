
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styll.css">
    <title>Document</title>
</head>
<body>
<div class="header">
        
<a href="index.php"> <img src="img/logo.png" class='logo'></a>
    <ul class="menu">
    <a class="nav-item nav-link active" href="index.php">Acceuil </a>
      <a class="nav-item nav-link" href="prof.php">Prof</a>
      <a class="nav-item nav-link" href="contact.php">Contact</a>
    </ul>
  </div> 
  <?php
  if(isset($_SESSION['email'])){
    echo"
    <form class='bttn'>
                    <a href='logout.php' class='botton1'>logout</a>
                    <a href='#pop' name='add' id='add' class='botton2'>add prof</a>

                </form>";
                
  }else{
    echo"  <form class='bttn'>
                    <a href='login.php' class='botton1'>Connexion</a>
                </form>";
  }



  


?>
<style>
  #pop{ 
    position: fixed ;
    margin-top: 3%;
    visibility: hidden;
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
  #pop:target {
  visibility: visible;
 
}
</style>
<?php 

if(isset($_POST['add'])){
   
    $Nom = $_POST['nom'];
    $Prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $matieres = $_POST['matieres'];
    $villes = $_POST['villes'];
    $sql = mysqli_query($conn," INSERT INTO prof (nom,prenom,email,matieres,villes) VALUES ('$Nom','$Prenom','$email','$matieres','$villes')");  
}

?>
<div class="popups" id="pop">
<a class="close" href="prof.php"><img src="img/Icon material-close.png" class="close"></a>
<form  method="POST" class="forme">
<input type="text" id="fname" name="nom" placeholder="nom">
<input type="text" id="fname" name="prenom" placeholder="prenom">
<input type="text" id="fname" name="email" placeholder="E-mail">
<input type="text" id="fname" name="matieres" placeholder="matieres">
<input type="text" id="lname" name="villes" placeholder="villes">
<button type="submit" name="add" class="valid">ajouter ✔</button>
</form>
</div>


</body> 
</html>