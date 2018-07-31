<?php
// memanggil file config.php
/** 
 * @var informasi untuk koneksi database 
 */
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_mau_pengupahan_proyek';

/** koneksi ke database */
$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// check koneksi
if ($db->connect_error) {
	die('Oops!! Terjadi error : ' . $db->connect_error);
}
?>
<div id="tabel">
	<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
				<th>ID Proyek</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jabatan</th>
				<th>No. Ponsel</th>
				<th>Upah</th>
				<th>Lemburan</th>
				<th>Transport</th>
				<th>Makan</th>
				<th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $sql = "SELECT * FROM pekerja";
        $query = $db->query($sql);

        while ($row = $query->fetch_assoc()) :?>
        	<tr>
				<td><?php echo $row['id_proyek'];?></td>
        		<td><?php echo $row['nik'];?></td>
        		<td><?php echo $row['nama'];?></td>
        		<td><?php echo $row['jabatan'];?></td>
				<td><?php echo $row['no_ponsel_telp'];?></td>
				<td>
				<?php
				$number = $row['upah_harian'];
				$format_indonesia = number_format ($number, 2, ',', '.');
				echo "RP. ".$format_indonesia; //1.234,56
				?>
				</td>
				<td>
				<?php
				$number = $row['uang_lembur_jam'];
				$format_indonesia = number_format ($number, 2, ',', '.');
				echo "RP. ".$format_indonesia; //1.234,56
				?>
				</td>
				<td>
				<?php
				$number = $row['uang_transport'];
				$format_indonesia = number_format ($number, 2, ',', '.');
				echo "RP. ".$format_indonesia; //1.234,56
				?>
				</td>
				<td>
				<?php
				$number = $row['uang_makan'];
				$format_indonesia = number_format ($number, 2, ',', '.');
				echo "RP. ".$format_indonesia; //1.234,56
				?>
				</td>
				<td>
				<center>
				<form method='POST'>
				<input type = 'hidden' name = 'tabel_id_proyek' value = '<?php echo $row['id_proyek'];?>'/>
				<input type = 'hidden' name = 'tabel_nik' value = '<?php echo $row['nik'];?>'/>
				<input type = 'hidden' name = 'tabel_nama' value = '<?php echo $row['nama'];?>'/>
				<input type = 'hidden' name = 'tabel_jabatan' value = '<?php echo $row['jabatan'];?>'/>
				<input type = 'hidden' name = 'tabel_alamat' value = '<?php echo $row['alamat'];?>'/>
				<input type = 'hidden' name = 'tabel_no_ktp' value = '<?php echo $row['no_ktp'];?>'/>
				<input type = 'hidden' name = 'tabel_tgl_lahir' value = '<?php echo $row['tgl_lahir'];?>'/>
				<input type = 'hidden' name = 'tabel_no_ponsel_telp' value = '<?php echo $row['no_ponsel_telp'];?>'/>
				<input type = 'hidden' name = 'tabel_gender' value = '<?php echo $row['gender'];?>'/>
				<input type = 'hidden' name = 'tabel_email' value = '<?php echo $row['email'];?>'/>
				<input type = 'hidden' name = 'tabel_agama' value = '<?php echo $row['agama'];?>'/>
				<input type = 'hidden' name = 'tabel_upah_harian' value = '<?php echo $row['upah_harian'];?>'/>
				<input type = 'hidden' name = 'tabel_uang_lembur_jam' value = '<?php echo $row['uang_lembur_jam'];?>'/>
				<input type = 'hidden' name = 'tabel_uang_transport' value = '<?php echo $row['uang_transport'];?>'/>
				<input type = 'hidden' name = 'tabel_uang_makan' value = '<?php echo $row['uang_makan'];?>'/>
				<input type = 'hidden' name = 'tabel_jam_kerja' value = '<?php echo $row['jam_kerja'];?>'/>
				<input type = 'submit' name = 'update_daftar_master_pekerja' value = 'Edit' class = 'tombol_menu'/>
				<input type = 'submit' name = 'hapus_daftar_master_pekerja' value = 'Hapus' class = 'tombol_menu'/>
				</form>
				</center>
				</td>
        	</tr>
        <?php endwhile;?>
        </tbody>
    </table>
	<script>
    $(document).ready(function() {
	   $('#example').DataTable();
	} );
	</script>
<hr>