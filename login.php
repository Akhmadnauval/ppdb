<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Pages / Login - NiceAdmin Bootstrap Template</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="admin/assets/img/favicon.png" rel="icon">
	<link href="admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
	<link href="admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
	<link href="admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	
	<link rel="stylesheet" href="admin/assets/css/style.css">

</head>

<body>

	<?php
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == "gagal") {
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

	<section class="section register bg-light min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

					<div class="card mb-3">

						<div class="card-body">

							<div class="pt-4 pb-2">
								<h5 class="card-title text-center pb-0 fs-4 fw-medium">Login Dengan Akun Anda</h5>
								<p class="text-center small">Masukkan Username dan Password Anda.</p>
							</div>

							<form action="cek_login.php" method="post" class="row g-3 needs-validation" novalidate>

								<div class="col-12">
									<label for="username" class="form-label">Username</label>
									<div class="input-group has-validation">
										<input type="text" name="username" class="form-control" required>
										<div class="invalid-feedback">Tolong Isi Username Anda!</div>
									</div>
								</div>

								<div class="col-12">
									<label for="yourPassword" class="form-label">Password</label>
									<input type="password" name="password" class="form-control" required>
									<div class="invalid-feedback">Tololng Isi Password Anda!</div>
								</div>

								<div class="col-12">
									<div class="form-check">
										<p>Belum punya akun</p>
									</div>
								</div>
								<div class="col-12">
									<button class="btn btn-outline-primary w-100" type="submit">Login</button>
								</div>
								<div class="col-12">
									<a href="index.html" class="btn btn-outline-secondary w-100">Kembali</a>
								</div>
								<div class="col-12">
									<p class="small mb-2 text-center link">Login Sebagai <a class="link" href="login-admin.php">Admin</a></p>
								</div>
						

							</form>

						</div>
					</div>

				</div>
			</div>
		</div>

	</section>

	</main><!-- End #main -->

	<!-- Vendor JS Files -->
	<script src="admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
	<script src="admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="admin/assets/vendor/chart.js/chart.umd.js"></script>
	<script src="admin/assets/vendor/echarts/echarts.min.js"></script>
	<script src="admin/assets/vendor/quill/quill.min.js"></script>
	<script src="admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
	<script src="admin/assets/vendor/tinymce/tinymce.min.js"></script>
	<script src="admin/assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="admin/assets/js/main.js"></script>

</body>

</html>