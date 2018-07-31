<br />
<h3 align="center">EDIT DATA UPAH PEKERJA</h3>
<hr>
<br />
<div id="content">
<form method="POST" >

<table >

 <tr>

 <td># NIK </td><td><input type="text" name="update_nik_disabled" id="nik_disabled" class="texbox" size="65px" placeholder="Masukkan NIK" value="<?= $tabel_nik;?>" disabled="disabled"/></td>
 <input type="text" name="update_nik" id="nik_disabled" class="texbox" size="65px" placeholder="Masukkan NIK" value="<?= $tabel_nik;?>" hidden="hidden"/>
 <td></td><td></td>
 <td>* NAMA </td><td><input type="text" name="update_nama" id="nama" class="texbox" size="65px" placeholder="Masukkan Nama"  value="<?= $tabel_nama;?>" required="required"/></td>
 </tr>
 
 <tr>
 <td>* JABATAN </td><td><input type="text" name="update_jabatan" id="jabatan" class="texbox" size="65px" placeholder="Masukkan Info Jabatan"  value="<?= $tabel_jabatan;?>" required="required"/></td>
 <td></td><td></td>
 <td>* ALAMAT </td><td><input type="text" name="update_alamat" id="alamat" class="texbox" size="65px" placeholder="Masukkan Info Alama Lengkapt"  value="<?= $tabel_alamat;?>" required="required"/></td>
 </tr>
 
 <tr>
 <td>* NO. KTP </td><td><input type="text" name="update_no_ktp" id="no_ktp" class="texbox" size="65px" placeholder="Nomor KTP"  value="<?= $tabel_no_ktp;?>" required="required" onkeypress="return hanyaAngka(event)"/></td>
 <td></td><td></td>
 <td>* TANGGAL LAHIR </td><td><input type="text" name="update_tgl_lahir" id="tanggal" class="texbox" size="65px" placeholder="Masukan Tanggal Lahir"  value="<?= $tabel_tgl_lahir;?>" required="required"/></td>
 </tr>

 <tr>
 <td>* NO. PONSEL &nbsp;&nbsp; </td><td><input type="text" name="update_no_ponsel_telp" id="no_ponsel_telp" class="texbox" size="65px" placeholder="Masukan Nomor Ponsel / Telepon"  value="<?= $tabel_no_ponsel_telp;?>" required="required" onkeypress="return hanyaAngka(event)"/></td>
 <td></td><td></td>
 <td>* GENDER </td><td><select name="update_gender" required="required">
 <option></option>
 <option>Laki-Laki</option>
 <option>Perempuan</option>
 </select>
 <input type="text" name="val_gender" id="gender" class="texbox" size="49px" disabled="disabled" value="<?= $tabel_gender;?>">
 </tr>

 <tr>
 <td>* E-MAIL </td><td><input type="text" name="update_email" id="email" class="texbox" size="65px" placeholder="Masukan Alamat E-mail"  value="<?= $tabel_email;?>"></td>
 <td></td><td></td>
 <td>* KEPERCAYAAN </td><td><select name="update_agama" required="required">
 <option></option>
 <option>Budha</option>
 <option>Hindu</option>
 <option>Islam</option>
 <option>Katolik</option>
 <option>Kong Hu Cu</option>
 </select>
 <input type="text" name="val_agama" class="texbox" size="49px" disabled="disabled" value="<?= $tabel_agama;?>">
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
 <td>+ UPAH HARIAN</td><td><input type="text" name="update_upah_harian" id="upah" class="texbox" size="65px" placeholder="Masukkan Upah Harian" data-affixes-stay="true" data-prefix="Rp. " data-thousands="." data-decimal=","  value="<?= $tabel_upah_harian;?>" required="required"/></td>
  <td></td><td></td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 * ATURAN JAM KERJA</td><td>
 <select name="update_jam_kerja" id="jam_kerja" class="texbox"  required="required"  value="<?= $tabel_jam_kerja;?>" >
 <option></option>
 <option>SHIFT 1</option>
 <option>SHIFT 2</option>
 </select>
 <input type="text" name="val_jam_kerja" class="texbox" size="52px" disabled="disabled" value="<?= $tabel_jam_kerja;?>">
 </td>
 </tr>
 
 <tr>
 <td></td><td></td>
  <td></td><td></td>
 <td></td><td></td>
 </tr>
 
 <tr>
 <td>+ UANG LEMBUR/JAM </td><td><input type="text" name="update_uang_lembur_jam" id="uang_lembur" class="texbox" size="65px" placeholder="Masukan Jumlah Uang LEMBUR/JAM" data-affixes-stay="true" data-prefix="Rp. " data-thousands="." data-decimal=","  required="required"  value="<?= $tabel_uang_lembur_jam;?>"/></td>
  <td></td><td></td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 + UANG TRANSPORT </td><td><input type="text" name="update_uang_transport" id="transport" class="texbox" size="65px" placeholder="Masukkan Uang Transport Harian"  data-affixes-stay="true" data-prefix="Rp. " data-thousands="." data-decimal=","  required="required"  value="<?= $tabel_uang_transport;?>"/></td> 
 </tr>
 
 <tr>
 <td>+ UANG MAKAN</td><td><input type="text" name="update_uang_makan" id="makan" class="texbox" size="65px" placeholder="Uang Makan" data-affixes-stay="true" data-prefix="Rp. " data-thousands="." data-decimal=","  required="required"  value="<?= $tabel_uang_makan;?>"/></td>
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
 <input type="text" name="nik" id="nik" class="texbox" hidden="hidden" value="<?= $tabel_nik;?>"/>
 <input type="text" name="update_upah_harian" id="upah_harian" class="texbox" hidden="hidden"/>
 <input type="text" name="update_uang_lembur_jam" id="uang_lembur_jam" class="texbox" hidden="hidden"/>
 <input type="text" name="update_uang_transport" id="uang_transport" class="texbox" hidden="hidden"/>
 <input type="text" name="update_uang_makan" id="uang_makan" class="texbox" hidden="hidden"/>
<!-- akhir value hidden form -->
  <hr>
  <i><b>
  **Keterangan : <br />
  "*" Artinya Wajib Di Isi! <br />
  "+" Artinya Wajib Di Klik Atau Diperbaharui <br />
  "#" Artinya Telah Ditentukan Secara Automatis Oleh Sistem.
  </b></i>
  <hr>
  <br />
<center><input type="submit" name="simpan_update_data_master_pekerja" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIMPAN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="tombol_menu"/>&nbsp;</center>
</form>
</div>