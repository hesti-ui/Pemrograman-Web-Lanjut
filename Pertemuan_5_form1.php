<html>
<body>
	
	<form method = "POST">
	<label for="baris">Baris: </table>
	<input type="nmber" name="baris">
	<br></br>
	<label for="baris"> Kolom : </label>
	<input type="number" name="kolom">
	<br>
	<br>
	<button type="submit">OK</button>
	</form>

<p> OUTPUT </p>

<table border="1">
<?php
	$baris = $_POST["baris"];
	$kolom = $_POST["kolom"];
	for ($i = 1; $i <= $baris; $i++){
	echo "<tr>";
	for ($x=1; $x<=$kolom; $x++){
		echo "<td>OK</td>";
	}
	echo "</tr>";
	}
?>
</table>
</body>
</html>