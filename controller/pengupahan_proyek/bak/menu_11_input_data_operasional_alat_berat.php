<?php
// Memulai fungsi tombol menu
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// Fungsi menu menu_master_upah_pekerja
if(isset($_POST['menu_11_input_data_operasional_alat_berat']))
{
	echo"<title>INPUT DATA OPERASIONAL ALAT BERAT</title>";
	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];
	//include ('./view/page/menu_3_input_data_upah_pekerja/form_input_data_upah_pekerja.php');
}
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////

/*






// Memulai fungsi tombol menu
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// Fungsi submit
if(isset($_POST['simpan_input_data_upah_pekerja']))
{
	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $alamat = $_POST['alamat'];
    $no_ktp = $_POST['no_ktp'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $no_ponsel_telp = $_POST['no_ponsel_telp'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $agama = $_POST['agama'];
    $upah_harian = $_POST['upah_harian'];
    $jam_kerja = $_POST['jam_kerja'];
	$uang_lembur_jam = $_POST['uang_lembur_jam'];
	$uang_transport = $_POST['uang_transport'];
	$uang_makan = $_POST['uang_makan'];
	$id_proyek = $_POST['id_proyek'];

$conn=mysql_connect("localhost","root","") or die("gagal");
if($conn) {
	mysql_select_db("db_mau_pengupahan_proyek",$conn);

$sql1 = "
insert into pekerja 
(nik,
 nama,
 jabatan,
 alamat,
 no_ktp,
 tgl_lahir,
 no_ponsel_telp,
 gender,
 email,
 agama,
 upah_harian,
 jam_kerja,
 uang_lembur_jam,
 uang_transport,
 uang_makan,
 id_proyek)
 values
('$nik',
 '$nama',
 '$jabatan',
 '$alamat',
 '$no_ktp',
 '$tgl_lahir',
 '$no_ponsel_telp',
 '$gender',
 '$email',
 '$agama',
 '$upah_harian',
 '$jam_kerja',
 '$uang_lembur_jam',
 '$uang_transport',
 '$uang_makan',
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
	echo"<title>INPUT DATA UPAH PEKERJA</title>";
	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];
	include ('./view/page/menu_3_input_data_upah_pekerja/form_input_data_upah_pekerja.php');
}
*/