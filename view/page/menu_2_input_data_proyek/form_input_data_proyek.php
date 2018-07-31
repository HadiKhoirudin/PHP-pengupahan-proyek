<br />
<h3 align="center">INPUT DATA PROYEK</h3>
<hr>
<div id="content">
<form method="POST" >
<table >
 <tr>
 <td>* ID PROYEK </td><td><input disabled="disabled" type="text" name="dis_id_proyek" id="dis_id_proyek" class="texbox" maxlength="18" size="65px" value="PR-<?php echo date('Y.m.d.ds');?>"/></td>
 <td></td><td></td>
 <td>* ALAMAT PROYEK </td><td><input type="text" name="alamat_proyek" id="alamat_proyek" class="texbox" size="65px" maxlength="48" placeholder="Masukan Alamat Proyek" required="required"/></td>
 </tr>
 
 <tr>
 <td>* NAMA PROYEK</td><td><input type="text" name="nama_proyek" id="nama_proyek" class="texbox" size="65px" maxlength="25" placeholder="Masukkan Nama Proyek" required="required"/></td>
 <td></td><td></td>
 <td>* DIVISI </td><td><input type="text" name="divisi" id="divisi" class="texbox" size="65px" placeholder="Masukkan Info Divisi" maxlength="48" required="required"/></td>
 </tr>
 
 <tr> 
 <td></td><td></td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
 </tr>
 
</table>
<input hidden="hidden" type="text" name="id_proyek" id="id_proyek" class="texbox" size="65px" value="PR-<?php echo date('Y.m.d.ds');?>"/>
  <i><b>
  **Keterangan : 
  "*" Artinya Wajib Di Isi! <br />
  </b></i>
<center><input type="submit" name="simpan_input_data_proyek" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIMPAN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="tombol_menu"/>&nbsp;<input type="reset" name="reset" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BATAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="tombol_menu"/></center>
<hr>
</form>
</div>