<?php include 'include/header.php'; ?>

<?php
// if(isset($_POST['envoyer'])){
// $Nom = $_POST['Name'];
// $email = $_POST['email'];
// $Subject = $_POST['Subject'];
// $Message = $_POST['msg'];
// $to = "hamriaimane69@gmail.com";

// if(mail($to , $Subject , $Message , $email )){
//     echo" <script > alert('✔ votre message est envoyer avec succer')</script>";
// }




?>

<div class="form">


    <form action=""" method="POST" class="forme">
    <input type="text" id="fname" name="Name" placeholder="Name">
    <input type="text" id="fname" name="email" placeholder="E-mail">
    <input type="text" id="fname" name="Subject" placeholder="Subject">
    <input type="text" id="msg" name="msg" placeholder="Message">
    <div class="bttn" id='contact'>
        <a href="index.php" class="botton1">Annuler</a>
        <button type="submit" name="envoyer" class="botton2">Envoyer</button>
    </div>
    </form>
</div>

<?php include 'include/footer.php'; ?>