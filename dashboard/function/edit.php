<?php
	//Admin Edit 
	if (isset($_GET['admin-edit'])) {
		$id 	=	$_GET['admin-edit'];

		if (isset($_POST['admin-update'])) {
			$username 	=	$_POST['username'];
			$name 		=	$_POST['name'];
			$telp 		=	$_POST['telp'];
			$alamat 	=	$_POST['alamat'];

			$admin 		=	mysqli_query($db, "UPDATE users 
											SET `name` = '$name', `username` = '$username', `telp` = '$telp', 
												`alamat` = '$alamat'
											WHERE id = '$id'");
			if ($admin) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?users=admin'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?users=admin'>";
			}
		}

		$dataadmin 		= 	mysqli_query($db, "SELECT * FROM users WHERE id = $id");
		$row 			= 	mysqli_fetch_array($dataadmin);
	}
?>
<?php
	//Guru Edit 
	if (isset($_GET['guru-edit'])) {
		$id 	=	$_GET['guru-edit'];

		if (isset($_POST['guru-update'])) {
			$noinduk	=	$_POST['noinduk'];
			$username 	=	$_POST['username'];
			$name 		=	$_POST['name'];
			$telp 		=	$_POST['telp'];
			$alamat 	=	$_POST['alamat'];

			$guru 		=	mysqli_query($db, "UPDATE users 
											SET `nomor_induk` = '$noinduk', `name` = '$name', `username` = '$username', `telp` = '$telp', 
												`alamat` = '$alamat'
											WHERE id = '$id'");
			if ($guru) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?users=guru'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?users=guru'>";
			}
		}

		$dataguru 		= 	mysqli_query($db, "SELECT * FROM users WHERE id = $id");
		$row 			= 	mysqli_fetch_array($dataguru);
	}
?>
<?php
	//Siswa Edit 
	if (isset($_GET['siswa-edit'])) {
		$id 	=	$_GET['siswa-edit'];

		if (isset($_POST['siswa-update'])) {
			$noinduk	=	$_POST['noinduk'];
			$username 	=	$_POST['username'];
			$name 		=	$_POST['name'];
			$telp 		=	$_POST['telp'];
			$alamat 	=	$_POST['alamat'];
			$status 	=	$_POST['status'];
			$kelas		=	$_POST['kelas'];

			$siswa 		=	mysqli_query($db, "UPDATE users 
											SET `nomor_induk` = '$noinduk', `name` = '$name', `username` = '$username', `telp` = '$telp', 
												`alamat` = '$alamat', `kelas_id` = '$kelas', `status` = '$status'
											WHERE id = '$id'");
			if ($siswa) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?users=siswa'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?users=siswa'>";
			}
		}

		$datasiswa 		= 	mysqli_query($db, "SELECT * FROM users WHERE id = $id");
		$row 			= 	mysqli_fetch_array($datasiswa);
	}
?>
<?php
	//Siswa Edit 
	if (isset($_GET['profile'])) {
		$id 	=	$_GET['profile'];

		if (isset($_POST['pass-update'])) {
			$password	=	$_POST['password'];

			$users 		=	mysqli_query($db, "UPDATE users 
											SET `password` = '$password'
											WHERE id = '$id'");
			if ($users) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL= index.php'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=index.php'>";
			}
		}

		$datausers 		= 	mysqli_query($db, "SELECT * FROM users WHERE id = $id");
		$row 			= 	mysqli_fetch_array($datausers);
	}
?>
<?php
	//Alat Edit 
	if (isset($_GET['alat-edit'])) {
		$id 	=	$_GET['alat-edit'];

		if (isset($_POST['alat-update'])) {
			$nama		=	$_POST['nama'];
			$jenis 		=	$_POST['jenis'];
			$jumlah 	=	$_POST['jumlah'];
			$rusak 		=	$_POST['rusak'];

			$alat 		=	mysqli_query($db, "UPDATE alat 
											SET `alat_nama` = '$nama', `alat_jenis` = '$jenis', `alat_jumlah` = '$jumlah', `alat_rusak` = '$rusak'
											WHERE alat_id = '$id'");
			if ($alat) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?perangkat=alat'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?perangkat=alat'>";
			}
		}

		$dataalat		= 	mysqli_query($db, "SELECT * FROM alat WHERE alat_id = $id");
		$row 			= 	mysqli_fetch_array($dataalat);
	}
