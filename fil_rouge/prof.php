<?php include 'include/connect.php'; ?>
<?php include 'include/header.php'; ?>





<div class="contour">
    
     <form method="POST" action="prof.php">
  <select class="search1" name="matieres">
    <option selected>Matiere ...</option>
    <option value="arab">arab</option>
    <option value="francais">francais</option>
    <option value="anglais">anglais</option>
    <option value="philosophie">philosophie</option>
    <option value="physique">physique</option>
    <option value="math">math</option>
    <option value="espagnole">espagnole</option>
    <option value="science">science</option> 

  </select>
<!-- <input type="text" name="matieres" class="search1">
<input type="text" name="villes" class="search2"> -->
  <select class="search2" name="villes">
    <option selected>ville ...</option>
    <option value="casablanca">casablanca</option>
    <option value="marakeche">marakeche</option>
    <option value="rabat">rabat</option>
    <option value="safi">safi</option>
    <option value="agadir">agadir</option>
    <option value="fes">fes</option>
    <option value="aljadida">aljadida</option>
  </select>
<button type="submit" name="submit" class='search'></button>

</form>

  
</div>
<?php
    if (isset($_POST['submit'])){
       $matieres = $_POST['matieres'];
       $villes = $_POST['villes']; 
       $query =" SELECT * FROM prof WHERE  matieres='$matieres' AND villes ='$villes' "; 
    }else
       $query ="SELECT * FROM prof  ";
       $result = mysqli_query($conn, $query);
      ?>
                  
<table class="table1">
	<thead>
		<tr>
      <th id='id'><h1>id</h1></th>
			<th ><h1>Nom</h1></th>
			<th><h1>prenom</h1></th>
			<th id='id1'><h1>email</h1></th>
      <th><h1>Matiere</h1></th>
      <th><h1>ville</h1></th>
      <th><h1></h1></th>
      <?php
    if(isset($_SESSION['email'])){

     echo " <th><h1></h1></th>";
    }?>
		</tr>
	</thead>
	<tbody>
  <?php
  
  while($row = mysqli_fetch_assoc($result)) { 
    $id_prof =  $row['id_prof'];
    $Nom =  $row['nom'];
    $Prenom = $row['prenom'];
    $email =  $row['email'];
    $matieres =  $row['matieres'];
    $villes =  $row['villes'];
    ?>

		<tr id='row1'>
      <td><?php echo $id_prof ?></td>
			<td><?php echo $Nom ?></td>
			<td><?php echo $Prenom ?></td>
			<td><?php echo $email ?></td>
      <td><?php echo $matieres ?></td>
      <td><?php echo $villes ?></td>
      <td><a  href="commande.php?GetID=<?php echo $id_prof ?>"><button type="submit" id='cmd' name="commander"  >Commander un cours</button></a></td>
     
     <?php
     if(isset($_SESSION['email'])){

echo"
   <td>
   
   <a href='update.php?GetID=$id_prof'><button type='submit' id='cmd' name='modifier'  >Modifier</button></a>
   <a href='delete.php?supprimer=$id_prof'><button type='submit' id='cmd' name='supprimer'  >Supprimer</button></a>
   </td>
    ";}}?>

    </tr>    
	</tbody>
</table>
<?php include 'include/footer.php'; ?>
