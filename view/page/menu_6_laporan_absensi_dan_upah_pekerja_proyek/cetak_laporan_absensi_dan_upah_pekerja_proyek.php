<?php
//Define relative path from this script to mPDF
$nama_file='LAPORAN ABSENSI DAN UPAH PEKERJA PROYEK'; //Beri nama file PDF hasil.
define('_MPDF_PATH','./lib/mpdf60/');
//define("_JPGRAPH_PATH", '../mpdf60/graph_cache/src/');
//define("_JPGRAPH_PATH", '../jpgraph/src/'); 
include(_MPDF_PATH . "mpdf.php");
//include(_MPDF_PATH . "graph.php");
//include(_MPDF_PATH . "graph_cache/src/");
$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
//Beginning Buffer to save PHP variables and HTML tags
ob_start(); 
$mpdf->useGraphs = true;
?>
<!DOCTYPE html>
<html>
<head>
    <title>LAPORAN ABSENSI DAN UPAH PEKERJA PROYEK <?php echo $nik;?></title>
    <style>
        *
        {
            margin:0;
            padding:0;
            font-family: calibri;
            font-size:10pt;
            color:#000;
        }
        body
        {
            width:100%;
            font-family: calibri;
            font-size:8pt;
            margin:0;
            padding:0;
        }
         
        p
        {
            margin:0;
            padding:0;
            margin-left: 200px;
        }
         
        #wrapper
        {
            width:200mm;
            margin:0 5mm;
        }
         
        .page
        {
            height:297mm;
            width:210mm;
            page-break-after:always;
        }
 
        table
        {
            border-left: 1px solid #fff;
            border-top: 1px solid #fff;
            font-family: calibri; 
            border-spacing:0;
            border-collapse: collapse; 
             
        }
         
        table td 
        {
            border-right: 1px solid #fff;
            border-bottom: 1px solid #fff;
            padding: 2mm;
            
        }
         
        table.heading
        {
            height:50mm;
        }
         
        h1.heading
        {
            font-size:10pt;
            color:#000;
            font-weight:normal;
            font-style: italic;
        }
         
        h2.heading
        {
            font-size:10pt;
            color:#000;
            font-weight:normal;
        }
         
        hr
        {
            color:#ccc;
            background:#ccc;
        }
         
        #invoice_body
        {
            height: auto;
        }
         
        #invoice_body , #invoice_total
        {   
            width:100%;
        }
        #invoice_body table , #invoice_total table
        {
            width:100%;
            border-left: 1px solid #ccc;
            border-top: 1px solid #ccc;
     
            border-spacing:0;
            border-collapse: collapse; 
             
            margin-top:5mm;
        }
         
        #invoice_body table td , #invoice_total table td
        {
            text-align:center;
            font-size:8pt;
            border-right: 1px solid black;
            border-bottom: 1px solid black;
            padding:2mm 0;
        }
         
        #invoice_body table td.mono  , #invoice_total table td.mono
        {
            text-align:right;
            padding-right:3mm;
            font-size:8pt;
        }
         
        #footer
        {   
            width:200mm;
            margin:0 5mm;
            padding-bottom:3mm;
        }
        #footer table
        {
            width:100%;
            border-left: 1px solid #ccc;
            border-top: 1px solid #ccc;
             
            background:#eee;
             
            border-spacing:0;
            border-collapse: collapse; 
        }
        #footer table td
        {
            width:25%;
            text-align:center;
            font-size:9pt;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
        }
    </style>
