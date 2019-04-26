
<?php 
$i=$_POST['S'];
$F=$_POST['fa'];
$a=mysqli_connect("localhost","Najd","","testedb");
$c=mysqli_query($a,"UPDATE family SET Family='$F' WHERE Name='$i' ");
?>