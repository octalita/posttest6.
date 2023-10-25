<?php
require "config.php";

$id = $_GET["id"];

$result = mysqli_query($conn, "delete from lamin where id = '$id'");


if ($result) {
    echo "
    <script>
    alert('Data Berhasil Dihapus!');
    document.location.href = 'read.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data Gagal Dihapus!');
    document.location.href = 'read.php';
</script>
";
}
