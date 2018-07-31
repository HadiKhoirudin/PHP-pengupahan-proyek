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
			    <th>Tanggal</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jabatan</th>
				<th>Jam Masuk - Keluar</th>
				<th>Upah</th>
				<th>Lemburan</th>
				<th>Transport</th>
				<th>Makan</th>
				<th>Total Upah</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $sql = "SELECT * FROM absensi";
        $query = $db->query($sql);

        while ($row = $query->fetch_assoc()) :?>
        	<tr>
				<td><?php echo $row['tanggal_kerja'];?></td>
        		<td><?php echo $row['nik'];?></td>
        		<td><?php echo $row['nama'];?></td>
        		<td><?php echo $row['jabatan'];?></td>
				<td><?php echo $row['jam_masuk'].' - '.$row['jam_keluar'];?></td>
				<td>
				<?php
				$number = $row['upah_harian'];
				$format_indonesia = number_format ($number, 2, ',', '.');
				echo "RP. ".$format_indonesia; 
				?>
				</td>
				<td>
				<?php
				$number = $row['uang_lembur_jam'];
				$format_indonesia = number_format ($number, 2, ',', '.');
				echo "RP. ".$format_indonesia; 
				?>
				</td>
				<td>
				<?php
				$number = $row['uang_transport'];
				$format_indonesia = number_format ($number, 2, ',', '.');
				echo "RP. ".$format_indonesia; 
				?>
				</td>
				<td>
				<?php
				$number = $row['uang_makan'];
				$format_indonesia = number_format ($number, 2, ',', '.');
				echo "RP. ".$format_indonesia; 
				?>
				</td>
				<td>
				<?php
				$number = $row['total'];
				$format_indonesia = number_format ($number, 2, ',', '.');
				echo "RP. ".$format_indonesia; 
				?>
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