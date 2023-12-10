<?php
$koneksi = new mysqli("localhost", "root", "", "ppdb_db");
if (isset($_GET['id'])) {
    $sql_cek = "SELECT * FROM tb_pendaftar WHERE id_pendaftar='" . $_GET['id'] . "'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<?php

$sql_hapus = "DELETE FROM tb_pendaftar WHERE id_pendaftar='" . $_GET['id'] . "'";
$query_hapus = mysqli_query($koneksi, $sql_hapus);
if ($query_hapus) {
    echo "<script>alert('Hapus Data Sukses')</script>";
    echo "<meta http-equiv='refresh' content='0; url=pendaftar.php'>";
} else {
    echo "<script>alert('Hapus Data Gagal')</script>";
    echo "<meta http-equiv='refresh' content='0; url=pendaftar.php'>";
}

?>

<!-- end -->