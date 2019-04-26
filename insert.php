<?php
$i=$_POST['id1'];
$N=$_POST['studentn'];
$F=$_POST['pstudent'];

$a=mysqli_connect("localhost","Najd","","testedb");
$c=mysqli_query($a,"INSERT INTO family values($i,'$N','$F')");
$d=mysqli_query($a,"SELECT * from family where ID=$i");
while($h=mysqli_fetch_array($d))
echo"hello".$h['Name'];
?>