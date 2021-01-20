<?php
include_once '../../utils/config.php';

$json = array();

switch ($_SERVER['REQUEST_METHOD']) {

  case 'POST':
  //INSERT MODAL
  if(isset($_POST['userName']) && isset($_POST['emailAddr']) && isset($_POST['passWord'])){

    $userName = $admin_fun->htmlvalidation($_POST['userName']);
    $emailAddr = $admin_fun->htmlvalidation($_POST['emailAddr']);
    $passWord = $admin_fun->htmlvalidation($_POST['passWord']);

    if((!preg_match('/^[ ]*$/', $userName)) && (!preg_match('/^[ ]*$/', $emailAddr)) && (!preg_match('/^[ ]*$/', $passWord))){

      $field_val['name'] = $userName;
      $field_val['email'] = $emailAddr;
      $field_val['password'] = $passWord;

      $insert = $admin_fun->insert("admin", $field_val);

      if($insert){
        $json['status'] = 101;
        $json['msg'] = "Data Successfully Inserted";
      }
      else{
        $json['status'] = 102;
        $json['msg'] = "Data Not Inserted";
      }

    }

  }

    break;
  
  default:
    $json['status'] = 130;
    $json['msg'] = "Invalid Method Found";
    break;
}

echo json_encode($json);

?>