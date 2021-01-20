<?php
include_once '../../utils/config.php';

$json = array();

switch ($_SERVER['REQUEST_METHOD']) {
  case 'POST':
    //DELETE
  if(isset($_POST['delete_id']) && $_POST['delete_id']){

    $deleteid = $admin_fun->htmlvalidation($_POST['delete_id']);

    $condition['id_penyalur'] = $deleteid;
    $delete_rec = $admin_fun->delete("penyalur",$condition);
    
    if($delete_rec){
      $json['status'] = 0;
      $json['msg'] = "SuccessFully Deleted";
    }
    else{
      $json['status'] = 1;
      $json['msg'] = "Data Not Deleted";
    }

  }

  if(isset($_POST['active_id']) && $_POST['active_id']){

    $activeid = $admin_fun->htmlvalidation($_POST['active_id']);

    $condition['id_penyalur'] = $activeid;
    $field_act['status_p'] = 1;
    $field_dea['status_p'] = 0;

    $select_pre = $admin_fun->select_assoc("penyalur", $condition);

    if($select_pre['status_p'] == 0){
      $active_rec = $admin_fun->update("penyalur", $field_act, $condition);
    } else if($select_pre['status_p'] == 1){
      $active_rec = $admin_fun->update("penyalur", $field_dea, $condition);
    }
    
    if($active_rec){
      $json['status'] = 0;
      $json['msg'] = "Data Successfully Activated";
    }
    else{
      $json['status'] = 1;
      $json['msg'] = "Data Not Activated";
    }

  }


  //INSERT MODAL
  if(isset($_POST['namaYayasan']) && isset($_POST['namaPenyalur']) && isset($_POST['noTelepon']) && isset($_POST['email']) && isset($_POST['password'])){

    $namaYayasan = $admin_fun->htmlvalidation($_POST['namaYayasan']);
    $namaPenyalur = $admin_fun->htmlvalidation($_POST['namaPenyalur']);
    $noTelepon = $admin_fun->htmlvalidation($_POST['noTelepon']);
    $email = $admin_fun->htmlvalidation($_POST['email']);
    $password = $admin_fun->htmlvalidation($_POST['password']);

    if((!preg_match('/^[ ]*$/', $namaYayasan)) && (!preg_match('/^[ ]*$/', $namaPenyalur)) && (!preg_match('/^[ ]*$/', $noTelepon)) && (!preg_match('/^[ ]*$/', $email)) && (!preg_match('/^[ ]*$/', $password))){

      $field_val['id_penyalur'] = 'PID-'. date('dmyHis');
      $field_val['nm_yayasan'] = $namaYayasan;
      $field_val['nm_penyalur'] = $namaPenyalur;
      $field_val['no_tlp_p'] = $noTelepon;
      $field_val['email_p'] = $email;
      $field_val['password_p'] = $password;

      $insert = $admin_fun->insert("penyalur", $field_val);

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

  //UPDATE MODAL
  if(isset($_POST['u_namaYayasan']) && isset($_POST['u_namaPenyalur']) && isset($_POST['u_noTelepon']) && isset($_POST['u_email']) && isset($_POST['u_password']) && isset($_POST['dataval'])){

    $namaYayasan = $admin_fun->htmlvalidation($_POST['u_namaYayasan']);
    $namaPenyalur = $admin_fun->htmlvalidation($_POST['u_namaPenyalur']);
    $noTelepon = $admin_fun->htmlvalidation($_POST['u_noTelepon']);
    $email = $admin_fun->htmlvalidation($_POST['u_email']);
    $password = $admin_fun->htmlvalidation($_POST['u_password']);
    $update_id = $admin_fun->htmlvalidation($_POST['dataval']);

    if((!preg_match('/^[ ]*$/', $namaYayasan)) && (!preg_match('/^[ ]*$/', $namaPenyalur)) && (!preg_match('/^[ ]*$/', $noTelepon)) && (!preg_match('/^[ ]*$/', $email)) && (!preg_match('/^[ ]*$/', $password))){

      $condition['id_penyalur'] = $update_id;

      $field_val['nm_yayasan'] = $namaYayasan;
      $field_val['nm_penyalur'] = $namaPenyalur;
      $field_val['no_tlp_p'] = $noTelepon;
      $field_val['email_p'] = $email;
      $field_val['password_p'] = $password;

      $update = $admin_fun->update("penyalur", $field_val, $condition);

      if($update){
        $json['status'] = 101;
        $json['msg'] = "Data Successfully Updated";
      }
      else{
        $json['status'] = 102;
        $json['msg'] = "Data Not Updated";
      }

    }

  }
    break;

    case 'GET':
    if(isset($_GET['checkid']) && $_GET['checkid']){

    $update_ch_id = $admin_fun->htmlvalidation($_GET['checkid']);

    $condition0['id_penyalur'] = $update_ch_id;
    $select_pre = $admin_fun->select_assoc("penyalur", $condition0);

    if($select_pre){

      $json['status'] = 0;
      $json['nmYayasan'] = $select_pre['nm_yayasan'];
      $json['nmPenyalur'] = $select_pre['nm_penyalur'];
      $json['noTelp'] = $select_pre['no_tlp_p'];
      $json['email'] = $select_pre['email_p'];
      $json['password'] = $select_pre['password_p'];
      $json['msg'] = "Success";

    }
    else{

      $json['status'] = 1;
      $json['nmYayasan'] = "NULL";
      $json['nmPenyalur'] = "NULL";
      $json['noTelp'] = "NULL";
      $json['email'] = "NULL";
      $json['password'] = "NULL";
      $json['msg'] = "Fail";

    }

  }
  else{
      $json['status'] = 2;
      $json['nmYayasan'] = "NULL";
      $json['nmPenyalur'] = "NULL";
      $json['noTelp'] = "NULL";
      $json['email'] = "NULL";
      $json['password'] = "NULL";
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