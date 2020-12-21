<?php
include_once '../../../utils/config.php';

$json = array();

switch ($_SERVER['REQUEST_METHOD']) {
  case 'POST':
    //DELETE
  if(isset($_POST['delete_id']) && $_POST['delete_id']){

    $deleteid = $admin_fun->htmlvalidation($_POST['delete_id']);

    $condition['id_prov'] = $deleteid;
    $delete_rec = $admin_fun->delete("provinsi",$condition);
    
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
  if(isset($_POST['id_prov']) && isset($_POST['name_prov'])){

    $id_prov = $admin_fun->htmlvalidation($_POST['id_prov']);
    $name_prov = $admin_fun->htmlvalidation($_POST['name_prov']);

    if((!preg_match('/^[ ]*$/', $id_prov)) && (!preg_match('/^[ ]*$/', $name_prov))){

      $field_val['id_prov'] = $id_prov;
      $field_val['nm_prov'] = $name_prov;

      $insert = $admin_fun->insert("provinsi", $field_val);

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

      if(preg_match('/^[ ]*$/', $id_prov)){

        $json['status'] = 110;
        $json['msg'] = "Please Enter ID Provinsi";

      }

      if(preg_match('/^[ ]*$/', $name_prov)){

        $json['status'] = 111;
        $json['msg'] = "Please Enter Name Provinsi";

      }

    }

  }

  //UPDATE MODAL
  if(isset($_POST['u_name_prov']) && isset($_POST['dataval'])){

    $name_prov = $admin_fun->htmlvalidation($_POST['u_name_prov']);
    $update_id = $admin_fun->htmlvalidation($_POST['dataval']);

    if((!preg_match('/^[ ]*$/', $name_prov))){

      $condition['id_prov'] = $update_id;

      $field_val['nm_prov'] = $name_prov;

      $update = $admin_fun->update("provinsi", $field_val, $condition);

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
      if(preg_match('/^[ ]*$/', $name_prov)){

        $json['status'] = 110;
        $json['msg'] = "Please Enter Name Provinsi";

      }

    }

  }
    break;

    case 'GET':
    if(isset($_GET['checkid']) && $_GET['checkid']){

    $update_ch_id = $admin_fun->htmlvalidation($_GET['checkid']);

    $condition0['id_prov'] = $update_ch_id;
    $select_pre = $admin_fun->select_assoc("provinsi", $condition0);

    if($select_pre){

      $json['status'] = 0;
      $json['nmProv'] = $select_pre['nm_prov'];
      $json['msg'] = "Success";

    }
    else{

      $json['status'] = 1;
      $json['nmProv'] = "NULL";
      $json['msg'] = "Fail";

    }

  }
  else{
      $json['status'] = 2;
      $json['nmProv'] = "NULL";
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