</head>
<body>
<div id="wrapper">
<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_mau_pengupahan_proyek";
$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}   
?>
    <table class="heading" style="width:100%;">
        <tr>
        <td> <center><p style="text-align:center; font-size: 12px; font-weight:bold;">PT. MULTIBRATA ANUGERAH UTAMA<br />
		<img width="15%" src="./assets/img/mau_lap.jpg" alt="PT. MULTIBRATA ANUGERAH UTAMA"></p>
		<br /><p style="text-align:center; font-size: 9px; font-weight:bold;">LAPORAN ABSENSI DAN UPAH PEKERJA PROYEK
		<?php
		$sql_tanggal_kerja_asc = "
		SELECT * FROM `absensi` WHERE absensi.id_proyek ='$id_proyek' ORDER BY `tanggal_kerja` LIMIT 1
		";
		$query_tanggal_kerja_asc = mysql_query($sql_tanggal_kerja_asc);
		while ($data_tanggal_kerja_asc = mysql_fetch_array($query_tanggal_kerja_asc))
		{
		$tanggal_awal = date("d-m-Y", strtotime($data_tanggal_kerja_asc['tanggal_kerja']));
		echo '  &nbsp;'.$tanggal_awal;
		}
		$sql_tanggal_kerja_desc = "
		SELECT * FROM `absensi` WHERE absensi.id_proyek ='$id_proyek' ORDER BY `tanggal_kerja` DESC LIMIT 1
		";
		$query_tanggal_kerja_desc = mysql_query($sql_tanggal_kerja_desc);
		while ($data_tanggal_kerja_desc = mysql_fetch_array($query_tanggal_kerja_desc))
		{
		$tanggal_akhir = date("d-m-Y", strtotime($data_tanggal_kerja_desc['tanggal_kerja']));
		echo '  &nbsp; / &nbsp; '.$tanggal_akhir;
		}
		?>
		</p></center></td>
		<hr>
		</tr>
    </table>
    <div id="content">
		<?php
		$sql_proyek = "
		SELECT
		absensi.id_proyek,
		proyek.id_proyek,
		proyek.nama_proyek,
		proyek.alamat_proyek,
		proyek.divisi,
		proyek.`status`
		FROM
		absensi ,
		proyek
		WHERE absensi.id_proyek = '$id_proyek'
		HAVING
		absensi.id_proyek = proyek.id_proyek
		LIMIT 1
		";
		$query_proyek = mysql_query($sql_proyek);
		while ($data_proyek = mysql_fetch_array($query_proyek))
		{
			echo'<i>ID Proyek
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : '
			.$data_proyek['id_proyek'];
			echo'<br />Nama Proyek
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : '
			.$data_proyek['nama_proyek'];
			echo'<br />Alamat Proyek
			&nbsp;&nbsp;&nbsp; : '
			.$data_proyek['alamat_proyek'];
			echo'<br />Divisi
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : '
			.$data_proyek['divisi'];
			echo'<br />Status
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ';
			
				$ini_status = $data_proyek['status'];
				switch($ini_status)
				{
				case '0': $statusnya='Masih Dalam Tahap Pengerjaan'; break;
				case '1': $statusnya='Telah Selesai Dikerjakan'; break;
				}
				echo "".$statusnya."";
			echo'</i>';
		}
		?>
        <div id="invoice_body">
        <?php
            $query1="
			SELECT * FROM absensi WHERE nik ='$nik' ORDER BY tanggal_kerja
			";
        
            $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
            ?>
            <table border="1">
            <tr>
				<td style="width:4%;"><b>No</b></td>
                <td style="width:8%;"><b>Tanggal</b></td>
                <td style="width:10%;"><b>NIK</b></td>
                <td style="width:15%;"><b>Nama</b></td>
                <td style="width:15%;"><b>Jabatan</b></td>
                <td style="width:15%;"><b>Jam <br />Masuk - Keluar</b></td>
                <td style="width:15%;"><b>Upah</b></td>
                <td style="width:15%;"><b>Lembur</b></td>
                <td style="width:15%;"><b>Transport</b></td>
                <td style="width:15%;"><b>Makan</b></td>
                <td style="width:15%;"><b>Total</b></td>
            </tr>
            <?php
            $no=0;
                     while($data1=mysqli_fetch_array($tampil))
                    { $no++; ?>
            <tr>
				<td style="width:4%;" class="mono"><b><?php echo $no; ?></b></td>
                <td style="width:8%;" class="mono"><b><?php $tanggal_krj = date("d-m-Y", strtotime($data1['tanggal_kerja']));  echo''.$tanggal_krj; ?></b></td>
                <td style="width:10%;" class="mono"><b><?php echo $data1['nik']; ?></b></td>
                <td style="width:10%;" class="mono"><b><?php echo $data1['nama']; ?></b></td>
                <td style="width:10%;" class="mono"><b><?php echo $data1['jabatan']; ?></b></td>
                <td style="width:10%;" class="mono"><b><?php echo $data1['jam_masuk'].' - '.$data1['jam_keluar'];?></b></td>
                <td style="width:10%;" class="mono">
				<b>
				<?php $number = $data1['upah_harian'];
				$format_indonesia = number_format ($number, 2, ',', '.');
				echo "RP. ".$format_indonesia; ?>
				</b>
				</td>
                <td style="width:10%;" class="mono">
				<b>
				<?php $number = $data1['uang_lembur_jam'];
				$format_indonesia = number_format ($number, 2, ',', '.');
				echo "RP. ".$format_indonesia; ?>
				</b>
				</td>
                <td style="width:10%;" class="mono">
				<b>
				<?php $number = $data1['uang_transport'];
				$format_indonesia = number_format ($number, 2, ',', '.');
				echo "RP. ".$format_indonesia; ?>
				</b>
				</td>
                <td style="width:10%;" class="mono">
				<b>
				<?php $number = $data1['uang_makan'];
				$format_indonesia = number_format ($number, 2, ',', '.');
				echo "RP. ".$format_indonesia; ?>
				</b>
				</td>
                <td style="width:10%;" class="mono">
				<b>
				<?php $number = $data1['total'];
				$format_indonesia = number_format ($number, 2, ',', '.');
				echo "RP. ".$format_indonesia; ?>
				</b>
				</td>
            </tr>         
             <?php   
              } 
              ?>
        </table>
        </div>
        <div id="invoice_total" align="right">
				<?php
				$query_total_upah="SELECT SUM(total)As total_upah FROM absensi WHERE nik ='$nik'";
				$tampil_total_upah=mysqli_query($koneksi, $query_total_upah) or die(mysqli_error());
				{
				while($data_upah=mysqli_fetch_array($tampil_total_upah))
				$number = $data_upah['total_upah'];
				$format_indonesia = number_format ($number, 2, ',', '.');
				echo'
				<br /><p style="text-align:right; font-size: 9px; font-weight:bold;">Jumlah Total = RP. '.$format_indonesia.'</p>
				<table>
				<tr>
				</tr>
				</table>
				';
				} ?>
        </div>
        <br />
        <hr />
        <br />
         <td colspan="2"><center><b>Mengetahui :</b></center></td>
        <table align="right" style="width:10%; height:10%;">
            <tr >
               <td colspan="25" >
			   <br />
			   <br />
			   <br />
			   <br />
			   <br />
			   <br />
			   (.................................)
			   <center><b></b></center></td>
            </tr>
        </table>
    </div>
    <br />
    </div>
<?php
$html = ob_get_contents(); //Proses untuk mengambil data
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
// LOAD a stylesheet
//$stylesheet = file_get_contents('mpdfstyletables.css');
//$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text
$mpdf->WriteHTML($html,1);
$mpdf->Output($nama_file." (NIK ".$nik.")-(TANGGAL ".date("d-m-Y").")".".pdf" ,'I');
exit; 
?>
</body>
</html>