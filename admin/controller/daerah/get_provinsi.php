<?php
	include_once '../../../utils/config.php';
 
	echo "<option value=''>Pilih Provinsi</option>";

	$select = $admin_fun->select("provinsi");
	foreach($select as $se_data){
		echo "<option value='" . $se_data['id_prov'] . "'>" . $se_data['nm_prov'] . "</option>";
	}
?>