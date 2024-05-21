<!DOCTYPE html> 
<html lang="en"> 

<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Sistem Informasi Perpustakaan</title> 
    <style> 
        table, 
        tr, 
        td { 
            border-collapse: collapse; 
            border-radius: 21px; 
            padding: 40px 60px; 
            font-size: 20px;
        } 

        table { 
            width: max-content; 
            border-radius: 21px; 
            background: #B2FFFF;
            color: black; 
        } 

        td { 
            width: 100px; 
            height: 10px;
            text-align: center; 
        } 

        body { 
            background-color: #87CEEB; 
            color: black; 
        } 
        .clickable-image {
            transition: transform 0.2s ease-in-out;
        }

        .clickable-image:active {
            transform: scale(1.1);
        }
    </style> 
</head> 

<body> 
    <h2 style="text-align:center;">SISTEM INFORMASI PERPUSTAKAAN</h2> 
    <br></br> 
    <table style="margin-left:auto;margin-right:auto;"> 
        <tr> 
            <th>Buku</th> 
            <th>Member</th> 
            <th>Peminjaman</th> 
        </tr> 
        <tr> 
            <td><a href="Buku.php"><img class="clickable-image" src="documents-outline.svg" alt="Buku" height="170" width="200"></a></td> 
            <td><a href="Member.php"><img class="clickable-image" src="member.svg" alt="Member" height="170" width="300"></a></td> 
            <td><a href="Peminjaman.php"><img class="clickable-image" src="peminjaman.svg" alt="Peminjaman" height="170" width="170"></a></td> 
        </tr> 
    </table> 
</body> 

</html>
