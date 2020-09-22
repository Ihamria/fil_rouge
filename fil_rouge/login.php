<?php include 'include/header.php'; 
include 'include/connect.php';
?>
<?php


if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $user =" SELECT * FROM users WHERE  email='$email' AND password = '$pass'"; 
    $result = mysqli_query($conn, $user);
    $_SESSION['email'] = $_POST['email']; 

   if(mysqli_num_rows($result)==1){
      
echo" <script > alert('✔ vous avez connecter avec succee')</script>";
header("location:index.php");
   }
   else{
       echo" <script > alert('❌ votre mot de passe est incorect')</script>";
   }
}
?>

<body>
 
<div class="form">

    <form class="forme" action="" method="POST">
    <input type="text" id="fname" name="email" placeholder="Prenom">
    <input type="password" id="fname" name="password" placeholder="Mot de passe">
      <button type="submit" name="submit" class="submit">submit</button>

</form>
</div>
</div>  
</body>


<?php include 'include/footer.php'; ?>