?>
<?php
	//Bahan Edit 
	if (isset($_GET['bahan-edit'])) {
		$id 	=	$_GET['bahan-edit'];

		if (isset($_POST['bahan-update'])) {
			$nama		=	$_POST['nama'];
			$jenis 		=	$_POST['jenis'];
			$jumlah 	=	$_POST['jumlah'];
			$rusak 		=	$_POST['rusak'];

			$bahan 		=	mysqli_query($db, "UPDATE bahan 
											SET `bahan_nama` = '$nama', `bahan_jenis` = '$jenis', `bahan_jumlah` = '$jumlah', `bahan_rusak` = '$rusak'
											WHERE bahan_id = '$id'");
			if ($bahan) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?perangkat=bahan'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?perangkat=bahan'>";
			}
		}

		$databahan		= 	mysqli_query($db, "SELECT * FROM bahan WHERE bahan_id = $id");
		$row 			= 	mysqli_fetch_array($databahan);
	}
?>
<?php
	//Kelas Edit 
	if (isset($_GET['kelas-edit'])) {
		$id 	=	$_GET['kelas-edit'];

		if (isset($_POST['kelas-update'])) {
			$nama		=	$_POST['nama'];

			$kelas 		=	mysqli_query($db, "UPDATE kelas 
											SET `kelas_nama` = '$nama'
											WHERE kelas_id = '$id'");
			if ($kelas) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?akademik=kelas'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?akademik=kelas'>";
			}
		}

		$datakelas		= 	mysqli_query($db, "SELECT * FROM kelas WHERE kelas_id = $id");
		$row 			= 	mysqli_fetch_array($datakelas);
	}
?>
<?php
	//Semester Edit 
	if (isset($_GET['semester-edit'])) {
		$id 	=	$_GET['semester-edit'];

		if (isset($_POST['semester-update'])) {
			$nama		=	$_POST['nama'];

			$semester 		=	mysqli_query($db, "UPDATE semester 
											SET `semester_nama` = '$nama'
											WHERE semester_id = '$id'");
			if ($semester) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?akademik=semester'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?akademik=semester'>";
			}
		}

		$datasemester	= 	mysqli_query($db, "SELECT * FROM semester WHERE semester_id = $id");
		$row 			= 	mysqli_fetch_array($datasemester);
	}
?>
<?php
	//Tahun Edit 
	if (isset($_GET['tahun-edit'])) {
		$id 	=	$_GET['tahun-edit'];

		if (isset($_POST['tahun-update'])) {
			$nama		=	$_POST['nama'];

			$tahun 		=	mysqli_query($db, "UPDATE tahun 
											SET `tahun_nama` = '$nama'
											WHERE tahun_id = '$id'");
			if ($tahun) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?akademik=tahun'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?akademik=tahun'>";
			}
		}

		$datatahun		= 	mysqli_query($db, "SELECT * FROM tahun WHERE tahun_id = $id");
		$row 			= 	mysqli_fetch_array($datatahun);
	}
?>
<?php
	//Jenis Edit 
	if (isset($_GET['jenis-edit'])) {
		$id 	=	$_GET['jenis-edit'];

		if (isset($_POST['jenis-update'])) {
			$nama		=	$_POST['nama'];

			$jenis 		=	mysqli_query($db, "UPDATE jenisnilai 
											SET `jenis_nama` = '$nama'
											WHERE jenis_id = '$id'");
			if ($jenis) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?akademik=jenis'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?akademik=jenis'>";
			}
		}

		$datajenis		= 	mysqli_query($db, "SELECT * FROM jenisnilai WHERE jenis_id = $id");
		$row 			= 	mysqli_fetch_array($datajenis);
	}
