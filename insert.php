<?php
$i=$_POST['id1'];
$N=$_POST['studentn'];
$F=$_POST['pstudent'];
$age=$_POST['g'];
$a=mysqli_connect("localhost","Najd","","log");
$c=mysqli_query($a,"INSERT INTO user values($i,'$N','$F','$age')");
$d=mysqli_query($a,"SELECT * from user where ID=$i");
while($h=mysqli_fetch_array($d))
echo"hello".$h['Name'];
?>