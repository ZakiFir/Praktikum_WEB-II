<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, scale=1.0"> 
    <title>PRAK305</title> 
</head> 
<body> 
    <form action="" method="post"> 
        <!-- menginputkan data teks yang diinginkan --> 
        <input type="text" name="teks" required> 
        <!-- tombol submit untuk menyimpan data yang diinput --> 
        <button type="submit" name="submit">Submit</button> 
    </form> 
</body> 
</html> 
<br>
<?php
if (isset($_POST['submit'])) { 
    $teks = $_POST['teks']; 
    $panjang = strlen($teks); 
    $input = str_split($teks); 
    $j = 0; 
    $k = 0; 
    while ($k < $panjang) { 
        echo strtoupper($input[$j]); 
        for ($i = 1; $i < $panjang; $i++) { 
            echo strtolower($input[$j]); 
        } 
        $k++; 
        $j++; 
    } 
} 
?>