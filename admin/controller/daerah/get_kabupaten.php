<?php
	include_once '../../../utils/config.php';
 
	echo "<option value=''>Pilih Kabupaten</option>";

	$condition1['id_prov'] = $_POST['provinsi'];;

	$select = $admin_fun->select_where("kabupaten", $condition1);
	foreach($select as $se_data){
		echo "<option value='" . $se_data['id_kab'] . "'>" . $se_data['nm_kab'] . "</option>";
	}
?>