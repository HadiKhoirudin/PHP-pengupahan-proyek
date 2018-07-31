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
$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}   
?>


<div id="tabel">
	<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
			    <th>Tanggal Kerja</th>
                <th>ID Proyek</th>
                <th>Nama Proyek</th>
                <th>Alamat Proyek</th>
				<th>Divisi</th>
				<th>Status</th>
				<th>Total Upah Proyek</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $sql = "
SELECT
proyek.id_proyek,
proyek.nama_proyek,
proyek.alamat_proyek,
proyek.divisi,
proyek.`status`,
absensi.tanggal_kerja,
absensi.id_proyek
FROM
		proyek ,
		absensi
WHERE proyek.id_proyek = absensi.id_proyek AND proyek.divisi=proyek.divisi
GROUP BY proyek.divisi
ORDER BY absensi.tanggal_kerja ASC
		";
        $query = $db->query($sql);

        while ($row = $query->fetch_assoc()) :?>
        	<tr>
				<td><?php echo $row['tanggal_kerja'];?></td>
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
				<?php
				$query_total_upah="SELECT SUM(total)As total_upah FROM absensi WHERE id_proyek ='$row[id_proyek]'";
				$tampil_total_upah=mysqli_query($koneksi, $query_total_upah) or die(mysqli_error());
				{
				while($data_upah=mysqli_fetch_array($tampil_total_upah))
				$number = $data_upah['total_upah'];
				$format_indonesia = number_format ($number, 2, ',', '.');
				echo "RP. ".$format_indonesia; 
				}
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