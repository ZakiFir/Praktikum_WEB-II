<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, scale=1.0"> 
    <title>PRAK 301</title> 
</head> 
<body> 
    <form action="" method="POST"> 
        <!-- menginputkan jumlah peserta yang diinginkan --> 
        Jumlah Peserta: <input type="number" name="nilai"></br> 
        <!-- tombol submit untuk menyimpan data yang diinput -->
        <input type="submit" name="submit" value="Cetak"> 
    </form> 
</body> 
</html> 

<?php 
if (isset($_POST['submit'])) { 
    $nilai = $_POST['nilai']; 
    $i = 1; 
    while ($i <= $nilai) { 
        if ($i % 2 == 0) { 
        echo "<h2><font color='green'>Peserta Ke-$i</font></br>"; 
        } else { 
        echo "<h2><font color='red'>Peserta Ke-$i</font></br>"; 
        } 
        $i++; 
    } 
} 
?> 