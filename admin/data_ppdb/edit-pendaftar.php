<?php include '../tema/header.php'; ?>

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed" href="index.php">
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
          <a href="#">
            <i class="bi bi-circle"></i><span>User</span>
          </a>
        </li>
        <li>
          <a href="#">
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
            <p style="font-size: 14px"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable">
                <i class="bi bi-plus-lg"> Tambah</i>
              </button></p>

            <!-- Modal Dialog Scrollable -->
            <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Pendaftar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="tambah.php" method="POST" enctype="multipart/form-data" class="row g-3">
                      <div class="col-md-6">
                        <label for="nama_pendaftar" class="form-label">Nama</label>
                        <input type="id" name="nama_pendaftar" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label for="tgl_lahir" class="form-label">Tgl. Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control">
                      </div>
                      <div class="col-md-12">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea type="text" name="alamat" class="form-control"></textarea>
                      </div>
                      <fieldset class="col-md-6">
                        <label class="form-label pt-0">Jenis Kelamin</label>
                        <div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" checked>
                            <label class="form-check-label" for="jenis_kelamin">
                              Laki-laki
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan">
                            <label class="form-check-label" for="jenis_kelamin">
                              Perempuan
                            </label>
                          </div>
                        </div>
                      </fieldset>
                      <div class="col-md-6">
                        <label class="form-label">Agama</label>
                        <div>
                          <select class="form-select" name="agama" aria-label="Default select example">
                            <option selected>-- Pilih Agama --</option>
                            <option value="Islam">Islam</option>
                            <option value="Budha">Budha</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Khonghucu">Khonghucu</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Katolik">Katolik</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                        <input type="tel" name="asal_sekolah" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label for="no_telp" class="form-label">No.Telp</label>
                        <input type="tel" name="no_telp" class="form-control">
                      </div>
                      <div class="col-md-12">
                        <label for="foto" class="form-label">Foto</label>
                        <div>
                          <input class="form-control" type="file" name="foto">
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div><!-- End Modal Dialog Scrollable-->

        </div>
      </div>

    </div>
    </div>
  </section>


</main><!-- End #main -->

<?php include '../tema/footer.php'; ?>