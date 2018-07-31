<?php
/*
Session start adalah untuk menyimpan variabel kedalam sesi php
*/
session_start();
/*
require_once adalah untuk memanggil database
*/
require_once('./config/database.php');
/*
Konfigurasi waktu dan tanggal
*/
date_default_timezone_set('Asia/Jakarta');
$data_tanggal	 = date("Y-m-d");
$data_jam 		 = date("H:i:s");
$detik 			 = date('s');
$menit 			 = date('i');
$jam   			 = date('H');
/*
Tampilan awal adalah login jika belum login maka codingnya adalah $view ='login';
artinya pada saat view dipanggil dan dengan kondisi belum login, maka login.php yang ditampilkan.
*/
$tampil ='login';
/*
include './assets/template/header.html';  adalah header guna deklarasi layout tampilan untuk keseluruhan halaman
*/
include ('./assets/template/header.html');
/*
dibawah ini adalah fungsi validasi 
pengecekan jika sudah login maka view akan menampilkan 
web untuk masing-masing level login, apakah admin atau user
*/
if (isset($_SESSION['level'])) {
include ('./controller/page.php');
}
else
{
include ('/controller/'.$tampil.'.php');
}
?>