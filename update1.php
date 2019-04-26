<form method="post" action="updating.php">
<select name="S">
<?php

$a=mysqli_connect("localhost","Najd","","testedb");
$c=mysqli_query($a,"select * from family ");
while($F=mysqli_fetch_array($c))
echo"<option>".$F['Name']."</option>"
?>
<input type="text"name="new">
<input type="submit" value="update">
</select>
</form>