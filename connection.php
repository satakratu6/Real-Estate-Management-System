<?php
$servername="sql303.infinityfree.com";
$username="if0_37675226";
$password="CeNiWJ6e33AzKP";
$dbname="if0_37675226_RealEstate";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
  // echo "Connection succesfull";
} else{
  "Not succesfull".mysqli_connect_error();
}
?>