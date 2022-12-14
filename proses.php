<?php 
	require('koneksi.php');

	if (isset($_POST['tambah_penerimaan'])) {
		$temp = "KAS";
		$jPenerimaan = "Penerimaan Kas";
		$tgl = $_POST['tanggal'];
		$nomorAkun = $_POST['nomor'];
		$name = $_POST['akun_user'];
		$saldo = $_POST['saldo'];
		$jenis = $_POST['jenis_debt'];

		
		$sql = mysqli_query($koneksi, "INSERT INTO jurnal_kas(tgl_penerimaan, no_akun, nama_akun, saldo, jenis) 
			   VALUES ('$tgl','$nomorAkun','$name','$saldo','$jenis')");

		if ($jenis == "Debit") {
			
        	$sql_umum = mysqli_query($koneksi,"INSERT INTO jurnalumum(tgl_pembelian, jurnal, akun_debit, total_debit, akun_kredit, total_kredit) 
        				VALUES ('$tgl','$jPenerimaan','$name','$saldo','$temp','$saldo')");
        	
        }elseif($jenis == "Kredit"){

        	$sql_jurnal = mysqli_query($koneksi, "INSERT INTO jurnalumum(tgl_pembelian, jurnal, akun_debit, total_debit, akun_kredit, total_kredit)
        	 				  VALUES ('$tgl','$jPenerimaan','$temp','$saldo','$name','$saldo')");
   
        }

        header("location: jurnalpenerimaan.php");
	}

	elseif (isset($_POST['tambah_pengeluaran'])) {
		$temp = "KAS";
		$jPengeluaran = "Pengeluaran Kas";
		$tgl = $_POST['tanggal'];
		$nomorAkun = $_POST['nomor'];
		$name = $_POST['akun_user'];
		$saldo = $_POST['saldo'];
		$jenis = $_POST['jenis_debt'];

		
		$sql = mysqli_query($koneksi, "INSERT INTO jurnal_pengeluaran_kas(tgl_pengeluaran, no_akun, nama_akun, saldo, jenis) 
			   VALUES ('$tgl','$nomorAkun','$name','$saldo','$jenis')");

		if ($jenis == "Debit") {
			
        	$sql_umum = mysqli_query($koneksi,"INSERT INTO jurnalumum(tgl_pembelian, jurnal, akun_debit, total_debit, akun_kredit, total_kredit) 
        				VALUES ('$tgl','$jPengeluaran','$name','$saldo','$temp','$saldo')");
        	
        }elseif($jenis == "Kredit"){

        	$sql_jurnal = mysqli_query($koneksi, "INSERT INTO jurnalumum(tgl_pembelian, jurnal, akun_debit, total_debit, akun_kredit, total_kredit)
        	 				  VALUES ('$tgl','$jPengeluaran','$temp','$saldo','$name','$saldo')");
   
        }

        header("location: jurnalpengeluaran.php");
	}
 ?>