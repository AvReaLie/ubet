<?php
include_once '../../../utils/config.php';

$json = array();

switch ($_SERVER['REQUEST_METHOD']) {
  case 'POST':
    //DELETE
  if(isset($_POST['delete_id']) && $_POST['delete_id']){

    $deleteid = $admin_fun->htmlvalidation($_POST['delete_id']);

    $condition['id_kab'] = $deleteid;
    $delete_rec = $admin_fun->delete("kabupaten",$condition);
    
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
  if(isset($_POST['id_prov']) && isset($_POST['id_kab']) && isset($_POST['name_kab'])){

    $id_prov = $admin_fun->htmlvalidation($_POST['id_prov']);
    $id_kab = $admin_fun->htmlvalidation($_POST['id_kab']);
    $name_kab = $admin_fun->htmlvalidation($_POST['name_kab']);

    if((!preg_match('/^[ ]*$/', $id_prov)) && (!preg_match('/^[ ]*$/', $id_kab)) && (!preg_match('/^[ ]*$/', $name_kab))){

      $field_val['id_prov'] = $id_prov;
      $field_val['id_kab'] = $id_kab;
      $field_val['nm_kab'] = $name_kab;

      $insert = $admin_fun->insert("kabupaten", $field_val);

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
        $json['msg'] = "Please Choice ID Provinsi";

      }

      if(preg_match('/^[ ]*$/', $id_kab)){

        $json['status'] = 111;
        $json['msg'] = "Please Enter ID Kabupaten";

      }

      if(preg_match('/^[ ]*$/', $name_kab)){

        $json['status'] = 112;
        $json['msg'] = "Please Enter Name Kabupaten";

      }

    }

  }

  //UPDATE MODAL
  if(isset($_POST['u_id_prov']) && isset($_POST['u_name_kab']) && isset($_POST['dataval'])){

    $id_prov = $admin_fun->htmlvalidation($_POST['u_id_prov']);
    $name_kab = $admin_fun->htmlvalidation($_POST['u_name_kab']);
    $update_id = $admin_fun->htmlvalidation($_POST['dataval']);

    if((!preg_match('/^[ ]*$/', $id_prov)) && (!preg_match('/^[ ]*$/', $name_kab))){

      $condition['id_kab'] = $update_id;

      $field_val['id_prov'] = $id_prov;
      $field_val['nm_kab'] = $name_kab;

      $update = $admin_fun->update("kabupaten", $field_val, $condition);

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
      if(preg_match('/^[ ]*$/', $id_prov)){

        $json['status'] = 110;
        $json['msg'] = "Please Choice ID Provinsi";

      }

      if(preg_match('/^[ ]*$/', $name_kab)){

        $json['status'] = 111;
        $json['msg'] = "Please Enter Name Kabupaten";

      }

    }

  }
    break;

    case 'GET':
    if(isset($_GET['checkid']) && $_GET['checkid']){

    $update_ch_id = $admin_fun->htmlvalidation($_GET['checkid']);

    $condition0['id_kab'] = $update_ch_id;
    $select_pre = $admin_fun->select_assoc("kabupaten", $condition0);

    if($select_pre){

      $json['status'] = 0;
      $json['idProv'] = $select_pre['id_prov'];
      $json['nmKab'] = $select_pre['nm_kab'];
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