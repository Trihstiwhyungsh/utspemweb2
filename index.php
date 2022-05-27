<?php 
// selalu lakukan require/include di awal
require_once('config.php');
require_once('koneksi.php');

?>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Database Pegawai</title>
</head>

<body>

<?php

// set file yang akan di-include
if (isset($_GET['f']))
    $file = $_GET['f'];
else
    $file = 'pegawai-list';

// include file yang diminta
if ($file && file_exists($file.'.php'))
    require_once($file.'.php');
else
    echo 'File TIDAK Ditemukan!!!!';
?>


</body>


<?php
 session_start();
 if (isset($_POST['tema'])) {
  $_SESSION['css'] = $_POST['tema'];
 }
 
 // Syntax untuk men set tema aktif
 if(isset($_SESSION['css'])) {
  $tema = $_SESSION['css'];
 } else {
  $tema = 'default';
 }
?>
</html>
