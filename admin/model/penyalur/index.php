<main class="main-content bgc-grey-100">
	<div id="mainContent">
		<div class="container-fluid">
			<h4 class="c-grey-900 mT-10 mB-30">Data Penyalur</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="bgc-white bd bdrs-3 p-20 mB-20" id="tbl_rec">

					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<!-- Insert Design Modal -->

        <div class="modal fade" id="ModalInsert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="POST" id="ins_rec" enctype="multipart/form-data" novalidate>
                <div class="modal-body">
                  	<div class="row">
                  		<div class="col-md-6 mb-3">
                  			<label><b>Nama Yayasan</b></label> 
                  			<input type="text" class="form-control" name="namaYayasan" placeholder="Nama Yayasan" required>
                  			<div class="invalid-feedback">Please provide a valid institution.</div>
                  		</div>
                  		<div class="col-md-6 mb-3">
                  			<label><b>Nama Penyalur</b></label> 
                  			<input type="text" class="form-control" name="namaPenyalur" placeholder="Nama Penyalur" required>
                  			<div class="invalid-feedback">Please provide a valid distributor.</div>
                  		</div>
                  	</div>
                  	<div class="row">
                  		<div class="col-md-4 mb-3">
                  			<label><b>No. Telepon</b></label> 
                  			<input type="text" class="form-control" name="noTelepon" placeholder="No. Telepon" required>
                  			<div class="invalid-feedback">Please provide a valid number phone.</div>
                  		</div>
                  		<div class="col-md-4 mb-3">
                  			<label><b>Email</b></label> 
                  			<input type="email" class="form-control" name="email" placeholder="Email" required>
                  			<div class="invalid-feedback">Please provide a valid email.</div>
                  		</div>
                  		<div class="col-md-4 mb-3">
                  			<label><b>Password</b></label> 
                  			<input type="password" class="form-control" name="password" placeholder="Password" required>
                  			<div class="invalid-feedback">Please provide a valid password.</div>
                  		</div>
                  	</div>
                  	<div class="row">
                  		<div class="col-md-3 mb-3">
                  			<label><b>Provinsi</b></label> 
                  			<select class="form-control" name="provinsi" id="provinsi"></select>
                  			<div class="invalid-feedback">Please provide a valid province.</div>
                  		</div>
                  		<div class="col-md-3 mb-3">
                  			<label><b>Kabupaten</b></label> 
                  			<select class="form-control" name="kabupaten" id="kabupaten"></select>
                  			<div class="invalid-feedback">Please provide a valid districts.</div>
                  		</div>
                  		<div class="col-md-3 mb-3">
                  			<label><b>Kecamatan</b></label> 
                  			<select class="form-control" name="kecamatan" id="kecamatan"></select>
                  			<div class="invalid-feedback">Please provide a valid sub-districts.</div>
                  		</div>
                  		<div class="col-md-3 mb-3">
                  			<label><b>Kode Pos</b></label> 
                  			<input type="number" class="form-control" placeholder="Kode Pos">
                  			<div class="invalid-feedback">Please provide a valid zip.</div>
                  		</div>
                  	</div>
                    <!-- <div class="row">
                      <div class="col-md-4 mb-3">
                        <label><b>Foto Profil</b></label> 
                        <input type="file" name="potoProfil" class="dropify" required>
                        <div class="invalid-feedback">Please provide a valid photo profile.</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label><b>Logo</b></label> 
                        <input type="file" name="logo" class="dropify" required>
                        <div class="invalid-feedback">Please provide a valid logo.</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label><b>Surat Izin</b></label> 
                        <input type="file" name="suratIzin" class="dropify" required>
                        <div class="invalid-feedback">Please provide a valid surat izin.</div>
                      </div>
                    </div> -->
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <label><b>Set. Gaji</b></label> 
                        <input type="number" class="form-control" name="setGaji" placeholder="Set. Gaji">
                        <div class="invalid-feedback">Please provide a valid fee.</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label><b>Bank</b></label> 
                        <select class="form-control" name="bank">
                          <option>Pilih Bank</option>
                          <option value="BCA">BCA</option>
                          <option value="BNI">BNI</option>
                          <option value="BRI">BRI</option>
                          <option value="Mandiri">Mandiri</option>
                          <option value="Muamalat">Muamalat</option>
                        </select>
                        <div class="invalid-feedback">Please provide a valid bank name.</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label><b>No. Rekening</b></label> 
                        <input type="text" class="form-control" name="noRekening" placeholder="No. Rekening">
                        <div class="invalid-feedback">Please provide a valid no. account.</div>
                      </div>
                    </div>
                  <div class="form-group">
                  	<span class="error-msg"  id="er_msg"></span>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="close_click" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Add Record</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- End Insert Modal -->

      <!-- Update Design Modal -->
      <div class="modal fade" id="updateModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="updateModalCenterTitle">Update Record</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" id="updata">
              <div class="modal-body">
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label><b>Nama Yayasan</b></label> 
                        <input type="text" class="form-control" name="u_namaYayasan" id="upd_1" placeholder="Nama Yayasan" required>
                        <div class="invalid-feedback">Please provide a valid institution.</div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label><b>Nama Penyalur</b></label> 
                        <input type="text" class="form-control" name="u_namaPenyalur" id="upd_2" placeholder="Nama Penyalur" required>
                        <div class="invalid-feedback">Please provide a valid distributor.</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <label><b>No. Telepon</b></label> 
                        <input type="text" class="form-control" name="u_noTelepon" id="upd_3" placeholder="No. Telepon" required>
                        <div class="invalid-feedback">Please provide a valid number phone.</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label><b>Email</b></label> 
                        <input type="email" class="form-control" name="u_email" id="upd_4" placeholder="Email" required>
                        <div class="invalid-feedback">Please provide a valid email.</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label><b>Password</b></label> 
                        <input type="password" class="form-control" name="u_password" id="upd_5" placeholder="Password" required>
                        <div class="invalid-feedback">Please provide a valid password.</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label><b>Provinsi</b></label> 
                        <select class="form-control" name="u_provinsi" id="u_provinsi"></select>
                        <div class="invalid-feedback">Please provide a valid province.</div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label><b>Kabupaten</b></label> 
                        <select class="form-control" name="u_kabupaten" id="u_kabupaten"></select>
                        <div class="invalid-feedback">Please provide a valid districts.</div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label><b>Kecamatan</b></label> 
                        <select class="form-control" name="u_kecamatan" id="u_kecamatan"></select>
                        <div class="invalid-feedback">Please provide a valid sub-districts.</div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label><b>Kode Pos</b></label> 
                        <input type="number" class="form-control" name="u_kodePos" id="upd_6" placeholder="Kode Pos">
                        <div class="invalid-feedback">Please provide a valid zip.</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <label><b>Set. Gaji</b></label> 
                        <input type="number" class="form-control" name="u_setGaji" id="upd_7" placeholder="Set. Gaji">
                        <div class="invalid-feedback">Please provide a valid fee.</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label><b>Bank</b></label> 
                        <select class="form-control" name="u_bank" id="upd_8">
                          <option>Pilih Bank</option>
                          <option value="BCA">BCA</option>
                          <option value="BNI">BNI</option>
                          <option value="BRI">BRI</option>
                          <option value="Mandiri">Mandiri</option>
                          <option value="Muamalat">Muamalat</option>
                        </select>
                        <div class="invalid-feedback">Please provide a valid bank name.</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label><b>No. Rekening</b></label> 
                        <input type="text" class="form-control" name="u_noRekening" id="upd_9" placeholder="No. Rekening">
                        <div class="invalid-feedback">Please provide a valid no. account.</div>
                      </div>
                    </div>
                  <div class="form-group">
                    <input type="hidden" name="dataval" id="upd_id">
                    <span class="error-msg"  id="er_msg"></span>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="up_cancle">Cancel</button>
                <button type="submit" class="btn btn-primary">Update Record</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- End Update Design Modal -->

      <!-- Upload Design Modal -->
      <div class="modal fade" id="uploadModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="updateModalCenterTitle">Update Record</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" id="upload">
              <div class="modal-body">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <label><b>Foto Profil</b></label> 
                        <input type="file" name="potoProfil" class="dropify" required>
                        <div class="invalid-feedback">Please provide a valid photo profile.</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label><b>Logo</b></label> 
                        <input type="file" name="logo" class="dropify" required>
                        <div class="invalid-feedback">Please provide a valid logo.</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label><b>Surat Izin</b></label> 
                        <input type="file" name="suratIzin" class="dropify" required>
                        <div class="invalid-feedback">Please provide a valid surat izin.</div>
                      </div>
                    </div>
                  <div class="form-group">
                    <input type="hidden" name="dataval" id="up_id">
                    <span class="error-msg"  id="er_msg"></span>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="up_canc">Cancel</button>
                <button type="submit" class="btn btn-primary">Update Record</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- End Upload Design Modal -->

