<br />
<h3 align="center">EDIT DATA PROYEK</h3>
<hr>
<div id="content">
<form method="POST" >
<table >
 <tr>
 <td>* ID PROYEK </td><td><input type="text" name="id_proyek" id="id_proyek" class="texbox" size="65px" placeholder="Masukan ID Proyek" required="required" value="<?= $id_proyek;?>"/></td>
 <td></td><td></td>
 <td>* ALAMAT PROYEK </td><td><input type="text" name="alamat_proyek" id="alamat_proyek" class="texbox" size="65px" placeholder="Masukan Alamat Proyek" required="required"  value="<?= $alamat_proyek;?>"/></td>
 </tr>
 
 <tr>
 <td>* NAMA PROYEK</td><td><input type="text" name="nama_proyek" id="nama_proyek" class="texbox" size="65px" placeholder="Masukkan Nama Proyek" required="required"  value="<?= $nama_proyek;?>"/></td>
 <td></td><td></td>
 <td>* DIVISI </td><td><input type="text" name="divisi" id="divisi" class="texbox" size="65px" placeholder="Masukkan Info Divisi" required="required"  value="<?= $divisi;?>"/></td>
 </tr>
 
 <tr> 
 <td>* STATUS </td><td>
 <input type="radio" name="status" id="status" class="texbox" size="65px" value="0">Masih Dalam Tahap Pengerjaan
 <br>
 <input type="radio" name="status" id="status" class="texbox" size="65px" value="1">Telah Selesai Dikerjakan
 </td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
 </tr>
 
 <tr> 
 <td></td><td></td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
 </tr>
 
</table>
  <i><b>
  **Keterangan : 
  "*" Artinya Wajib Di Isi! <br />
  </b></i>
<input type="text" hidden="hidden" name="val_id_proyek" id="val_id_proyek" class="texbox" value="<?= $id_proyek;?>"/>
<input type="text" hidden="hidden" name="val_alamat_proyek" id="val_alamat_proyek" class="texbox" value="<?= $alamat_proyek;?>"/>
<input type="text" hidden="hidden" name="val_nama_proyek" id="val_nama_proyek" class="texbox" value="<?= $nama_proyek;?>"/>
<input type="text" hidden="hidden" name="val_divisi" id="val_divisi" class="texbox" value="<?= $divisi;?>"/>
<center><input type="submit" name="update_input_data_proyek" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIMPAN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="tombol_menu"/>&nbsp;<input type="submit" name="hapus_input_data_proyek" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HAPUS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="tombol_menu"/></center>
<hr>
</form>
</div>