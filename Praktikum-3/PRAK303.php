<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, scale=1.0"> 
    <title>PRAK303</title> 
</head> 
<body> 
    <form action="" method="POST"> 
        <!-- menginputkan batas bawah dan batas atas deret bilangan --> 
        Batas Bawah : <input type="number" name="bawah"></br> 
        Batas Atas : <input type="number" name="atas"></br> 
        <!-- tombol submit untuk menyimpan data yang diinput -->
        <input type="submit" name="submit" value="Cetak"></br> 
    </form></br> 
</body> 
</html> 
 
<?php  
if (isset($_POST['submit'])) { 
    $bawah = $_POST['bawah']; 
    $atas = $_POST['atas']; 
    $i = $bawah; 
    do { 
        if (($i + 7) % 5 == 0) { 
            echo "<img src='bintang.png' width='15px' height='15px'>"; 
        } else { 
            echo $i; 
        } 
        echo "&nbsp"; 
        $i++; 
    } while ($i <= $atas); 
} 
?>