<script type="text/javascript">
  
$(document).ready(function (){
//$('.dropify').dropify();
    //insert Record

    $('#tbl_rec').load('<?php echo $admin_url ?>model/penyalur/v.php');

    $('#ins_rec').on("submit", function(e){
      e.preventDefault();
      $.ajax({

        type:'POST',
        url:'<?php echo $admin_url ?>controller/penyalur_control.php',
        data:$(this).serialize(),
        success:function(vardata){

          var json = JSON.parse(vardata);

          if(json.status == 101){
            console.log(json.msg);
            Swal.fire({
              title: "Inserted!",
              text: "Your post has been Inserted.",
              type: "success"
            }
            );
            $('#tbl_rec').load('<?php echo $admin_url ?>model/penyalur/v.php');
            $('#ins_rec').trigger('reset');
            $('#close_click').trigger('click');
          }
          else if(json.status == 102){
            $('#er_msg').text(json.msg);
            console.log(json.msg);
          }
          else{
            console.log(json.msg);
          }

        }

      });

    });

    //select data

    $(document).on("click", "button.editdata", function(){
      var check_id = $(this).data('id');
      $.getJSON("<?php echo $admin_url ?>controller/penyalur_control.php", {checkid : check_id}, function(json){
       if(json.status == 0){
        $('#upd_1').val(json.nmYayasan);
        $('#upd_2').val(json.nmPenyalur);
        $('#upd_3').val(json.noTelp);
        $('#upd_4').val(json.email);
        $('#upd_5').val(json.password);
        $('#upd_id').val(check_id);
      }
      else{
        console.log(json.msg);
      }
    });
    });

	//Update Record

	$('#updata').on("submit", function(e){
		e.preventDefault();

		$.ajax({

			type:'POST',
			url:'<?php echo $admin_url ?>controller/penyalur_control.php',
			data:$(this).serialize(),
			success:function(vardata){

				var json = JSON.parse(vardata);

				if(json.status == 101){
					console.log(json.msg);
					Swal.fire({
            title: "Updated!",
            text: "Your post has been Updated.",
            type: "success"
          }
          );
					$('#tbl_rec').load('<?php echo $admin_url ?>model/penyalur/v.php');
					$('#ins_rec').trigger('reset');
					$('#up_cancle').trigger('click');
				}
        else if(json.status == 102){
          $('#umsg_2').text(json.msg);
          console.log(json.msg);
        }
        else if(json.status == 110){
          $('#umsg_1').text(json.msg);
          console.log(json.msg);
        }

        else{
          console.log(json.msg);
        }

      }

    });

	});

	//Delete Record

  window.onload = function(e){

    $(document).on('click', 'button.deletedata', function(e){
     var dataId = $(this).data('id');
     var parent = $(this).parent("td").parent("tr");
     SwalDelete(dataId,parent);
     e.preventDefault();
   });

    $(document).on('click', 'button.activeacc', function(e){
     var dataId = $(this).data('id');
     SwalActivate(dataId);
     e.preventDefault();
   });

    $(document).on('click', 'button.deactiveacc', function(e){
     var dataId = $(this).data('id');
     SwalDeactivate(dataId);
     e.preventDefault();
   });

  };

  function SwalDelete(dataId,parent){

    Swal.fire({
     title: 'Are you sure?',
     text: "You won't be able to revert this!",
     type: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Yes, delete it!',
     showLoaderOnConfirm: true,

     preConfirm: function() {
       return new Promise(function(resolve) {

        $.ajax({
          url: '<?php echo $admin_url ?>controller/penyalur_control.php',
          type: 'POST',
          data: {delete_id : dataId},
               //dataType: 'json'
             })
        .done(function(response){
          var json = JSON.parse(response);
         Swal.fire({
          title: "Deleted!",
          text: "Your post has been deleted.",
          type: "success"
        }
        );
         console.log(json.msg);
       }).then(function () {
        parent.fadeOut('slow');
      })
     });
     },
     allowOutsideClick: false     
   }); 

  }

  function SwalActivate(dataId){

    Swal.fire({
     title: 'Are you sure?',
     text: "You want to activate this account!",
     type: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Yes, activate it!',
     showLoaderOnConfirm: true,

     preConfirm: function() {
       return new Promise(function(resolve) {

        $.ajax({
          url: '<?php echo $admin_url ?>controller/penyalur_control.php',
          type: 'POST',
          data: {active_id : dataId},
               //dataType: 'json'
             })
        .done(function(response){
          var json = JSON.parse(response);
         Swal.fire({
          title: "Activated!",
          text: "Your account has been activated.",
          type: "success"
        }
        );
         console.log(json.msg);
       }).then(function () {
        //parent.fadeOut('slow');
        $('#tbl_rec').load('<?php echo $admin_url ?>model/penyalur/v.php');
      })
     });
     },
     allowOutsideClick: false     
   }); 

  }

  function SwalDeactivate(dataId){

    Swal.fire({
     title: 'Are you sure?',
     text: "You want to deactivate this account!",
     type: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Yes, deactivate it!',
     showLoaderOnConfirm: true,

     preConfirm: function() {
       return new Promise(function(resolve) {

        $.ajax({
          url: '<?php echo $admin_url ?>controller/penyalur_control.php',
          type: 'POST',
          data: {active_id : dataId},
               //dataType: 'json'
             })
        .done(function(response){
          var json = JSON.parse(response);
         Swal.fire({
          title: "Dectivated!",
          text: "Your account has been deactivated.",
          type: "success"
        }
        );
         console.log(json.msg);
       }).then(function () {
        //parent.fadeOut('slow');
        $('#tbl_rec').load('<?php echo $admin_url ?>model/penyalur/v.php');
      })
     });
     },
     allowOutsideClick: false     
   }); 

  }

});

