
<?php	
$koneksi = new mysqli ("localhost","root","","ppdb_db");
if (isset ($_POST['Simpan'])){

    $sql_simpan = "INSERT INTO user (`username`, `password`, `nama`, `level`) VALUES (
        '".$_POST['username']."',
        '".$_POST['password']."',
        '".$_POST['nama']."',
        '".$_POST['level']."')";
    $query_simpan = mysqli_query($koneksi, $sql_simpan);

    if ($query_simpan) {
        echo "<script>alert('Tambah Data User Sukses')</script>";
        echo "<meta http-equiv='refresh' content='0; url=user.php'>";
    }else{
        echo "<script>alert('Tambah Data Gagal')</script>";
        echo "<meta http-equiv='refresh' content='0; url=user.php'>";
    }
    }
?>
