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
      <a class="nav-link" data-bs-target="#ppdb-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-circle"></i><span>Data PPDB</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="ppdb-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
        <li>
          <a href="pendaftar.php" class="active">
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
      <a class="nav-link collapsed" data-bs-target="#pengguna-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-circle"></i><span>Data Pengguna</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="pengguna-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="../data_pengguna/user.php">
            <i class="bi bi-circle"></i><span>User</span>
          </a>
        </li>
        <li>
          <a href="../data_pengguna/akun_pendaftar.php">
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
            <h1 class="card-title">List Pendaftar</h1>

            <!-- Table with stripped rows -->
            <div class="card-body">
              <div class="table-responsive">
                <table style="font-size: 14px" class="table datatable table-sm" id="example">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">No. Pendaftar</th>
                      <th scope="col">NISN</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Tgl. Lahir</th>
                      <th scope="col">No. Telp</th>
                      <th scope="col">Agama</th>
                      <th scope="col">Foto</th>
                      <th scope="col">Status</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql_tampil = "SELECT * FROM tb_pendaftar";
                    $query_tampil = mysqli_query($koneksi, $sql_tampil);
                    $no = 1;
                    while ($data = mysqli_fetch_array($query_tampil, MYSQLI_BOTH)) {
                    ?>
                      <tr>

                        <td> <?php echo $no; ?> </td>
                        <td> <?php echo $data['no_pendaftar']; ?> </td>
                        <td> <?php echo $data['nisn']; ?> </td>
                        <td> <?php echo $data['nama_pendaftar']; ?> </td>
                        <td> <?php echo $data['jk']; ?> </td>
                        <td> <?php echo $data['alamat']; ?> </td>
                        <td> <?php echo $data['tgl_lahir']; ?> </td>
                        <td> <?php echo $data['no_telp']; ?> </td>
                        <td> <?php echo $data['agama']; ?> </td>
                        <td> <img src="foto/<?php echo $data['foto']; ?>" width="70px" /> </td>
                        <td> <?php echo $data['status']; ?> </td>

                        <td>
                          <a href="edit.php?id=<?php echo $data['id_pendaftar']; ?>" class='btn btn-warning btn-sm'>Ubah</a>
                          <a href="hapus-pendaftar.php?id=<?php echo $data['id_pendaftar']; ?>" onclick="return confirm('Hapus Data Ini ?')" class='btn btn-danger btn-sm'>Hapus</a>
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