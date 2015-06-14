<?php

include('spajanjenabazu.php');


// filtriraj ulaz
$upit=filter_input(INPUT_GET, "upit", FILTER_SANITIZE_STRING);

// inicijaliziraj ispis
$ispis="<table>";
$query =  "SELECT naziv,opis FROM slastice";
      
$result = mysqli_query($konekcija, $query);

while($row = mysqli_fetch_array($result)) {

	
if(strpos($row['naziv'],$upit) !== false)
{
 $ispis.="<tr><td>{$row['naziv']}</td><td>{$row['opis']}</td></tr>";
}



elseif(strpos($row['opis'],$upit) !== false)

{
 $ispis.="<tr><td>{$row['naziv']}</td><td>{$row['opis']}</td></tr>";

}
else{}
}


$ispis.="</table>";

echo $ispis;

?>