<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Member</title>
    <style>
        table,
        tr,
        td {
            border-collapse: collapse;
            border-radius: 21px;
            padding: 40px 60px;
            font-size: 18px;
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

        button {
            display: inline-block;
            border-radius: 10px;
            border: 1px solid #03045e;
            position: relative;
            overflow: hidden;
            transition: all 0.5s ease-in;
            z-index: 1;
        }

        button::before,
        button::after {
            content: '';
            position: absolute;
            top: 0;
            width: 0;
            height: 100%;
            transform: skew(15deg);
            transition: all 0.5s;
            overflow: hidden;
            z-index: -1;
        }

        button::before {
            left: -10px;
            background: #537188;
        }

        button::after {
            right: -10px;
            background: #537188;
        }

        button:hover::before,
        button:hover::after {
            width: 70%;
        }

        button:hover span {
            color: #e0aaff;
            transition: 0.3s;
        }

        button span {
            color: #03045e;
            font-size: 18px;
            transition: all 0.3s ease-in;
        }
    </style>
</head>

<body class="p-3" style="background-color: #87CEEB;">
    <?php
    include_once('Model.php');
    if (isset($_GET['id_member'])) {
        deleteMember($_GET['id_member']);
    }
    ?>
    <h2>
        <center>Data Member</center>
    </h2>
    <center><a href="FormMember.php"><button class="btn btn-success mb-1">Tambah Data Member</button></a></center>
    <a href="index.php"><button class="btn btn-dark mb-4">Kembali</button></a>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th class="text-center">ID Member</th>
                <th class="text-center">Nama Member</th>
                <th class="text-center">Nomor Member</th>
                <th class="text-center">Alamat Member</th>
                <th class="text-center">Tanggal Mendaftar</th>
                <th class="text-center">Tanggal Terakhir Bayar</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <?php readData("member") ?>
    </table>
</body>
</html>