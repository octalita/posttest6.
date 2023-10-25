<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Alat Musik</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            padding: 0;
            
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100pv;
            background-color: #f0f0f0;
            background-image: url(img/background.jpg);
        }

        h1 {
            font-size: 24px;
            text-align: center;
            
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn-container {
            display: flex;
            justify-content: cen;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 2px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
           
        }
    </style>
</head>
<body>
<?php
date_default_timezone_set('Asia/Makassar'); // Mengatur zona waktu ke WITA (Waktu Indonesia Tengah)

include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM lamin");

$lamin = [];

while ($row = mysqli_fetch_assoc($result)) {
    array_push($lamin, $row);
}
?>

<div class="container d-flex align-items-items-center justify-content-between">
    <h1>Daftar Alat Musik</h1>
    <p><?php echo date('l, d F Y, H:i T'); ?></p> <!-- Menampilkan hari, tanggal, bulan, jam, menit, dan zona waktu -->
    <a class="btn btn-primary" style="height: 40px;" href="tambah.php" role="button">Tambah</a>
</div>
<br>
<table class="table" border="1px">
    <thead class="thead-light">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis</th>
            <th scope="col">Ukuran</th>
            <th scope="col">Harga</th>
            <th scope="col">Gambar</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($lamin as $row) :?>
            <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row["nama_alat_musik"]; ?></td>
    <td><?php echo $row["jenis_alat_musik"]; ?></td>
    <td><?php echo $row["ukuran_alat_musik"]; ?></td>
    <td><?php echo $row["harga_alat_musik"]; ?></td>
    <td> <img src="img/<?= $row['gambar'] ?>" alt="" width="50px" height="50px"> </td>
                <td><a href="edit.php?id=<?=$row["id"];?>">Edit</a></td>
                <td><a href="hapus.php?id=<?=$row["id"];?>" onclick="return confirm('Apa Anda Yakin ingin menghapus data ini ?')">hapus</a>
            </td>
</tr>
    <?php $i++; endforeach;?>
    </tbody>
</table>

</body>
</html>
