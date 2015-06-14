<!DOCTYPE html>

<?php

session_start();
$trazenje=$_POST['trazenje'];
$korisnik=$_SESSION['username'];

echo "<b>Tražena stvar je: </b>";
echo $trazenje;
include('spajanjenabazu.php');

$konekcija = mysqli_connect($host, $username, $password, $nazivbaze) ;

$konekcija->set_charset('utf8');
$query =  "SELECT naziv,opis FROM slastice";
      
$result = mysqli_query($konekcija, $query);

    $json_response = array();

    
    while ($row = mysqli_fetch_array($result)) {


if(strlen(strstr($row['naziv'],$trazenje) )>0)
{


  $row_array['naziv'] = $row['naziv'];

        $row_array['opis'] = $row['opis'];


        array_push($json_response,$row_array);


}

elseif(strlen(strstr($row['opis'],$trazenje)) >0)

{
	  $row_array['naziv'] = $row['naziv'];

        $row_array['opis'] = $row['opis'];



        array_push($json_response,$row_array);
}



    else{}  
    }

	echo "<b> Nakon pretrage dobijemo ovaj json objekt:</b>";
    echo json_encode($json_response);

     


?>




<html>
<head> <title> Ispis jscript</title> 
<link rel="stylesheet" href="bootstrap/css/bootstrap.css"  type="text/css"/>
<link rel="stylesheet" href="mojcss.css"  type="text/css"/>


<body>
<div class="container">
  <div class="row">
    <div class="span8"> <h3> Zlatina kuća delicija </h3></div>
    <div class="span4"> <div class="korisnik"> <?php echo $korisnik?> <button onclick=logoutck() c
    	lass="btn btn-default"> Odjava </button> </div>
  </div>
</div>
<div class="row">
<div class="span4"> 
<ul class="nav nav-pills nav-stacked">
   <li><a href="FormaUnos.php"> Unos novog proizvoda</a><li>
  <li><a href="IspisPonudeUrestoranu.php"> Naši proizvodi</a><li>
  <li><a href="Unos alergena i tipa.php"> Unos alergena i tipa</a><li>
      <li><a href="OsobniPodaci.php"> Osobni podaci</a><li>
  <li><a href="TraženjePDF.html"> Traženje za PDF</a><li>

</ul>
</div></div>
<script type="text/javascript">
var MYAPP = {};
 MYAPP.counter = 1; 
var mojstring= <?php echo json_encode($json_response)?>;

JSON.parse(mojstring);

 

function pomakniNaprid(){
	
	for(var i =  MYAPP.counter; i < mojstring.length; i++) {
    var obj = mojstring[i];

    console.log(obj.naziv);
    document.getElementById("parag").innerHTML = obj.naziv;
    document.getElementById("parag2").innerHTML =obj.opis;
    
     MYAPP.counter++;
}
	
	
	}
	
	
	function pomakniNatrag(){
	
	for(var i =  MYAPP.counter-1; i > mojstring.length; i--) {
    var obj = mojstring[i];

    
console.log(obj.naziv);
    document.getElementById("parag").innerHTML = obj.naziv;
    document.getElementById("parag2").innerHTML =obj.opis;
    
     MYAPP.counter--;
}
	
	
	}

function logoutck() {
    var odjava = confirm("Zbilja želiš izaći iz kuće?");
    if (odjava) {
       window.location.href = 'logout.php';
    }

}
</script>

</head>

<body>

<div class="row">
  <div class="span6 offset4">
    <p> Rezultati vaše pretrage: </p>
<p><b>Naziv proizvoda:</b></p><p id="parag">  </p>
<p><b>Opis proizvoda:</b></p><p id="parag2"> </p>

<p onclick="pomakniNaprid()"> Pomakni za sljedeći</p>
<p onclick="pomakniNatrag()"> Pomakni za onaj prije</p>

</div>
</div>
</body>
</html>
