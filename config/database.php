<?php
	$host="localhost";
	$user="root";
	$password="";
	$koneksi=mysql_connect($host, $user, $password) or
	die("Gagal koneksi database kang... !");
	mysql_select_db("db_mau_pengupahan_proyek");
?>