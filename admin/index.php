<?php
session_start();
//require "../utils/config.php";
//error_reporting(E_ALL);
$login = $_REQUEST['cek'];
switch($login){
  default :

  	$judul = "Ubet | Masuk";
    require 'view/signin.php';

  break;

  case ''.md5('ceklogin').'':
        require 'controller/cek_control.php';
    break;
}
?>
