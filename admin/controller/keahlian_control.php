<?php
include_once '../../utils/config.php';

$json = array();

switch ($_SERVER['REQUEST_METHOD']) {
  case 'POST':
    //DELETE
  if(isset($_POST['delete_id']) && $_POST['delete_id']){

    $deleteid = $admin_fun->htmlvalidation($_POST['delete_id']);

    $condition['id_keahlian'] = $deleteid;
    $delete_rec = $admin_fun->delete("keahlian",$condition);
    
    if($delete_rec){
      $json['status'] = 0;
      $json['msg'] = "SuccessFully Deleted";
    }
    else{
      $json['status'] = 1;
      $json['msg'] = "Data Not Deleted";
    }

  }

  //INSERT MODAL
  if(isset($_POST['idKeahlian']) && isset($_POST['namaKeahlian'])){

    $idKeahlian = $admin_fun->htmlvalidation($_POST['idKeahlian']);
    $namaKeahlian = $admin_fun->htmlvalidation($_POST['namaKeahlian']);

    if((!preg_match('/^[ ]*$/', $idKeahlian)) && (!preg_match('/^[ ]*$/', $namaKeahlian))){

      $field_val['id_keahlian'] = $idKeahlian;
      $field_val['nm_keahlian'] = $namaKeahlian;

      $insert = $admin_fun->insert("keahlian", $field_val);

      if($insert){
        $json['status'] = 101;
        $json['msg'] = "Data Successfully Inserted";
      }
      else{
        $json['status'] = 102;
        $json['msg'] = "Data Not Inserted";
      }

    }
    else{

      if(preg_match('/^[ ]*$/', $idKeahlian)){

        $json['status'] = 110;
        $json['msg'] = "Please Enter ID Keahlian";

      }

      if(preg_match('/^[ ]*$/', $namaKeahlian)){

        $json['status'] = 111;
        $json['msg'] = "Please Enter Name Keahlian";

      }

    }

  }

  //UPDATE MODAL
  if(isset($_POST['u_nama_keahlian']) && isset($_POST['dataval'])){

    $namaKeahlian = $admin_fun->htmlvalidation($_POST['u_nama_keahlian']);
    $update_id = $admin_fun->htmlvalidation($_POST['dataval']);

    if((!preg_match('/^[ ]*$/', $namaKeahlian))){

      $condition['id_keahlian'] = $update_id;

      $field_val['nm_keahlian'] = $namaKeahlian;

      $update = $admin_fun->update("keahlian", $field_val, $condition);

      if($update){
        $json['status'] = 101;
        $json['msg'] = "Data Successfully Updated";
      }
      else{
        $json['status'] = 102;
        $json['msg'] = "Data Not Updated";
      }

    }

    else{
      if(preg_match('/^[ ]*$/', $namaKeahlian)){

        $json['status'] = 110;
        $json['msg'] = "Please Enter Name Keahlian";

      }

    }

  }
    break;

    case 'GET':
    if(isset($_GET['checkid']) && $_GET['checkid']){

    $update_ch_id = $admin_fun->htmlvalidation($_GET['checkid']);

    $condition0['id_keahlian'] = $update_ch_id;
    $select_pre = $admin_fun->select_assoc("keahlian", $condition0);

    if($select_pre){

      $json['status'] = 0;
      $json['nmKeahlian'] = $select_pre['nm_keahlian'];
      $json['msg'] = "Success";

    }
    else{

      $json['status'] = 1;
      $json['nmKeahlian'] = "NULL";
      $json['msg'] = "Fail";

    }

  }
  else{
      $json['status'] = 2;
      $json['nmKeahlian'] = "NULL";
      $json['msg'] = "Invalid Values Passed";
  }
      break;
  
  default:
    $json['status'] = 111;
    $json['msg'] = "Invalid Method Found";
    break;
}

echo json_encode($json);

?>