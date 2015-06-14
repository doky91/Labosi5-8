<?php
session_start();

$user = $_POST["user"];
$passw=$_POST["pass"];
$pass=md5($passw);

/*za korisnika Dolores password je 123*/

 include('spajanjenabazu.php');
 
$konekcija = mysqli_connect($host, $username, $password, $nazivbaze) ;


$upi = "SELECT * FROM korisnik WHERE korisnickoIme='$user' and lozinka='$pass'"; 

$rez=mysqli_query($konekcija, $upi);

$broj=mysqli_num_rows($rez);

if($broj>0){

$_SESSION['username'] = $user;

session_write_close();

$newURL="IspisPonudeURestoranu.php";
header('Location: '.$newURL);exit;
}

else {
/*$novo="login.html";
	header('Location: '.$novo);
*/
}
?>