<br />
<title>DAFTAR DATA PEKERJA</title>
		<h3 align='center'>DAFTAR DATA PEKERJA</h3>
		<hr>
<div id="content">
<form method="POST">
<table align="center">
<?php
$result = mysql_query("SELECT
pekerja.nik,
pekerja.nama,
pekerja.jabatan,
pekerja.alamat,
pekerja.no_ktp,
pekerja.tgl_lahir,
pekerja.no_ponsel_telp,
pekerja.gender,
pekerja.email,
pekerja.agama,
pekerja.upah_harian,
pekerja.jam_kerja,
pekerja.uang_lembur_jam,
pekerja.uang_transport,
pekerja.uang_makan,
pekerja.id_proyek
FROM
pekerja
GROUP BY
pekerja.nik
");
$jsArray = "var ID_db = new Array();\n";
echo 
'
<center> CETAK DATA PEKERJA BERDASARKAN NIK </center>
<tr><td></td><td><hr><select name="nik" required="required" onchange="changeValue(this.value)">
<option></option>
';
while ($row = mysql_fetch_array($result))
{
    echo
	'
	<option value="' . $row['nik'] . '">' . $row['nik'] . '</option>
	';
	$jsArray .= "ID_db['" . $row['nik'] . "'] = 
	{
		jsA_id_proyek:'" . addslashes($row['id_proyek']) . "',
		jsA_nama:'" . addslashes($row['nama']) . "',
		jsA_jabatan:'" . addslashes($row['jabatan']) . "'
		
	};\n";
}
echo' 
</select>
<input type="text" name="id_proyek" id="id_proyek" class="texbox" size="20px" hidden="hidden"/>
&nbsp;<input type="text" name="nama" id="nama" class="texbox" placeholder="Nama Pekerja" size="20px" disabled="disabled"/>
&nbsp;<input type="text" name="jabatan" id="jabatan" class="texbox" placeholder="Jabatan" size="26px" disabled="disabled"/>
&nbsp;<input align="left" type="submit"  name="cetak_data_daftar_data_pekerja" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cetak&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="tombol_menu"/><hr>
</td>
';
?>

</tr>
</table>
</form>
<script type="text/javascript">

<?= $jsArray; ?>
function changeValue(id){
document.getElementById('id_proyek').value = ID_db[id].jsA_id_proyek;
document.getElementById('nama').value = ID_db[id].jsA_nama;
document.getElementById('jabatan').value = ID_db[id].jsA_jabatan;
};
</script>
</div>