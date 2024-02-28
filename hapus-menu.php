<?php
include_once("koneksi/koneksi.php");
$id = $_GET['id'];
$sql = $con->query("DELETE FROM detailpenjualan WHERE PenjualanID=$id");
echo "<script>
        alert('Data Berhasil dihapus')
        window.location.href = 'daftar-transaksi.php';
        </script>";
        ?>