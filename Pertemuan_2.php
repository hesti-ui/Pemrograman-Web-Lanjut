<html>
<head>
<title>PERTEMUAN 2</title>
</body>
<?php
    echo "<b>Latihan 1</b><br>";
    $a = 6;
    $b = 6;
    echo "$a == $b : ". ($a == $b);
    echo "<br>$a != $b : ". ($a != $b);
    echo "<br>$a > $b : ". ($a > $b);
    echo "<br>$a < $b : ". ($a < $b);
    echo "<br>($a == $b) && ($a > $b) : ".(($a != $b) && ($a > $b));
    echo "<br>($a == $b) || ($a > $b) : ".(($a != $b) || ($a > $b));
    echo "<hr>";
?>

<?php
    echo "<b>Latihan 2</b><br>";
    $a = 5;
    $b = $a+3;
    echo "<br>";
    echo $a;
    echo "<br>";
    echo $b;
    $c="buku ini bagus + $a";
    echo "<br>";
    echo $c;
    echo "<hr>";
?>

<?php
    echo "<b>Latihan 3</b><br>";
    $a = 5;
    $b =$a+3;
    Define("NILAI1",100);
    Define("NILAI2",100);
    echo $a;
    echo "<br>".$b;
    echo "<br>".($b+NILAI1);
    echo "<br>".(NILAI1+NILAI2);
    echo "<hr>";
?>

<?php
    echo "<b>Latihan 4</b><br>";
    //menggunakan konstanta
    $panjang = 10;
    $lebar = 10;
    define("luas_persegi",$panjang*$lebar);
    echo "Luas persegi adalah = ".luas_persegi;
    echo "<br>";
    ?>

    <?php
    //menggunakan variabel
    define("panjang",10);
    define("lebar",10);
    $luas = panjang * lebar;
    echo "Luas persegi adalah = $luas";
    ?>
</body>
</html>