<?php include '../tema/header.php'; ?>

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="../index.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#lembaga-nav" data-bs-toggle="collapse" href="#">
                <i class="bx bxs-landmark"></i><span>Kelembagaan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="lembaga-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Profil Lembaga</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Data Jurusan</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#ppdb-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-circle"></i><span>Data PPDB</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="ppdb-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="../data_ppdb/pendaftar.php">
                        <i class="bi bi-circle"></i><span>Data Pendaftar</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Yang Lulus</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Tidak Lulus</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link" data-bs-target="#pengguna-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-circle"></i><span>Data Pengguna</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="pengguna-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="user.php">
                        <i class="bi bi-circle"></i><span>User</span>
                    </a>
                </li>
                <li>
                    <a href="akun_pendaftar.php" class="active">
                        <i class="bi bi-circle"></i><span>Akun Pendaftar</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#pengaturan-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gear"></i><span>Pengaturan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="pengaturan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Pengaturan PPDB</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Pengaturan Apk</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

    </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title fw-bold">Daftar Akun Pendaftar</h1>
                    
                    <!-- Table with stripped rows -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table style="font-size: 14px" class="table datatable table-sm" id="example">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nisn</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_tampil = "SELECT * FROM tb_register";
                                    $query_tampil = mysqli_query($koneksi, $sql_tampil);
                                    $no = 1;
                                    while ($akun = mysqli_fetch_array($query_tampil, MYSQLI_BOTH)) {
                                    ?>
                                        <tr>

                                            <td> <?php echo $no; ?> </td>
                                            <td> <?php echo $akun['nisn']; ?> </td>
                                            <td> <?php echo $akun['nama_pendaftar']; ?> </td>
                                            <td> <?php echo $akun['username']; ?> </td>
                                            <td> <?php echo $akun['password']; ?> </td>

                                            <td>
                                                <a href="edit-akun.php?id=<?php echo $akun['id_register']; ?>" class='btn btn-warning btn-sm'>Ubah</a>
                                                <a href="hapus-akun.php?id=<?php echo $akun['id_register']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini ?')" class='btn btn-danger btn-sm'>Hapus</a>
                                            </td>
                                        </tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
        </div>
    </section>


</main><!-- End #main -->

<?php include '../tema/footer.php'; ?>