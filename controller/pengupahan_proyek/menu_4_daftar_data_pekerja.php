<?php
// Memulai fungsi tombol Daftar Master Pekerja
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// Fungsi menu Daftar Master Pekerja
if(isset($_POST['menu_4_daftar_data_pekerja']))
{
echo"<title>DAFTAR DATA PEKERJA</title>";
$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];
include ('./view/page/menu_4_daftar_data_pekerja/form_input_cetak_daftar_data_pekerja.php');
include ('./view/page/menu_4_daftar_data_pekerja/tabel_daftar_data_pekerja.php');
}
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['hapus_daftar_master_pekerja']))
{
	echo"<title>DAFTAR DATA PEKERJA</title>";
	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];
	
	$tabel_nik = $_POST['tabel_nik'];
	$tabel_nama = $_POST['tabel_nama'];
	$tabel_jabatan = $_POST['tabel_jabatan'];
	$tabel_alamat = $_POST['tabel_alamat'];
	$tabel_no_ktp = $_POST['tabel_no_ktp'];
	$tabel_tgl_lahir = $_POST['tabel_tgl_lahir'];
	$tabel_no_ponsel_telp = $_POST['tabel_no_ponsel_telp'];
	$tabel_gender = $_POST['tabel_gender'];
	$tabel_email = $_POST['tabel_email'];
	$tabel_agama = $_POST['tabel_agama'];
	$tabel_upah_harian = $_POST['tabel_upah_harian'];
	$tabel_jam_kerja = $_POST['tabel_jam_kerja'];
	$tabel_uang_lembur_jam = $_POST['tabel_uang_lembur_jam'];
	$tabel_uang_transport = $_POST['tabel_uang_transport'];
	$tabel_uang_makan = $_POST['tabel_uang_makan'];

		$conn=mysql_connect("localhost","root","") or die("gagal");
		if($conn) {
		mysql_select_db("db_mau_pengupahan_proyek",$conn);

		$sqlstr = "delete FROM pekerja WHERE nik = '$tabel_nik' 
		AND nama = '$tabel_nama'
		AND jabatan = '$tabel_jabatan'
		AND no_ponsel_telp = '$tabel_no_ponsel_telp'
		AND jam_kerja = '$tabel_jam_kerja'
		AND upah_harian = '$tabel_upah_harian'
		AND uang_lembur_jam = '$tabel_uang_lembur_jam'
		AND uang_transport = '$tabel_uang_transport'
		AND uang_makan = '$tabel_uang_makan'
		";
		$hasil=mysql_query($sqlstr,$conn);

		mysql_close($conn);
		}
		else
		{
			echo "Server tak terhubung";
		}
include ('./view/page/menu_4_daftar_data_pekerja/form_input_cetak_daftar_data_pekerja.php');
include ('./view/page/menu_4_daftar_data_pekerja/tabel_daftar_data_pekerja.php');
}
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['update_daftar_master_pekerja']))
{
	echo"<title>DAFTAR DATA PEKERJA</title>";
	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];
	
	$tabel_nik = $_POST['tabel_nik'];
	$tabel_nama = $_POST['tabel_nama'];
	$tabel_jabatan = $_POST['tabel_jabatan'];
	$tabel_alamat = $_POST['tabel_alamat'];
	$tabel_no_ktp = $_POST['tabel_no_ktp'];
	$tabel_tgl_lahir = $_POST['tabel_tgl_lahir'];
	$tabel_no_ponsel_telp = $_POST['tabel_no_ponsel_telp'];
	$tabel_gender = $_POST['tabel_gender'];
	$tabel_email = $_POST['tabel_email'];
	$tabel_agama = $_POST['tabel_agama'];
	$tabel_upah_harian = $_POST['tabel_upah_harian'];
	$tabel_jam_kerja = $_POST['tabel_jam_kerja'];
	$tabel_uang_lembur_jam = $_POST['tabel_uang_lembur_jam'];
	$tabel_uang_transport = $_POST['tabel_uang_transport'];
	$tabel_uang_makan = $_POST['tabel_uang_makan'];
	include ('./view/page/menu_4_daftar_data_pekerja/update_form_data_upah_pekerja.php');
	
}
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['simpan_update_data_master_pekerja']))
{
	echo"<title>DAFTAR DATA PEKERJA</title>";
	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];

			$update_nik = $_POST['update_nik'];
			$update_nama = $_POST['update_nama'];
			$update_jabatan = $_POST['update_jabatan'];
			$update_alamat = $_POST['update_alamat'];
			$update_no_ktp = $_POST['update_no_ktp'];
			$update_tgl_lahir = $_POST['update_tgl_lahir'];
			$update_no_ponsel_telp = $_POST['update_no_ponsel_telp'];
			$update_gender = $_POST['update_gender'];
			$update_email = $_POST['update_email'];
			$update_agama = $_POST['update_agama'];
			$update_upah_harian = $_POST['update_upah_harian'];
			$update_jam_kerja = $_POST['update_jam_kerja'];
			$update_uang_lembur_jam = $_POST['update_uang_lembur_jam'];
			$update_uang_transport = $_POST['update_uang_transport'];
			$update_uang_makan = $_POST['update_uang_makan'];

		$conn=mysql_connect("localhost","root","") or die("gagal");
		if($conn) {
		mysql_select_db("db_mau_pengupahan_proyek",$conn);

		$sqlstr = "
		UPDATE pekerja
		SET 
		pekerja.nik ='$update_nik',
		pekerja.nama ='$update_nama',
		pekerja.jabatan ='$update_jabatan',
		pekerja.alamat ='$update_alamat',
		pekerja.no_ktp ='$update_no_ktp',
		pekerja.tgl_lahir ='$update_tgl_lahir',
		pekerja.no_ponsel_telp ='$update_no_ponsel_telp',
		pekerja.gender ='$update_gender',
		pekerja.email ='$update_email',
		pekerja.agama ='$update_agama',
		pekerja.upah_harian ='$update_upah_harian',
		pekerja.jam_kerja ='$update_jam_kerja',
		pekerja.uang_lembur_jam ='$update_uang_lembur_jam',
		pekerja.uang_transport ='$update_uang_transport',
		pekerja.uang_makan  ='$update_uang_makan'
		WHERE 
		pekerja.nik ='$update_nik'
		";
		$hasil=mysql_query($sqlstr,$conn);
		echo "<script>
				window.alert('Data berhasil update !');
			 </script>";
		mysql_close($conn);
		}
		else
		{
			echo "Server tak terhubung";
		}
		include ('./view/page/menu_4_daftar_data_pekerja/form_input_cetak_daftar_data_pekerja.php');
        include ('./view/page/menu_4_daftar_data_pekerja/tabel_daftar_data_pekerja.php');
}
//
// Fungsi cetak data daftar pekerja
if(isset($_POST['cetak_data_daftar_data_pekerja']))
{
echo"<title>DAFTAR DATA PEKERJA</title>";
$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];
$nik = $_POST['nik'];
$id_proyek = $_POST['id_proyek'];
include ('./view/page/menu_4_daftar_data_pekerja/cetak_data_pekerja.php');
}