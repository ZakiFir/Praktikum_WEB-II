<?php  
$panjang = ""; 
$lebar = ""; 
$nilai = ""; 
if (isset($_POST["submit"])) { 
    $panjang = $_POST["panjang"]; 
    $lebar = $_POST["lebar"]; 
    $nilai = $_POST["nilai"]; 
} ?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <style> 
        /*  */ 
        table, tr, td { 
            border: solid 1px black; 
            border-collapse: collapse;
            padding: 10px; 
            text-align: center; 
        } 
    </style> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>PRAK401</title> 
</head> 
 
<body> 
    <!-- membuat sebuah form dengan metode POST yang terdiri dari tiga inputan teks (panjang, lebar, dan nilai) dan sebuah tombol submit. --> 
    <form method="POST">  
        Panjang : <input type="text" name="panjang" value="<?= $panjang; ?>"><br>  
        Lebar   : <input type="text" name="lebar" value="<?= $lebar; ?>"><br>  
        Nilai   : <input type="text" name="nilai" value="<?= $nilai; ?>"><br>  
        <input type="submit" name="submit" value="Cetak">  
    </form> 
 
    <!-- melakukan pengecekkan apakah tombol submit ditekan, jika iya maka nilai dari inputan teks yang dimasukkan oleh pengguna diolah dengan memecah string nilai ke dalam array --> 
    <?php if (isset($_POST["submit"])) { 
        $isi = explode(" ", $nilai); 
        $panjangNilai = count($isi); 
        if ($panjang * $lebar == $panjangNilai) { 
            $count = 0; 
            for ($i = 0; $i < $panjang; $i++) { 
                for ($j = 0; $j < $lebar; $j++) { 
                    $tampil[$i][$j] = $isi[$count]; 
                    $count++; 
                } 
            } 
            echo "<table>"; 
            for ($i = 0; $i < $panjang; $i++) { 
                echo "<tr>"; 
                for ($j = 0; $j < $lebar; $j++) { 
                    echo "<td>" . $tampil[$i][$j] . "</td>"; 
                } 
                echo "</tr>"; 
            } 
        } else { 
            echo "Panjang nilai tidak sesuai dengan ukuran matriks"; 
        } 
    } ?> 
</body> 
</html>