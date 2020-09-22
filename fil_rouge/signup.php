<?php include 'include/header.php';
      include 'include/connect.php';
?>
    <script src="js/signup.js"></script>
<body>

<div class="form">
    <form  method="POST" class="forme" onsubmit="return validation()" action='signup.php'>
    <input type="text" id="nom" name="nom" placeholder="Nom">
    <input type="text" id="prenom" name="Prenom" placeholder="Prenom">
    <input type="text" id="email" name="email" placeholder="E-mail">
    <input type="password" id="password" name="password" placeholder="Mot de passe">
    <input type="password" id="password1" name="password1" placeholder="confirme">
<button type="submit" name="submit" class="submit" >Inscription</button>
</form>
</div>
</body>
</html>
<?php 

if(isset($_POST['submit'])){

    $Nom = $_POST['nom'];
    $Prenom = $_POST['Prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role= 'user';
    $sql = "INSERT INTO users (nom,prenom,email,password,role) VALUES ('$Nom','$Prenom','$email','$password','$role')";
    mysqli_query($conn, $sql);

    
}


?>


  
<
<?php include 'include/footer.php'; ?>

