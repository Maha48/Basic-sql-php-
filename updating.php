
<?php 
$i=$_POST['S'];
$F=$_POST['new'];
$a=mysqli_connect("localhost","Najd","","testedb");
$c=mysqli_query($a,"UPDATE family SET Name='$F' WHERE Name='$i' ");
?>