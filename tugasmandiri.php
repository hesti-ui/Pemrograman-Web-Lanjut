<html>
<body>
<title>Tugas Mandiri</title>
<?php
	echo "<b>Nomor 1 PENILAIAN</b><br>";
	$nilai=95;
	$n;
		if(($nilai>=0)&&($nilai<=50)){
			$n="Nilai anda E";
		}else if(($nilai>=50)&&($nilai<=60)){
			$n="Nilai anda D";
		}
		else if(($nilai>=60)&&($nilai<=70)){
			$n="Nilai anda C";
		}
		else if(($nilai>=70)&&($nilai<=84)){
			$n="Nilai anda B";
		}
		else if(($nilai>=85)&&($nilai<=100)){
			$n="Nilai anda A";
		}
		else{
			$n="Anda tidak mempunyai nilai";
		}
		echo $n;
		echo "<br><hr>";
?>

<?php
	echo "<b>Nomor 2 BILANGAN POSITIF NEGATIF</b><br>";
	$bilangan=-7;
	$a;
	if($bilangan<0){
		$a="bilangan negatif";
	}
	else if($bilangan>0){
		$a="bilangan positif";
	}
	else{
		$a="bilanga nol";
	}
	echo " Bilangan ".$bilangan." merupakan ".$a;
	echo "<br><hr>";
?>

<?php
	echo "<b>Nomor 3 BILANGAN GANJIL GENAP</b><br>";
	$bilangan = 9;
	if ($bilangan % 2 == 0){
	if ($bilangan == 0){
		echo "Bilangan Nol";
		} 
		else {
			echo "Bilangan Genap";
		} 
		}else {
			echo "Bilangan Ganjil";
		}
		echo "<br><hr>";
?>

<?php
	echo "<b>Nomor 4 KONVERSI ANGKA KE BULAN</b><br>";
	$angka=11;
		switch ($angka) {
        case 1:
            echo'Bulan 1 adalah Januari';	
            break;
        case 2:
            echo'Bulan 2 adalah Februari';
            break;
        case 3:
            echo 'Bulan 3 adalah Maret';
            break;
        case 4:
            echo 'Bulan 4 adalah April';
            break;
        case 5:
            echo 'Bulan 5 adalah Mei';
            break;
        case 6:
            echo 'Bulan 6 adalah Juni';
            break;
        case 7:
            echo 'Bulan 7 adalah Juli';
            break;
        case 8:
            echo 'Bulan 8 adalah Agustus';
            break;
        case 9:
            echo 'Bulan 9 adalah September';
            break;
        case 10:
            echo 'Bulan 10 adalah Oktober';
            break;
        case 11:
            echo 'Bulan 11 adalah November';
            break;
        case 12:
            echo 'Bulan 12 adalah Desember';
            break;
        default:
            echo 'Bulan tidak valid';
            break;
    }
?>
</body>
</html>