<?php
// Memulai fungsi tombol menu
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// Fungsi menu home
if(isset($_POST['menu_7_laporan_pengupahan_proyek']))
{
	echo"<title>LAPORAN PENGUPAHAN PROYEK</title>";
	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];

include('./view/page/menu_7_laporan_pengupahan_proyek/form_input_cetak_laporan_pengupahan_proyek.php');
include('./view/page/menu_7_laporan_pengupahan_proyek/tabel_laporan_pengupahan_proyek.php');

}

//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['cetak_laporan_pengupahan_berdasarkan_id_proyek']))
{
	echo"<title>LAPORAN PENGUPAHAN PROYEK</title>";
	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];
$nik = $_POST['nik'];
$id_proyek = $_POST['id_proyek'];

include('./view/page/menu_7_laporan_pengupahan_proyek/cetak_laporan_pengupahan_proyek.php');

}