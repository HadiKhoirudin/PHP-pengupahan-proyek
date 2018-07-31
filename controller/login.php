<?php
if(isset($_POST['login']))
{
echo"<title>Selamat Datang</title>";
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$tgl_login = $_POST['tgl_login'];
// query untuk mendapatkan record dari username
$query = "SELECT
login.id,
login.username,
login.`password`,
login.`level`,
karyawan.id_karyawan,
karyawan.id_login,
karyawan.nama,
karyawan.alamat,
karyawan.nik
FROM
login ,
karyawan
WHERE login.id=karyawan.id_login
AND username = '$username'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);

// cek kesesuaian password
if ($password == $data['password']) {
    // menyimpan username dan level ke dalam session
	$_SESSION['id']		  = $data['id'];
	$_SESSION['id_karyawan']		  = $data['id_karyawan'];
	$_SESSION['id_login']		  = $data['id_login'];
    $_SESSION['username'] = $data['username'];
	$_SESSION['password'] = $data['password'];
	$_SESSION['level']	  = $data['level'];
	$_SESSION['nama']	  = $data['nama'];
	$_SESSION['nik']	  = $data['nik'];
	$_SESSION['alamat']	  = $data['alamat'];
	$_SESSION['tgl_login']= $tgl_login;
    //Penggunaan Meta Header HTTP
	
	$tampil = $_SESSION['level'];
		
		header( "refresh:0;url=./" );
		
    exit;
} else {
    echo "<script>
		window.alert('Username & Password Anda Salah !');
		window.location = './';
		</script>";
}
}
else
{
	$login_value = ' ';
}
?>
<!DOCTYPE html>
<html><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width">

	<title>PENGUPAHAN PROYEK PT MAU</title>

	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/jquery-ui.js"></script>
	<link href="assets/css/main_menu.css" rel="stylesheet" type="text/css" > 
	<link href="assets/css/form_login.css" rel="stylesheet" type="text/css">
</head>
	<div id="logo">
		<div class="header">PENGUPAHAN PROYEK</div>
		<div class="subheader"></div>
	</div>
	<div id="wrapper" class="type-0">
		<div id="content">
			<h3>Silahkan Login</h3>
			<form name="frm_sample" id="frm_sample" method="post">
				<input name="form_submit" value="1" readonly="readonly" required="required" type="hidden">
				<input name="css_type" value="0" readonly="readonly" type="hidden">
				<p><label for="username">Username:</label> <input name="username" id="username" placeholder="Masukan username" maxlength="25" size="27" required="required" type="text"></p>
				<p><label for="password">Password:&nbsp;</label> <input name="password" id="password" placeholder="Masukan password" maxlength="8" size="27" required="required" type="password"></p><br />
				<input type="text" hidden="hidden" name="tgl_login" value="<?php echo date('Y-m-d | H:i:s');?>"/>
								<p class="submit"><button type="submit" name="login" id="submit">login</button></p>
			</form>
		</div>
		<div id="footer">
		<p></p><h3>PT. MULTIBRATA ANUGERAH UTAMA</h3><p></p>
		</div>
	</div>


</body></html>