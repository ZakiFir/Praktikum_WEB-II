<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>PRAK201</title> 
</head> 
<body> 
    <form method="POST" action="PRAK201.php"> 
        <!-- Letak input nilai --> 
        Nama: 1.<input type="text" name="nama1"><br> 
        Nama: 2.<input type="text" name="nama2"><br> 
        Nama: 3.<input type="text" name="nama3"><br> 
        <!-- Letak tombol submit --> 
        <input type="submit" name="submit" value="Submit"> 
    </form> 
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Nama1 = isset($_POST['nama1']) ? $_POST['nama1'] : ""; 
        $Nama2 = isset($_POST['nama2']) ? $_POST['nama2'] : ""; 
        $Nama3 = isset($_POST['nama3']) ? $_POST['nama3'] : ""; 
        
        $data = array($Nama1, $Nama2, $Nama3); 
        sort($data); 

        $data_length = count($data); 
        for($x = 0; $x < $data_length; $x++){
            echo $data[$x]; 
            echo "<br>"; 
        } 
    }
    ?> 
</body> 
</html>