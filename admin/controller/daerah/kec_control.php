<?php
include_once '../../../utils/config.php';

$json = array();

switch ($_SERVER['REQUEST_METHOD']) {
  case 'POST':
    //DELETE
  if(isset($_POST['delete_id']) && $_POST['delete_id']){

    $deleteid = $admin_fun->htmlvalidation($_POST['delete_id']);

    $condition['id_kec'] = $deleteid;
    $delete_rec = $admin_fun->delete("kecamatan",$condition);
    
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
  if(isset($_POST['id_kab']) && isset($_POST['id_kec']) && isset($_POST['name_kec'])){

    $id_kab = $admin_fun->htmlvalidation($_POST['id_kab']);
    $id_kec = $admin_fun->htmlvalidation($_POST['id_kec']);
    $name_kec = $admin_fun->htmlvalidation($_POST['name_kec']);

    if((!preg_match('/^[ ]*$/', $id_kab)) && (!preg_match('/^[ ]*$/', $id_kec)) && (!preg_match('/^[ ]*$/', $name_kec))){

      $field_val['id_kab'] = $id_kab;
      $field_val['id_kec'] = $id_kec;
      $field_val['nm_kec'] = $name_kec;

      $insert = $admin_fun->insert("kecamatan", $field_val);

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

      if(preg_match('/^[ ]*$/', $id_kab)){

        $json['status'] = 110;
        $json['msg'] = "Please Choice ID Kabupaten";

      }

      if(preg_match('/^[ ]*$/', $id_kec)){

        $json['status'] = 111;
        $json['msg'] = "Please Enter ID Kecamatan";

      }

      if(preg_match('/^[ ]*$/', $name_kec)){

        $json['status'] = 112;
        $json['msg'] = "Please Enter Name Kecamatan";

      }

    }

  }

  //UPDATE MODAL
  if(isset($_POST['u_id_kab']) && isset($_POST['u_name_kec']) && isset($_POST['dataval'])){

    $id_kab = $admin_fun->htmlvalidation($_POST['u_id_kab']);
    $name_kec = $admin_fun->htmlvalidation($_POST['u_name_kec']);
    $update_id = $admin_fun->htmlvalidation($_POST['dataval']);

    if((!preg_match('/^[ ]*$/', $id_kab)) && (!preg_match('/^[ ]*$/', $name_kec))){

      $condition['id_kec'] = $update_id;

      $field_val['id_kab'] = $id_kab;
      $field_val['nm_kec'] = $name_kec;

      $update = $admin_fun->update("kecamatan", $field_val, $condition);

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
      if(preg_match('/^[ ]*$/', $id_kab)){

        $json['status'] = 110;
        $json['msg'] = "Please Choice ID Kabupaten";

      }

      if(preg_match('/^[ ]*$/', $name_kec)){

        $json['status'] = 111;
        $json['msg'] = "Please Enter Name Kecamatan";

      }

    }

  }
    break;

    case 'GET':
    if(isset($_GET['checkid']) && $_GET['checkid']){

    $update_ch_id = $admin_fun->htmlvalidation($_GET['checkid']);

    $condition0['id_kec'] = $update_ch_id;
    $select_pre = $admin_fun->select_assoc("kecamatan", $condition0);

    if($select_pre){

      $json['status'] = 0;
      $json['idKab'] = $select_pre['id_kab'];
      $json['nmKec'] = $select_pre['nm_kec'];
      $json['msg'] = "Success";

    }
    else{

      $json['status'] = 1;
      $json['idProv'] = "NULL";
      $json['nmKab'] = "NULL";
      $json['msg'] = "Fail";

    }

  }
  else{
      $json['status'] = 2;
      $json['idProv'] = "NULL";
      $json['nmKab'] = "NULL";
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