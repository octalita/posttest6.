<?php
session_start();
require "config.php";



$id = $_GET["id"];

$result = mysqli_query($conn, "select * from lamin where id = '$id'");

$lamin = [];

while ($row = mysqli_fetch_assoc($result)) {
    $lamin[] = $row;
}

$lamin = $lamin[0];

if (isset($_POST["ubah"])) {
    $nama = $_POST["nama_alat_musik"];
    $jenis = $_POST["jenis_alat_musik"];
    $ukuran = $_POST["ukuran_alat_musik"];
    $harga = $_POST["harga_alat_musik"];

   $result = mysqli_query($conn, "update lamin set nama_alat_musik = '$nama', jenis_alat_musik = '$jenis', ukuran_alat_musik = '$ukuran', harga_alat_musik = '$harga' where id = '$id'");

    if ($result) {
        echo "
                <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'read.php';
                </script>
            ";
    } else {
        echo "
            <script>
            alert('Data Gagal Diubah!');
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h2>Edit Data</h2>

        <label for="nama_alat_musik">Nama Alat Musik:</label>
        <input type="text" name="nama_alat_musik" id="nama_alat_musik">

        <label for="jenis_alat_musik">Jenis Alat Musik:</label>
        <input type="text" name="jenis_alat_musik" id="jenis_alat_musik">

        <label for="ukuran_alat_musik">Ukuran Alat Musik:</label>
        <input type="text" name="ukuran_alat_musik" id="ukuran_alat_musik">

        <label for="harga_alat_musik">Harga Alat Musik:</label>
        <input type="text" name="harga_alat_musik" id="harga_alat_musik">

        <label for="gambar">Upload Gambar:</label>
        <input type="file" name="gambar" id="gambar">

        <button type="submit" name="ubah">Ubah</button>
    </form>
    <a href="read.php">Kembali ke home</a>
</body>

</html>
