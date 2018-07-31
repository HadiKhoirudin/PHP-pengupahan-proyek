<br />
<h3 align="center">INPUT DATA UPAH PEKERJA</h3>
<hr>
<br />
<div id="content">
<form method="POST" >
<table >
 <?php
$result = mysql_query("select * from proyek where proyek.status='0'");
$jsArray = "var ID_db = new Array();\n";
echo 
'
<tr><td># ID PROYEK   </td><td><select name="id_proyek" required="required" onchange="changeValue(this.value)">
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
		jsA_val_divisi:'" . addslashes($row['divisi']) . "'
		
	};\n";
}
echo' 
</select>
&nbsp;<input type="text" name="val_nama_proyek" id="val_nama_proyek" class="texbox" placeholder="Nama Proyek" size="20px" disabled="disabled"/>
&nbsp; <input type="text" name="val_divisi" id="val_divisi" class="texbox" placeholder="Divisi" size="26px" disabled="disabled"/>
</td>
';
?>

 </tr>
 <tr>
 <td># NIK </td><td><input type="text" name="nik_disabled" id="nik_disabled" class="texbox" size="65px" placeholder="Masukkan NIK" value="NIK-<?= date('Y.m.ds');?>" disabled="disabled"/></td>
 <td></td><td></td>
<td>* NAMA </td><td><input type="text" name="nama" id="nama" maxlength="25" class="texbox" size="65px" placeholder="Masukkan Nama"  required="required"/></td>
 </tr>
 
 <tr>
 <td>* JABATAN </td><td><input type="text" name="jabatan" maxlength="25" id="jabatan" class="texbox" size="65px" placeholder="Masukkan Info Jabatan"  required="required"/></td>
 <td></td><td></td>
 <td>* ALAMAT </td><td><input type="text" name="alamat" maxlength="48" id="alamat" class="texbox" size="65px" placeholder="Masukkan Info Alamat Lengkap"  required="required"/></td>
 </tr>
 
 <tr>
 <td>* NO. KTP </td><td><input type="text" name="no_ktp" maxlength="16" id="no_ktp" class="texbox" size="65px" placeholder="Nomor KTP"  required="required" onkeypress="return hanyaAngka(event)"/></td>
 <td></td><td></td>
 <td>* TANGGAL LAHIR </td><td><input type="text" name="tgl_lahir" maxlength="10" id="tanggal" class="texbox" size="65px" placeholder="Masukan Tanggal Lahir"  required="required"/></td>
 </tr>

 <tr>
 <td>* NO. PONSEL &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</td><td><input type="text" maxlength="13" name="no_ponsel_telp" id="no_ponsel_telp" class="texbox" size="65px" placeholder="Masukan Nomor Ponsel / Telepon"  required="required" onkeypress="return hanyaAngka(event)"/></td>
 <td></td><td></td>
 <td>* GENDER </td><td><select name="gender" required="required">
 <option></option>
 <option>Laki-Laki</option>
 <option>Perempuan</option>
</select>
 </tr>

 <tr>
 <td>E-MAIL </td><td><input type="text" name="email" maxlength="25" id="email" class="texbox" size="65px" placeholder="Masukan Alamat E-mail" ></td>
 <td></td><td></td>
 <td>* KEPERCAYAAN  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</td><td><select name="agama" required="required">
<option></option>
<option>Budha</option>
<option>Hindu</option>
<option>Islam</option>
<option>Katolik</option>
<option>Kong Hu Cu</option>
<option>Kristen Protestan</option>
</select>
 </td>
 </tr>
 
 <tr> 
 <td></td><td></td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
 </tr>
 
</table>

 <hr>
<br />
 <table>

 <tr>
 <td>* UPAH HARIAN</td><td><input type="text" name="upah" maxlength="11" id="upah" class="texbox" size="65px" placeholder="Masukkan Upah Harian" data-affixes-stay="true" data-prefix="Rp. " data-thousands="." data-decimal=","  required="required"/></td>
 <td></td><td></td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 * ATURAN JAM KERJA</td><td><select name="jam_kerja" maxlength="8" id="jam_kerja" class="texbox"  required="required">
 <option></option>
 <option>SHIFT 1</option>
 <option>SHIFT 2</option>
 </select>
 </td>
 </tr>
 
 <tr>
 <td></td><td></td>
  <td></td><td></td>
 <td></td><td></td>
 </tr>
 
 <tr>
 <td>* UANG LEMBUR/JAM </td><td><input type="text" maxlength="11" name="uang_lembur" id="uang_lembur" class="texbox" size="65px" placeholder="Masukan Jumlah Uang LEMBUR/JAM" data-affixes-stay="true" data-prefix="Rp. " data-thousands="." data-decimal=","  required="required"/></td>
  <td></td><td></td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 * UANG TRANSPORT </td><td><input type="text" name="transport" maxlength="10" id="transport" class="texbox" size="65px" placeholder="Masukkan Uang Transport Harian"  data-affixes-stay="true" data-prefix="Rp. " data-thousands="." data-decimal=","  required="required"/></td> 
 </tr>
 
 <tr>
 <td>* UANG MAKAN</td><td><input type="text" maxlength="11" name="makan" id="makan" class="texbox" size="65px" placeholder="Masukan Uang Makan" data-affixes-stay="true" data-prefix="Rp. " data-thousands="." data-decimal=","  required="required"/></td>
  <td></td><td></td>
 <td></td><td></td>
 </tr>
  
 <tr> 
 <td></td><td></td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
 </tr>
 
</table>
<!-- awal value hidden form -->
 <input type="text" name="nama_proyek" id="nama_proyek" class="texbox" hidden="hidden"/>
 <input type="text" name="divisi" id="divisi" class="texbox" hidden="hidden"/>
 <input type="text" name="alamat_proyek" id="alamat_proyek" class="texbox" hidden="hidden"/>
 <input type="text" name="nik" id="nik" class="texbox" hidden="hidden" value="NIK-<?= date('Y.m.ds');?>"/>
 <input type="text" name="upah_harian" id="upah_harian" class="texbox" hidden="hidden"/>
 <input type="text" name="uang_lembur_jam" id="uang_lembur_jam" class="texbox" hidden="hidden"/>
 <input type="text" name="uang_transport" id="uang_transport" class="texbox" hidden="hidden"/>
 <input type="text" name="uang_makan" id="uang_makan" class="texbox" hidden="hidden"/>
<!-- akhir value hidden form -->
  <hr>
  <i><b>
  **Keterangan : <br />
  "*" Artinya Wajib Di Isi! <br />
  "#" Artinya Telah Ditentukan Secara Automatis Oleh Sistem.
  </b></i>
  <hr>
  <br />
<center><input type="submit" name="simpan_input_data_upah_pekerja" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIMPAN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="tombol_menu"/>&nbsp;<input type="reset" name="reset" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BATAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="tombol_menu"/></center>

</form>
</div>
<script type="text/javascript">
<?= $jsArray; ?>
function changeValue(id){
document.getElementById('nama_proyek').value = ID_db[id].jsA_nama_proyek;
document.getElementById('divisi').value = ID_db[id].jsA_divisi;
document.getElementById('alamat_proyek').value = ID_db[id].jsA_alamat_proyek;
document.getElementById('val_nama_proyek').value = ID_db[id].jsA_val_nama_proyek;
document.getElementById('val_divisi').value = ID_db[id].jsA_val_divisi;
};
</script>