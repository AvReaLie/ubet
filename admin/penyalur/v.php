<script type="text/javascript">
	$(document).ready(function (){
		$('#table_id').dataTable();
	});
</script>						

						<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>No.</th>
									<th>Yayasan</th>
									<th>Nm. Penyalur</th>
									<th>No. Telepon</th>
									<th>Email</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>No.</th>
									<th>Yayasan</th>
									<th>Nm. Penyalur</th>
									<th>No. Telepon</th>
									<th>Email</th>
									<th>Aksi</th>
								</tr>
							</tfoot>
							<tbody>
<?php
$counter = 1;
include_once '../../../utils/config.php';
$admin_fun = new Adminfunction();
$select = $admin_fun->select("penyalur");
if($select){ foreach($select as $se_data){
?>                
                <tr>
                  <td><?php echo $counter; $counter++; ?></td>
                  <td><?php echo $se_data['nm_yayasan']; ?></td>
                  <td><?php echo $se_data['nm_penyalur']; ?></td>
                  <td><?php echo $se_data['no_tlp_p']; ?></td>
                  <td><?php echo $se_data['email_p']; ?></td>
                  <td>
                    <button type="button" class="btn btn-rounded btn-success btn-sm editdata" data-id="<?php echo $se_data['id_penyalur']; ?>" data-toggle="modal" data-target="#updateModalCenter">Edit <i class="fa fa-pencil"></i></button>
                            <button type="button" class="btn btn-rounded btn-danger btn-sm deletedata" data-id="<?php echo $se_data['id_penyalur']; ?>">Hapus <i class="fa fa-trash"></i></button>
                  </td>
                </tr>
<?php }}else{ } ?>
							</tbody>
						</table>