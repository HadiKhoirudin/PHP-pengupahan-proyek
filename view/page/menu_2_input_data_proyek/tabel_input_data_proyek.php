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
			    <th>Tanggal Pengerjaan</th>
			    <th>ID Proyek</th>
                <th>Nama Proyek</th>
				<th>Alamat Proyek</th>
				<th>Divisi</th>
				<th>Status</th>
				<th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $sql = "SELECT * FROM proyek";
        $query = $db->query($sql);

        while ($row = $query->fetch_assoc()) :?>
        	<tr>
				<td>
				<?php
				$tang_m = $row['id_proyek'];
				$tang_tu = substr($tang_m, 3, 10);
$tanggalnya = $tang_tu;
$tanggaljadi = explode(".",$tanggalnya); //spasi sebagai tanda pemisah

echo "<center>".$tanggaljadi['0']."-".$tanggaljadi['1']."-".$tanggaljadi['2']."</center>";

				?>
				</td>
				<td><?php echo $row['id_proyek'];?></td>
        		<td><?php echo $row['nama_proyek'];?></td>
        		<td><?php echo $row['alamat_proyek'];?></td>
        		<td><?php echo $row['divisi'];?></td>
        		<td>
				<?php
				$ini_status = $row['status'];
				switch($ini_status)
				{
				case '0': $statusnya='Masih Dalam Tahap Pengerjaan'; break;
				case '1': $statusnya='Telah Selesai Dikerjakan'; break;
				}
				echo "<center>".$statusnya."</center>";
				?>
				</td>
				<td>
				<center>
				<form method='POST'>
				<input type = 'hidden' name = 'id_proyek' value = '<?php echo $row['id_proyek'];?>'/>
				<input type = 'hidden' name = 'alamat_proyek' value = '<?php echo $row['alamat_proyek'];?>'/>
				<input type = 'hidden' name = 'nama_proyek' value = '<?php echo $row['nama_proyek'];?>'/>
				<input type = 'hidden' name = 'divisi' value = '<?php echo $row['divisi'];?>'/>
				<input type = 'submit' name = 'edit_input_data_proyek' value = 'Edit' class = 'tombol_menu'/>
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