<?php
// Memulai fungsi tombol menu
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// Fungsi menu Input Data Proyek
if(isset($_POST['menu_2_input_data_proyek']))
{
	echo"<title>INPUT DATA PROYEK</title>";
	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];
	include ('./view/page/menu_2_input_data_proyek/form_input_data_proyek.php');
	include ('./view/page/menu_2_input_data_proyek/tabel_input_data_proyek.php');
}
//

// Memulai fungsi tombol menu
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// Fungsi menu Input Data Proyek
if(isset($_POST['simpan_input_data_proyek']))
{
	echo"<title>INPUT DATA PROYEK</title>";
	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];


// Get all POST
$id_proyek = $_POST['id_proyek'];
$alamat_proyek = $_POST['alamat_proyek'];
$nama_proyek = $_POST['nama_proyek'];
$divisi = $_POST['divisi'];
//

$conn=mysql_connect("localhost","root","") or die("gagal");
if($conn) {
	mysql_select_db("db_mau_pengupahan_proyek",$conn);

$sql1 = "
insert into proyek 
(id_proyek,
 alamat_proyek,
 nama_proyek,
 divisi)
 values
('$id_proyek',
 '$alamat_proyek',
 '$nama_proyek',
 '$divisi')
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

	include ('./view/page/menu_2_input_data_proyek/form_input_data_proyek.php');
	include ('./view/page/menu_2_input_data_proyek/tabel_input_data_proyek.php');
}
//

//////////////////////////////////////////////////////////////////////////////////////////////////////////
// Fungsi Hapus Data Proyek
if(isset($_POST['hapus_input_data_proyek']))
{
	echo"<title>INPUT DATA PROYEK</title>";
	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];
// Get all POST

$id_proyek = $_POST['id_proyek'];

		$conn=mysql_connect("localhost","root","") or die("gagal");
		if($conn) {
		mysql_select_db("db_mau_pengupahan_proyek",$conn);

		$sqlstr = "delete FROM proyek WHERE id_proyek = '$id_proyek'
		";
		$hasil=mysql_query($sqlstr,$conn);

		}
		else
		{
			echo "Server tak terhubung";
		}

	include ('./view/page/menu_2_input_data_proyek/form_input_data_proyek.php');
	include ('./view/page/menu_2_input_data_proyek/tabel_input_data_proyek.php');
}
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
// Fungsi Edit data proyek
if(isset($_POST['edit_input_data_proyek']))
{
	echo"<title>EDIT DATA PROYEK</title>";

// Get all POST
$id_proyek = $_POST['id_proyek'];
$alamat_proyek = $_POST['alamat_proyek'];
$nama_proyek = $_POST['nama_proyek'];
$divisi = $_POST['divisi'];
//

	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];
	include ('./view/page/menu_2_input_data_proyek/update_form_input_data_proyek.php');
	include ('./view/page/menu_2_input_data_proyek/tabel_input_data_proyek.php');
}
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////

//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
// Fungsi Update data proyek
if(isset($_POST['update_input_data_proyek']))
{
	echo"<title>INPUT DATA PROYEK</title>";
	$_SESSION['banner']='hidden="hidden"'; $banner = $_SESSION['banner'];

// Get all POST
$id_proyek = $_POST['id_proyek'];
$alamat_proyek = $_POST['alamat_proyek'];
$nama_proyek = $_POST['nama_proyek'];
$divisi = $_POST['divisi'];
$status = $_POST['status'];

$val_id_proyek = $_POST['val_id_proyek'];

//

		$conn=mysql_connect("localhost","root","") or die("gagal");
		if($conn) {
		mysql_select_db("db_mau_pengupahan_proyek",$conn);

		$sqlstr = "
		UPDATE proyek
		SET
		proyek.id_proyek ='$id_proyek',
		proyek.nama_proyek ='$nama_proyek',
		proyek.alamat_proyek ='$alamat_proyek',
		proyek.divisi ='$divisi',
		proyek.`status` ='$status'
		WHERE proyek.id_proyek ='$val_id_proyek'
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
	include ('./view/page/menu_2_input_data_proyek/form_input_data_proyek.php');
	include ('./view/page/menu_2_input_data_proyek/tabel_input_data_proyek.php');
}
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
