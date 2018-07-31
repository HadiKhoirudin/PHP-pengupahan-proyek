<title>LAPORAN ABSENSI DAN UPAH PEKERJA PROYEK</title>
		<br />
		<h3 align='center'>LAPORAN ABSENSI DAN UPAH PEKERJA PROYEK</h3>
		<hr>
<div id="content">
<form method="POST">
<table align="center">
<?php
$result = mysql_query("SELECT
absensi.id_proyek,
proyek.id_proyek,
proyek.nama_proyek,
proyek.alamat_proyek,
proyek.divisi,
absensi.id_absen,
absensi.tanggal_kerja,
absensi.nik,
absensi.nama,
absensi.jabatan,
absensi.jam_masuk,
absensi.jam_keluar,
absensi.upah_harian,
absensi.uang_lembur_jam,
absensi.uang_transport,
absensi.uang_makan,
absensi.total
FROM
absensi ,
proyek
WHERE absensi.id_proyek = proyek.id_proyek 
GROUP BY
absensi.nik
");
$jsArray = "var ID_db = new Array();\n";
echo 
'
<center> CETAK LAPORAN ABSENSI DAN UPAH PEKERJA PROYEK BERDASARKAN NIK </center>
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
<input type="text" name="id_proyek" id="id_proyek" class="texbox" placeholder="Nama Pekerja" size="20px" hidden="hidden"/>
&nbsp;<input type="text" name="nama" id="nama" class="texbox" placeholder="Nama Pekerja" size="20px" disabled="disabled"/>
&nbsp;<input type="text" name="jabatan" id="jabatan" class="texbox" placeholder="Jabatan" size="26px" disabled="disabled"/>
&nbsp;<input align="left" type="submit"  name="cetak_data_absen_pekerja" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cetak&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="tombol_menu"/><hr>
</td>
';
?>

</tr>

<script type="text/javascript">

<?= $jsArray; ?>
function changeValue(id){
document.getElementById('id_proyek').value = ID_db[id].jsA_id_proyek;
document.getElementById('nama').value = ID_db[id].jsA_nama;
document.getElementById('jabatan').value = ID_db[id].jsA_jabatan;
};
</script>
</div>