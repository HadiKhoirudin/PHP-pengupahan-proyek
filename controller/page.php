<?php
if (isset($_SESSION['level'])) {
	// jika level admin maka tampilkan akses admin
    if ($_SESSION['level'] == "Admin") {
		$is_admin = ' ';
    }
	// jika level admin maka tampilkan akses user
    elseif ($_SESSION['level'] == "User") {
        $is_admin = 'hidden="hidden"';
    }
}
include('./lib/timer.php');
$banner ='';
?>
<div id="utama" class="bg_image">
	
<div id="menu_dropdown" class="dropmenu">
		<form method="POST">
			<input type="Submit" name="menu_1_home" value="Home" class="tombol_menu"/>
			<input type="Submit" name="menu_2_input_data_proyek" value="Input Data Proyek" class="tombol_menu" <?=$is_admin;?>/>
			<input type="Submit" name="menu_3_input_data_upah_pekerja" value="Input Data Upah Pekerja" class="tombol_menu" <?=$is_admin;?>/>
			<input type="Submit" name="menu_4_daftar_data_pekerja" value="Daftar Data Pekerja" class="tombol_menu" <?=$is_admin;?>/>
			<input type="Submit" name="menu_5_input_absensi_dan_upah_pekerja_proyek" value="Input Absensi Pekerja Harian" class="tombol_menu"/>
			<input type="Submit" name="menu_6_laporan_absensi_dan_upah_pekerja_proyek" value="Laporan Absensi Dan Upah Pekerja Proyek" class="tombol_menu"/>
			<input type="Submit" name="menu_7_laporan_pengupahan_proyek" value="Laporan Pengupahan Proyek" class="tombol_menu"/>
			<input type="Submit" name="menu_8_logout" value="Log-Out" class="tombol_menu"/>
			<font align="center" name="jam_digital" class="jam_digital" id="clock">.. : .. : ..</font>
        </form>
</div>

<div id="isi_halaman" class="konten_halaman">
<?php
require('./controller/menu.php');
?>
</div>
<div <?php echo $banner;?>>
<br>
INFORMASI LOGIN<br>
<table>
<tr>
<td> Nama 		</td>
<td>: <?php echo $_SESSION['nama'];?></td>
</tr>
<tr>
<td> 		</td>
<td> &nbsp; <?php echo $_SESSION['nik'];?></td>
</tr>
<tr>
<td> Alamat		</td>
<td>: <?php echo $_SESSION['alamat'];?></td>
</tr>
<tr>
<td> Akses Login </td>
<td>: <?php echo $_SESSION['tgl_login'];?></td>
</tr>
</table>
</div>
<div align="center" <?php echo $banner;?>>
<br>
<br>
<br>
<br>
 <img src="./assets/img/mau.jpg" alt="PT. MULTIBRATA ANUGERAH UTAMA"> 
</div>