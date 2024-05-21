<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Member</title>
    <style>
        input {
            font-weight: 500;
            font-size: .8vw;
            color: #fff;
            background-color: rgb(28, 28, 30);
            box-shadow: 0 0 .4vw rgba(0, 0, 0, 0.5), 0 0 0 .15vw transparent;
            border-radius: 0.4vw;
            border: none;
            outline: none;
            padding: 0.4vw;
            transition: .4s;
        }

        input:hover {
            box-shadow: 0 0 0 .15vw rgba(135, 207, 235, 0.186);
        }

        input:focus {
            box-shadow: 0 0 0 .15vw skyblue;
        }
    </style>
</head>

<body class="p-3" style="background-color: #B2FFFF">
    <?php
    include_once('Model.php');
    if (isset($_GET['id_member'])) {
        editMember();
    }
    ?>
    <div class="container">
        <div class="row">
            <form action="" method="post">
                <h1 style="text-align: center;" class="mt-2">Tambah Data Member</h1>

                <label for="nama_member" class="form-label">Nama Member</label>
                <input type="text" name="nama_member" id="nama_member" class="form-control mb-3"
                    value="<?php if (isset($_GET['id_member']))
                        echo $result[0]["nama_member"] ?>" required>

                    <label for="nomor_member" class="form-label">Nomor Member</label>
                    <input type="text" name="nomor_member" id="nomor_member" class="form-control mb-3"
                        value="<?php if (isset($_GET['id_member']))
                        echo $result[0]["nomor_member"] ?>" required>

                    <label for="alamat" class="form-label">Alamat Member</label>
                    <textarea name="alamat" id="alamat" class="form-control"
                        required><?php if (isset($_GET['id_member']))
                        echo $result[0]["alamat"] ?> </textarea>

                    <label for="tgl_mendaftar" class="form-label">Tanggal Mendaftar</label>
                    <input type="datetime-local" name="tgl_mendaftar" id="tgl_mendaftar" class="form-control"
                        value="<?php if (isset($_GET['id_member']))
                        echo date('Y-m-d\TH:i', strtotime($result[0]["tgl_mendaftar"])) ?>"
                        required>

                    <label for="tgl_terakhir_bayar" class="form-label">Tanggal Terakhir Bayar</label>
                    <input type="date" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar" class="form-control"
                        value="<?php if (isset($_GET['id_member']))
                        echo $result[0]["tgl_terakhir_bayar"] ?>" required>

                <?php
                    if (isset($_GET['id_member'])) {
                        echo "<button type=\"submit\" class=\"btn btn-success mt-3\" name=\"update\"> Update </button>";
                    } else {
                        echo "<button type=\"submit\" class=\"btn btn-success mt-3\" name=\"tambah\"> Tambah </button>";
                    }
                    ?>
        </div>
    </div>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $tgl_daftar = date('Y-m-d H:i:s', strtotime($_POST['tgl_daftar']));
        updatemember($_GET['id_member'], $_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
    }
    if (isset($_POST['tambah'])) {
        $tgl_daftar = date_create($_POST['tgl_daftar']);
        $tgl_daftar = date_format($tgl_daftar, "Y-m-d H:i:s");
        print_r($_POST);
        insertDataMember($_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
    }
    ?>

</body>
</html>