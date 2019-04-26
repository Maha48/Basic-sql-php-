
<?php 
$d=$_POST['S'];
$a=mysqli_connect("localhost","Najd","","testedb");
$c=mysqli_query($a,"DELETE FROM family where Name='$d'");
while($F=mysqli_fetch_array($c))
echo"<option>".$F['Name']."</option>";
?>
</select>

