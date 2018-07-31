<br />
<h3 align="center">LAPORAN PENGUPAHAN PROYEK</h3>
<hr>
<div id="content">
<form method="POST">
<table align="center">
 <tr>
<?php
$result = mysql_query("SELECT
absensi.id_proyek,
absensi.nik,
proyek.id_proyek,
proyek.nama_proyek,
proyek.alamat_proyek,
proyek.divisi
FROM
absensi ,
proyek
WHERE absensi.id_proyek = proyek.id_proyek
GROUP BY
proyek.id_proyek
");
$jsArray = "var ID_db = new Array();\n";
echo 
'
<center> CETAK LAPORAN PENGUPAHAN PROYEK BERDASARKAN ID PROYEK </center>
<tr><td></td><td><hr><select name="id_proyek" required="required" onchange="changeValue(this.value)">
<option></option>
';
while ($row = mysql_fetch_array($result))
{
    echo
	'
	<option value="' . $row['id_proyek'] . '">' . $row['id_proyek'] . '</option>
	';
	$jsArray .= "ID_db['" . $row['id_proyek'] . "'] = 
	{

		jsA_nama_proyek:'" . addslashes($row['nama_proyek']) . "',
		jsA_divisi:'" . addslashes($row['divisi']) . "',
		jsA_alamat_proyek:'" . addslashes($row['alamat_proyek']) . "',
		jsA_val_nama_proyek:'" . addslashes($row['nama_proyek']) . "',
		jsA_val_divisi:'" . addslashes($row['divisi']) . "',
		jsA_nik:'" . addslashes($row['nik']) . "'
		
	};\n";
}
echo' 
</select>
&nbsp;<input type="text" name="val_nama_proyek" id="val_nama_proyek" class="texbox" placeholder="Nama Proyek" size="20px" disabled="disabled"/>
&nbsp;<input type="text" name="val_divisi" id="val_divisi" class="texbox" placeholder="Divisi" size="26px" disabled="disabled"/>
&nbsp;<input align="left" type="submit" name="cetak_laporan_pengupahan_berdasarkan_id_proyek" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cetak&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="tombol_menu"/><hr>
</td>
';
?>

</tr>

</form>
</table>
<!--
<table align="center">
<form method="POST">
<center> Cetak laporan berdasarkan Tanggal </center>
 <tr>
 <td></td><td><hr><input type="text" name="tanggal_awal" id="tanggal_awal" class="texbox" size="27x" placeholder="Masukan Tanggal Awal Laporan" required="required"/>
 S/D <input type="text" name="tanggal_akhir" id="tanggal_akhir" class="texbox" placeholder="Masukan Tanggal Akhir Laporan" size="27px" required="required"/>
 &nbsp;<input type="submit" align="right" name="cetak_laporan_pengupahan_berdasarkan_tanggal" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cetak&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="tombol_menu"/></center>
 <hr>
 </td>
 </tr>
 </table>


<hr>
</form>
-->
<input type="text" name="nik" id="nik" class="texbox" hidden="hidden"/>
<script type="text/javascript">

<?php
/*
$sql_tanggal_kerja_asc = "
SELECT * FROM `absensi` ORDER BY `tanggal_kerja` LIMIT 1
";
$query_tanggal_kerja_asc = mysql_query($sql_tanggal_kerja_asc);
while ($data_tanggal_kerja_asc = mysql_fetch_array($query_tanggal_kerja_asc))
{
$batas_tanggal_awal = $data_tanggal_kerja_asc['tanggal_kerja'];
}
$sql_tanggal_kerja_desc = "
SELECT * FROM `absensi` ORDER BY `tanggal_kerja` DESC LIMIT 1
";
$query_tanggal_kerja_desc = mysql_query($sql_tanggal_kerja_desc);
while ($data_tanggal_kerja_desc = mysql_fetch_array($query_tanggal_kerja_desc))
{
$batas_tanggal_akhir = $data_tanggal_kerja_desc['tanggal_kerja'];
}
*/?>
<?= $jsArray; ?>
function changeValue(id){
document.getElementById('val_nama_proyek').value = ID_db[id].jsA_val_nama_proyek;
document.getElementById('val_divisi').value = ID_db[id].jsA_val_divisi;
document.getElementById('nik').value = ID_db[id].jsA_nik;
};
</script>
<!--
            $(document).ready(function() {
				$( "#tanggal_awal" ).datepicker({
					dateFormat: 'yy-mm-dd',
					changeMonth: true,
					changeYear: true,
					minDate: '<?//= $batas_tanggal_awal;?>',
					maxDate: '<?//= $batas_tanggal_akhir;?>'
				});
				$( "#tanggal_akhir" ).datepicker({
					dateFormat: 'yy-mm-dd',
					changeMonth: true,
					changeYear: true,
					minDate: '<?//= $batas_tanggal_awal;?>',
					maxDate: '<?//= $batas_tanggal_akhir;?>'
				});
 });
-->
</div>