</script>

<script>!function(){"use strict";window.addEventListener("load",function(){var e=document.getElementById("ins_rec");e.addEventListener("submit",function(t){!1===e.checkValidity()&&(t.preventDefault(),t.stopPropagation()),e.classList.add("was-validated")},!1)},!1)}()</script>

<script type="text/javascript">
	$(document).ready(function(){
      	$.ajax({
            type: 'POST',
          	url: "<?php echo $admin_url ?>controller/daerah/get_provinsi.php",
          	cache: false, 
          	success: function(msg){
              $("#provinsi").html(msg);
            }
        });
 
      	$("#provinsi").change(function(){
      	var provinsi = $("#provinsi").val();
          	$.ajax({
          		type: 'POST',
              	url: "<?php echo $admin_url ?>controller/daerah/get_kabupaten.php",
              	data: {provinsi: provinsi},
              	cache: false,
              	success: function(msg){
                  $("#kabupaten").html(msg);
                }
            });
        });
 
        $("#kabupaten").change(function(){
      	var kabupaten = $("#kabupaten").val();
          	$.ajax({
          		type: 'POST',
              	url: "<?php echo $admin_url ?>controller/daerah/get_kecamatan.php",
              	data: {kabupaten: kabupaten},
              	cache: false,
              	success: function(msg){
                  $("#kecamatan").html(msg);
                }
            });
        });
 
     });
</script>