<main class="main-content bgc-grey-100">
	<div id="mainContent">
		<div class="container-fluid">
			<h4 class="c-grey-900 mT-10 mB-30">Data Penyalur</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="bgc-white bd bdrs-3 p-20 mB-20" id="tbl_rec">
						<button style="padding: 5px; margin-right: 15px; margin-bottom: 10px;" type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#ModalInsert">Tambah data <i class="fa fa-plus"></i></button> 

					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<script type="text/javascript">
    $(document).ready(function (){

    //insert Record

    $('#tbl_rec').load('<?php echo $admin_url ?>model/penyalur/v.php');

});

</script>

