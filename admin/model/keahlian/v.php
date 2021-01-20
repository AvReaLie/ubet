<script type="text/javascript">
	$(document).ready(function (){
		$('#table_id').dataTable();
	});
</script>						
<button style="padding: 5px; margin-right: 15px; margin-bottom: 10px;" type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#ModalInsert">Tambah data <i class="fa fa-plus"></i></button> 
						<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>ID.</th>
									<th>Keahlian</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>ID.</th>
									<th>Keahlian</th>
									<th>Aksi</th>
								</tr>
							</tfoot>
							<tbody>
<?php
$counter = 1;
include_once '../../../utils/config.php';
$select = $admin_fun->select("keahlian");
if($select){ foreach($select as $se_data){
?>                
                <tr>
                  <td><?php echo $se_data['id_keahlian']; ?></td>
                  <td><?php echo $se_data['nm_keahlian']; ?></td>
                  <td>
                    <button type="button" class="btn btn-rounded btn-success btn-sm editdata" data-id="<?php echo $se_data['id_keahlian']; ?>" data-toggle="modal" data-target="#updateModalCenter">Edit <i class="fa fa-pencil"></i></button>
                            <button type="button" class="btn btn-rounded btn-danger btn-sm deletedata" data-id="<?php echo $se_data['id_keahlian']; ?>">Hapus <i class="fa fa-trash"></i></button>
                  </td>
                </tr>
<?php }}else{ } ?>
							</tbody>
						</table>