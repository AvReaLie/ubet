<?php
session_start(); 
require '../utils/config.php';
if(!isset($_SESSION['log_adm'])){
echo "<script>alert('Login terlebih dahulu');document.location='$admin_url'</script>";
  exit();
  }

date_default_timezone_set('Asia/Jakarta');

$page = $_REQUEST['page'];      
switch($page){  
  default :
  $judul = "Ubet | Error 404 Not Found";
  require 'view/404.php';
  break; 

case 'logout':
        unset($_SESSION['log_adm']);
        //session_destroy();
        echo "<script>alert('$_SESSION[adm_name] Berhasil Logout');document.location='$admin_url';</script>";
        break;

  case 'dashboard':
    $judul = "Ubet | Dashboard";  
    require 'view/h.php';
    require 'view/nav.php';
    require 'view/body.php';
    require 'view/f.php';
  break;

  case 'penyalur':
    $judul = "Ubet | Penyalur";  
    require 'view/h.php';
    require 'view/nav.php';
    require 'model/penyalur/index.php';
    require 'view/f.php';
  break;

  case 'keahlian':
    $judul = "Ubet | Keahlian";  
    require 'view/h.php';
    require 'view/nav.php';
    require 'model/keahlian/index.php';
    require 'view/f.php';
  break;

  case 'provinsi':
    $judul = "Ubet | Daerah | Provinsi";  
    require 'view/h.php';
    require 'view/nav.php';
    require 'model/daerah/provinsi/index.php';
    require 'view/f.php';
  break;

  case 'kabupaten':
    $judul = "Ubet | Daerah | Kabupaten";  
    require 'view/h.php';
    require 'view/nav.php';
    require 'model/daerah/kabupaten/index.php';
    require 'view/f.php';
  break;

  case 'kecamatan':
    $judul = "Ubet | Daerah | Kecamatan";  
    require 'view/h.php';
    require 'view/nav.php';
    require 'model/daerah/kecamatan/index.php';
    require 'view/f.php';
  break;

break;  
}
?> 
