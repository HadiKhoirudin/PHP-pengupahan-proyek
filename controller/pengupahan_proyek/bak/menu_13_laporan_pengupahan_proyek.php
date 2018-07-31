<?php
// Memulai fungsi tombol menu Input Absensi
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// Fungsi menu Input Absensi
if(isset($_POST['menu_13_laporan_pengupahan_proyek']))
{
	echo"<title>INPUT ABSENSI PEKERJA HARIAN</title>";

	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];
//	include('./view/page/menu_5_input_absensi_dan_upah_pekerja_proyek/form_input_absensi_dan_upah_pekerja_proyek.php');
//	include('./view/page/menu_5_input_absensi_dan_upah_pekerja_proyek/tabel_absensi_dan_upah_pekerja_proyek.php');
}
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
// Fungsi menu Input Absensi
/*

if(isset($_POST['simpan_input_absensi_harian']))
{
	echo"<title>EDIT ABSENSI PEKERJA HARIAN</title>";

	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];

// Get all POST
$keluar = $_POST['keluar'];
$upah = $_POST['upah'];
$lembur = $_POST['lembur'];
$transport = $_POST['transport'];
$makan = $_POST['makan'];
$nik = $_POST['nik'];
$jam_masuk = $_POST['jam_masuk'];
$nama = $_POST['nama'];
$jam_keluar = $_POST['jam_keluar'];
$jabatan = $_POST['jabatan'];
$tanggal_kerja = $_POST['tanggal_kerja'];
$id_proyek = $_POST['id_proyek'];
//

// Fungsi hitung lembur
$awal = date_create($keluar);
$akhir = date_create($jam_keluar);
$diff = date_diff( $akhir, $awal );
$hitung_lembur = $diff->h;

if ($hitung_lembur == '0')
{
$total_lembur ='0';
}
else
{
$total_lembur = $_POST['lembur'] * $hitung_lembur;
}
//

$total_upah = $upah + $total_lembur + $transport + $makan;
// masuk database

$conn=mysql_connect("localhost","root","") or die("gagal");
if($conn) {
	mysql_select_db("db_mau_pengupahan_proyek",$conn);

$sql1 = "
insert into absensi 
(tanggal_kerja,
 nik,
 nama,
 jabatan,
 jam_masuk,
 jam_keluar,
 upah_harian,
 uang_lembur_jam,
 uang_transport,
 uang_makan,
 total,
 id_proyek)
 values
('$tanggal_kerja',
 '$nik',
 '$nama',
 '$jabatan',
 '$jam_masuk',
 '$jam_keluar',
 '$upah',
 '$total_lembur',
 '$transport',
 '$makan',
 '$total_upah',
 '$id_proyek')
 ";

$exc = mysql_query($sql1,$conn);
if($exc)
{ 
		echo "<script>
				window.alert('Data berhasil disimpan !');
			</script>";
}
	} else {
			echo "Server tak terhubung";
			}
	include('./view/page/menu_5_input_absensi_dan_upah_pekerja_proyek/form_input_absensi_dan_upah_pekerja_proyek.php');
	include('./view/page/menu_5_input_absensi_dan_upah_pekerja_proyek/tabel_absensi_dan_upah_pekerja_proyek.php');
}
////////////////////////////////
if(isset($_POST['hapus_daftar_absen_pekerja']))
{
	echo"<title>INPUT ABSENSI HARIAN</title>";

	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];
	
// Get all POST

$id_absen = $_POST['id_absen'];

		$conn=mysql_connect("localhost","root","") or die("gagal");
		if($conn) {
		mysql_select_db("db_mau_pengupahan_proyek",$conn);

		$sqlstr = "delete FROM absensi WHERE id_absen = '$id_absen'
		";
		$hasil=mysql_query($sqlstr,$conn);

		}
		else
		{
			echo "Server tak terhubung";
		}
	include('./view/page/menu_5_input_absensi_dan_upah_pekerja_proyek/form_input_absensi_dan_upah_pekerja_proyek.php');
	include('./view/page/menu_5_input_absensi_dan_upah_pekerja_proyek/tabel_absensi_dan_upah_pekerja_proyek.php');
}
*/