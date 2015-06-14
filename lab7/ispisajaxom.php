<?php

 include "spajanjenabazu.php";
 
 $upit=(isset($_POST['trazi']) ? $_POST['trazi'] : null);
 
 
$query =  "SELECT naziv,opis FROM slastice";
      
$result = mysqli_query($konekcija, $query);

while($row = mysqli_fetch_array($result)) {
 if(strpos($row['naziv'],$upit) !== false)
{
echo"<tr><td>{$row['naziv']}</td><td>{$row['opis']}</td></tr>";
}



elseif(strpos($row['opis'],$upit) !== false)

{
 echo"<tr><td>{$row['naziv']}</td><td>{$row['opis']}</td></tr>";

}
else{}
}



?>