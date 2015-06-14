<?php

session_start();
if(isset($_SESSION['username']))
  $korisnik=$_SESSION['username'];

else{ header("Location:login.html");
exit;
}
?>

<!DOCTYPE html>
<html>
<head> <title>Unos novog proizvoda</title> 
<link rel="stylesheet" href="bootstrap/css/bootstrap.css"  type="text/css"/>
<link rel="stylesheet" href="mojcss.css"  type="text/css"/>
</head>


<body>
<div class="container">
	<div class="row">
		<div class="span8"> <h3> Zlatina kuća delicija </h3></div>
		<div class="span4"> <div class="korisnik"> <?php echo $korisnik?> <button onclick=logoutck() class="btn btn-default"> Odjava </button> </div>
	</div>
</div>
<div class="row">
<div class="span4"> 

<ul class="nav nav-pills nav-stacked">
	<li><a href="FormaUnos.php"> Unos novog proizvoda</a><li>
	<li><a href="IspisPonudeUrestoranu.php"> Naši proizvodi</a><li>
		<li><a href="Unos alergena i tipa.html"> Meni</a><li>
	<li><a href="#"> Meni</a><li>

</ul>



 </div>


Proizvodi:
<form action="obrada.php" method="GET">
<input type="text" name="proizvodjac" placeholder="Proizvođač">
<input type="text" name="proizvod" placeholder="Proizvod">
<input type="submit" value="Pošalji">
</form>
<br /> 
Za pretragu svih proizvoda pošaljite prazan upitnik. 
</body>
 

</html>



