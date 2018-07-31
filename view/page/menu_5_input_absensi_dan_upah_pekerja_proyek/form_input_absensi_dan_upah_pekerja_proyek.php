<br />
<h3 align="center">INPUT ABSENSI PEKERJA HARIAN</h3>
<hr>
<div id="content">
<form method="POST" >
<table >
 <tr>
 <?php
$result = mysql_query("select * from pekerja");
$jsArray = "var ID_db = new Array();\n";
echo 
'
<tr><td># NIK  <i>(Langsung pilih) </i>  <td><select name="nik" required="required" onchange="changeValue(this.value)"/>
<option></option>
';
while ($row = mysql_fetch_array($result))
{
    echo
	'
	<option value="' . $row['nik'] . '">' . $row['nik'] . '</option>
	';
	switch($row['jam_kerja'])
	{

	case 'SHIFT 1': $jam_masuk='08:00';$jam_keluar='16:00'; break;
	case 'SHIFT 2': $jam_masuk='16:00';$jam_keluar='22:00'; break;

	}
	$jsArray .= "ID_db['" . $row['nik'] . "'] = 
	{

		jsA_val_jam_masuk:'" . addslashes($jam_masuk) . "',
		jsA_jam_masuk:'" . addslashes($jam_masuk) . "',
		jsA_jam_keluar:'" . addslashes($jam_keluar) . "',
		jsA_val_nama:'" . addslashes($row['nama']) . "',
		jsA_val_jabatan:'" . addslashes($row['jabatan']) . "',
		jsA_nama:'" . addslashes($row['nama']) . "',
		jsA_jabatan:'" . addslashes($row['jabatan']) . "',
		jsA_upah_harian:'" . addslashes($row['upah_harian']) . "',
		jsA_lembur:'" . addslashes($row['uang_lembur_jam']) . "',
		jsA_transport:'" . addslashes($row['uang_transport']) . "',
		jsA_makan:'" . addslashes($row['uang_makan']) . "',
		jsA_tanggal_masuk:'" . addslashes($data_tanggal) . "',
		jsA_id_proyek:'" . addslashes($row['id_proyek']) . "'
		
	};\n";
}
    echo '</select></td>';
?>
 <td></td><td></td>
 <td># JAM MASUK </td><td><input type="text" name="val_jam_masuk" id="val_jam_masuk" class="texbox" size="65px" placeholder="info Jam masuk" required="required" disabled="disabled"/></td>
 </tr>
 
 <tr>
 <td># NAMA </td><td><input type="text" name="val_nama" id="val_nama" class="texbox" size="65px" placeholder="info Nama Pekerja" disabled="disabled"/></td>
 <td></td><td></td>
 <td>* JAM KELUAR </td><td><input type="text" maxlength="5" name="jam_keluar" id="jam_keluar" class="texbox" size="65px" placeholder="Masukkan Info Jam Keluar" required="required"/></td>
 </tr>
 
 <tr>
 
  <td># JABATAN </td><td><input type="text" name="val_jabatan" id="val_jabatan" class="texbox" size="65px" placeholder="info Jabatan" disabled="disabled"/></td>
 <td></td><td></td>
 <td>* TANGGAL </td><td><input type="text" name="tanggal_kerja" maxlength="10" id="tanggal_absen" class="texbox" size="65px" placeholder="Masukan Tanggal Masuk Kerja"  required="required"/></td>
 </tr>

 <tr> 
 <td></td><td></td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
 </tr>
 
</table>

 <!-- ini hidden value untuk penghitungan upah -->
 <input type="text" name="jam_masuk" id="jam_masuk" class="texbox" hidden="hidden"/>
 <!-- Awal dari hidden value -->
 
 <input type="text" name="nama" id="nama" class="texbox" hidden="hidden"/>
 <input type="text" name="jabatan" id="jabatan" class="texbox" hidden="hidden"/>
 <input type="text" name="keluar" id="keluar" class="texbox" hidden="hidden"/>
 <input type="text" name="upah" id="upah" class="texbox" hidden="hidden"/>
 <input type="text" name="lembur" id="lembur" class="texbox" hidden="hidden"/>
 <input type="text" name="transport" id="transport" class="texbox" hidden="hidden"/>
 <input type="text" name="makan" id="makan" class="texbox" hidden="hidden"/>
 <input type="text" name="id_proyek" id="id_proyek" class="texbox" hidden="hidden"/>
 
 <!-- akhir dari hidden value -->
<center><input type="submit" name="simpan_input_absensi_harian" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIMPAN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="tombol_menu"/>&nbsp;<input type="reset" name="reset" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BATAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="tombol_menu"/></center>
  <i><b>
  **Keterangan : <br />
  "*" Artinya Wajib Di Isi! <br />
  "#" Artinya Telah Ditentukan Secara Automatis Oleh Sistem.
  </b></i>
<hr>
</form>
<script type="text/javascript">
<?= $jsArray; ?>
function changeValue(id){
document.getElementById('val_jam_masuk').value = ID_db[id].jsA_val_jam_masuk;
document.getElementById('jam_masuk').value = ID_db[id].jsA_jam_masuk;
document.getElementById('keluar').value = ID_db[id].jsA_jam_keluar;
document.getElementById('jam_keluar').value = ID_db[id].jsA_jam_keluar;
document.getElementById('val_nama').value = ID_db[id].jsA_val_nama;
document.getElementById('nama').value = ID_db[id].jsA_nama;
document.getElementById('val_jabatan').value = ID_db[id].jsA_val_jabatan;
document.getElementById('jabatan').value = ID_db[id].jsA_jabatan;
document.getElementById('tanggal_absen').value = ID_db[id].jsA_tanggal_masuk;
document.getElementById('upah').value = ID_db[id].jsA_upah_harian;
document.getElementById('lembur').value = ID_db[id].jsA_lembur;
document.getElementById('transport').value = ID_db[id].jsA_transport;
document.getElementById('makan').value = ID_db[id].jsA_makan;
document.getElementById('id_proyek').value = ID_db[id].jsA_id_proyek;
};
$(document).ready(function() {
$( "#tanggal_absen" ).datepicker({
	dateFormat: 'yy-mm-dd',
	changeMonth: true,
	changeYear: true,
	minDate: '<?php 
	$tanggal_min = date('d');
	$pengurangan_tanggal = ($tanggal_min - 1);
	$batas_tanggal_awal = date('Y-m-'.$pengurangan_tanggal);
	echo ''.$batas_tanggal_awal;
	?>',
	maxDate: '<?$data_tanggal;?>'
	});
});
</script>
</div>