<?php
session_start(); 
//require '../utils/config.php';
/*if(!isset($_SESSION['log_adm'])){
echo "<script>alert('Login terlebih dahulu');document.location='../'</script>";
  exit();
  }*/

date_default_timezone_set('Asia/Jakarta');

$page = $_REQUEST['page'];      
switch($page){  
  default :
  $judul = "Ubet | Error 404 Not Found";
  require 'view/404.php';
  break; 

/*case 'logout':
        unset($_SESSION['log_adm']);
        //session_destroy();
        echo "<script>alert('$_SESSION[adm_name] Berhasil Logout');document.location='$admin_url';</script>";
        break;*/

  case 'dashboard':
  $judul = "Ubet | Dashboard";  
  require 'view/h.php';
  require 'view/nav.php';
  require 'view/body.php';
  require 'view/f.php';
  break;

  /*case 'daftar':
  $judul = "Ubet | Daftar";  
  require 'view/signup.php';
  break; */ 

break;  
}
?> 