?>
<?php
	//Jadwal Edit 
	if (isset($_GET['jadwal-edit'])) {
		$id 	=	$_GET['jadwal-edit'];

		if (isset($_POST['jadwal-update'])) {
			$jam 		=	$_POST['jam'];
			$tanggal 	=	$_POST['tanggal'];
			$kelas 		= 	$_POST['kelas'];

			$jadwal 		=	mysqli_query($db, "UPDATE jadwal 
											SET `jam_id` = '$jam', `jadwal_tanggal` = '$tanggal', `kelas_id` = '$kelas'
											WHERE jadwal_id = '$id'");
			if ($jadwal) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?jadwal=laboratorium'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?jadwal=laboratorium'>";
			}
		}

		$datajadwal		= 	mysqli_query($db, "SELECT * FROM jadwal WHERE jadwal_id = $id");
		$row 			= 	mysqli_fetch_array($datajadwal);
	}
?>
<?php
	//Jam Edit 
	if (isset($_GET['jam-edit'])) {
		$id 	=	$_GET['jam-edit'];

		if (isset($_POST['jam-update'])) {
			$nama 		=	$_POST['nama'];

			$jam 		=	mysqli_query($db, "UPDATE jam 
											SET `jam_nama` = '$nama'
											WHERE jam_id = '$id'");
			if ($jam) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?jadwal=jam'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?jadwal=jam'>";
			}
		}

		$datajam		= 	mysqli_query($db, "SELECT * FROM jam WHERE jam_id = $id");
		$row 			= 	mysqli_fetch_array($datajam);
	}
?>
<?php
	//Jenis Edit 
	if (isset($_GET['jenisperangkat-edit'])) {
		$id 	=	$_GET['jenisperangkat-edit'];

		if (isset($_POST['jenisperangkat-update'])) {
			$nama		=	$_POST['nama'];
			$type 		=	$_POST['type'];

			$jenis 		=	mysqli_query($db, "UPDATE jenisperangkat 
											SET `jenisperangkat_nama` = '$nama'
											WHERE jenisperangkat_id = '$id'");
			if ($jenis) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?perangkat=jenis'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?perangkat=jenis'>";
			}
		}

		$datajenis		= 	mysqli_query($db, "SELECT * FROM jenisperangkat WHERE jenisperangkat_id = $id");
		$row 			= 	mysqli_fetch_array($datajenis);
	}
?>
<?php
	//Afektif Edit 
	if (isset($_GET['afektif-edit'])) {
		$id 	=	$_GET['afektif-edit'];

		if (isset($_POST['afektif-update'])) {
			$poin		=	$_POST['poin'];

			$afektif 		=	mysqli_query($db, "UPDATE nilai 
											SET `nilai_poin` = '$poin'
											WHERE nilai_id = '$id'");
			if ($afektif) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?nilai=afektif'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?nilai=afektif'>";
			}
		}

		$datanilai		= 	mysqli_query($db, "SELECT * FROM nilai WHERE nilai_id = $id");
		$row 			= 	mysqli_fetch_array($datanilai);
	}
?>
<?php
	//Kognitif Edit 
	if (isset($_GET['kognitif-edit'])) {
		$id 	=	$_GET['kognitif-edit'];

		if (isset($_POST['kognitif-update'])) {
			$poin		=	$_POST['poin'];

			$kognitif 		=	mysqli_query($db, "UPDATE nilai 
											SET `nilai_poin` = '$poin'
											WHERE nilai_id = '$id'");
			if ($kognitif) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?nilai=kognitif'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?nilai=kognitif'>";
			}
		}

		$datanilai		= 	mysqli_query($db, "SELECT * FROM nilai WHERE nilai_id = $id");
		$row 			= 	mysqli_fetch_array($datanilai);
	}
?>
<?php
	//Psikomotor Edit 
	if (isset($_GET['psikomotor-edit'])) {
		$id 	=	$_GET['psikomotor-edit'];

		if (isset($_POST['psikomotor-update'])) {
			$poin		=	$_POST['poin'];

			$psikomotor 		=	mysqli_query($db, "UPDATE nilai 
											SET `nilai_poin` = '$poin'
											WHERE nilai_id = '$id'");
			if ($psikomotor) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?nilai=psikomotor'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?nilai=psikomotor'>";
			}
		}

		$datanilai		= 	mysqli_query($db, "SELECT * FROM nilai WHERE nilai_id = $id");
		$row 			= 	mysqli_fetch_array($datanilai);
	}
?>