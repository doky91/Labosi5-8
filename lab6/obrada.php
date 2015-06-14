<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(isset($_SESSION['username']))
  $korisnik=$_SESSION['username'];

else{ header("Location:login.html");
exit;
}
$proizvod=$_GET['proizvod'];
$proizvodjac=$_GET['proizvodjac'];
$str_data = file_get_contents("http://stipe.predanic.com/TVZ/podaci.php");
$data = json_decode($str_data,true);

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

 <div class="row">
 	<div class="span8">
 <?php
for($i=0; $i<count($data); $i++) {

	if(strpos($data[$i]['proizvod'],$proizvod) !== false){
		for($j=0; $j<7; $j++){
    echo $data[$i][$j] . "<BR>";}

}

else if(strpos($data[$i]['naziv'],$proizvodjac) !== false){
for($j=0; $j<7; $j++)
    echo $data[$i][$j] . "<BR>";
}


else if($proizvodjac==null && $proizvod==null){
	for($j=0; $j<7; $j++){
    echo $data[$i][$j] . "<BR>";
}
echo "<br>";
}

else{}
}





?>
</div></div>
</html>