 
<?php
 include('spajanjenabazu.php');

$konekcija = mysqli_connect($host, $username, $password, $nazivbaze) 
      or die('Ne mogu se spojiti na server!'); 
$konekcija->set_charset('utf8');


 $title=$_POST["title"];
 
 
 $query="SELECT * FROM slastice";

$result = mysqli_query($konekcija, $query);

 	while($row=mysqli_fetch_array($result)){
 		if(strpos($row['naziv'],$title)!==false ||strpos($row['opis'],$title)!==false ){
 	
   echo "<table><tr><td>";
	echo $row['naziv'];
	echo"</td><td>";
		echo $row['opis'];
			echo"</td></tr>";




		}

		
 }
?>
