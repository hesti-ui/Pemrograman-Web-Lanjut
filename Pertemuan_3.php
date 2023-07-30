<html>
<body>
<title>PERTEMUAN 3</title>
<?php
    echo "<b>Latihan 1</b><br>";
	$a=5;
	$b=15;
	if ($a > $b)
	{
	echo "a lebih besar dari b";
	}
	else
	{
	echo "a sama atau lebih kecil dari b";
	}	
?>

<?php
	$harga=1500;
	switch($harga)
	{
	case 2000;
	echo "harganya mahal";
	break;
	case 1500;
	echo "harganya murah";
	break;
	default;
	echo "harganya tidak tahu";
	}
	echo "<hr>";
?>

<?php
    echo "<b>Latihan 2</b><br>";
    $judul="pemrograman PHP";
    echo "judul dicetak 5 kali";
    echo "<br>";
    $a=1;
    while($a<=10)
    {
    echo $judul;echo"<br>";
    $a=$a+1;
    }
	echo "<hr>";
?>

<?php
    echo "<b>Latihan 3</b><br>";
	$array = array ("A", "B", "C", "D");
	$array2[1]=15;
	$array2[2]=16;
	$array2["tiga"]=17;
	$array2[4]=18;
	$matriks[1][1]=15;
	$matriks[1][2]=17;
	$matriks[2][1]=18;
	$matriks[2][1]=19;
	$nilaimutu=$array[3];
	list ($adit, $andri ,$gofo)= $array;
	echo "list element array pada indext 3 = ";
	echo $array[3];	
	echo "<br>";
	echo "list element array pada indext 2 = ";
	echo $array2[2];
	echo "<hr>";
?>

<?php
    echo "<b>Latihan 4</b><br>";
	$fruit= array ("apple", "banana", "orange", "mango");
	list ($red_fruit, $orange_fruit) = $fruit;
	echo $red_fruit. "<br>";
	echo $orange_fruit;
	echo "<hr>";
?>

<?php
    echo "<b>Latihan 5</b><br>";
	$nilai=80;
	$n;
	if(($nilai>=0)&&($nilai<=45)){
	$n="E";
	}else if(($nilai>=46)&&($nilai<=59)){
	$n="D";
	}
	else if(($nilai>=60)&&($nilai<=74)){
	$n="C";
	}
	else if(($nilai>=75)&&($nilai<=84)){
	$n="B";
	}
	else if(($nilai>=75)&&($nilai<=84)){
	$n="A";
	}
	else{
	$n="Anda tidak mempunyai nilai";
	}
	echo $n;
?>
</body>
</html>