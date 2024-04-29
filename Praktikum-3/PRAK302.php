<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>PRAK302</title> 
</head> 
<body> 
    <form action="" method="POST">
        <!-- menginputkan tinggi dari segitiga yang diinginkan dan alamat atau link url gambar --> 
        Tinggi : <input type="number" name="tinggi"></br> 
        Alamat Gambar: <input type="text" name="alamatgambar"></br> 
        <!-- tombol submit untuk menyimpan data yang diinput --> 
        <input type="submit" name="submit" value="Cetak"> 
    </form> 
    <?php  
    if (isset($_POST['submit'])): ?><br> 
        <?php 
        $tinggi = $_POST['tinggi']; 
        $alamatgambar = $_POST['alamatgambar']; 
        $i = 1; 
        $j = 1; 
        $k = $tinggi; 
        ?> 
        <!-- perulangan while ini akan terus berjalan selama $i kurang dari atau sama dengan $tinggi --> 
        <?php while ($i <= $tinggi): ?> 
            <!-- perulangan while ini akan terus berjalan selama $j kurang dari $i --> 
            <?php while ($j < $i): ?> 
                <!-- tag gambar yang menampilkan sebuah gambar yang telah diambil pada inputan --> 
                <img style="width: 25px; opacity: 0;" src=<?= $alamatgambar; ?> alt=""> 
                <?php $j = $j + 1; ?> 
            <?php endwhile; ?> 
            <!-- perulangan while ini akan terus berjalan selama $k lebih besar dari atau sama dengan $i --> 
            <?php while ($k >= $i): ?> 
                <!-- tag gambar yang menampilkan sebuah gambar yang telah diambil pada inputan --> 
                <img style="width: 25px" src=<?= $alamatgambar; ?> alt=""> 
                <?php $k = $k - 1; ?> 
            <?php endwhile; ?> 
            <br> 
            <?php 
            $j = 1; 
            $k = $tinggi; 
            $i = $i + 1; 
            ?> 
        <?php endwhile; ?> 
    <?php endif; ?> 
</body> 
</html> 