<?php
// Memulai fungsi tombol menu
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// Fungsi menu home
if(isset($_POST['menu_6_laporan_absensi_dan_upah_pekerja_proyek']))
{
	echo"<title>LAPORAN ABSENSI DAN UPAH PEKERJA PROYEK</title>";
	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];
include('./view/page/menu_6_laporan_absensi_dan_upah_pekerja_proyek/form_input_cetak_laporan_absensi_dan_upah_pekerja_proyek.php');
include('./view/page/menu_6_laporan_absensi_dan_upah_pekerja_proyek/tabel_laporan_absensi_dan_upah_pekerja_proyek.php');
}
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['cetak_data_absen_pekerja']))
{
	echo"<title>LAPORAN ABSENSI DAN UPAH PEKERJA PROYEK</title>";
	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];
		echo"
		<br />
		<h3 align='center'>LAPORAN ABSENSI DAN UPAH</h3>
		<hr>
		";
$nik = $_POST['nik'];
$id_proyek = $_POST['id_proyek'];
//print_r($_POST);

include('./view/page/menu_6_laporan_absensi_dan_upah_pekerja_proyek/cetak_laporan_absensi_dan_upah_pekerja_proyek.php');
}
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
