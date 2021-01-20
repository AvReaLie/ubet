<?php
	include_once '../../../utils/config.php';
 
	echo "<option value=''>Pilih Kecamatan</option>";

	$condition1['id_kab'] = $_POST['kabupaten'];;

	$select = $admin_fun->select_where("kecamatan", $condition1);
	foreach($select as $se_data){
		echo "<option value='" . $se_data['id_kec'] . "'>" . $se_data['nm_kec'] . "</option>";
	}
?>