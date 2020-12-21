<main class="main-content bgc-grey-100">
	<div id="mainContent">
		<div class="container-fluid">
			<h4 class="c-grey-900 mT-10 mB-30">Data Kabupaten</h4>
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
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="POST" id="ins_rec">
                <div class="modal-body">
                  <div class="form-group">
                    <label><b>Nama Provinsi</b></label>
                    <select type="select" name="id_prov" class="form-control" placeholder="Nama Provinsi">
                      <option value="" selected>-Pilih Provinsi-</option>
                      <?php
                      $select = $admin_fun->select("provinsi");
                      if($select){ foreach($select as $se_data){
                      ?>
                      <option value="<?=$se_data['id_prov'];?>"><?=$se_data['id_prov']." | ".$se_data['nm_prov'];?></option>
                      <?php }}else{ } ?>
                    </select>
                    <span class="error-msg" id="msg_1"></span>
                  </div>
                  <div class="form-group">
                  	<label><b>ID Kabupaten</b></label>
                  	<input type="number" name="id_kab" class="form-control" placeholder="ID Kabupaten">
                  	<span class="error-msg" id="msg_2"></span>
                  </div>
                  <div class="form-group">
                  	<label><b>Nama Kabupaten</b></label>
                  	<input type="text" name="name_kab" class="form-control" placeholder="Nama Kabupaten">
                  	<span class="error-msg" id="msg_3"></span>
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
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="updateModalCenterTitle">Update Record</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" id="updata">
              <div class="modal-body">
                <div class="form-group">
                  <label><b>Nama Provinsi</b></label>
                  <select type="select" name="u_id_prov" class="form-control" id="upd_1" placeholder="Nama Provinsi">
                    <?php
                    $select = $admin_fun->select("provinsi");
                    if($select){ foreach($select as $se_data){
                    ?>
                    <option value="<?=$se_data['id_prov'];?>"><?=$se_data['id_prov']." | ".$se_data['nm_prov'];?></option>
                    <?php }}else{ } ?>
                  </select>
                  <span class="error-msg" id="umsg_1"></span>
                </div>
                <div class="form-group">
                  <label><b>Nama Kabupaten</b></label>
                  <input type="text" class="form-control" name="u_name_kab" id="upd_2" placeholder="Nama Kabupaten">
                  <span class="error-msg" id="umsg_2"></span>
                </div>
                <div class="form-group">
                  <input type="hidden" name="dataval" id="upd_3">
                  <span class="error-msg"  id="umsg_3"></span>
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

      <script type="text/javascript">
        $(document).ready(function (){

    //insert Record

    $('#tbl_rec').load('<?php echo $admin_url ?>model/daerah/kabupaten/v.php');

    $('#ins_rec').on("submit", function(e){
      e.preventDefault();
      $.ajax({

        type:'POST',
        url:'<?php echo $admin_url ?>controller/daerah/kab_control.php',
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
            $('#tbl_rec').load('<?php echo $admin_url ?>model/daerah/kabupaten/v.php');
            $('#ins_rec').trigger('reset');
            $('#close_click').trigger('click');
          }
          else if(json.status == 102){
            $('#er_msg').text(json.msg);
            console.log(json.msg);
          }
          else if(json.status == 110){
            $('#msg_1').text(json.msg);
            console.log(json.msg);
          }
          else if(json.status == 111){
            $('#msg_2').text(json.msg);
            console.log(json.msg);
          }
          else if(json.status == 112){
            $('#msg_3').text(json.msg);
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
      $('#umsg_1').text("");
      var check_id = $(this).data('id');
      $.getJSON("<?php echo $admin_url ?>controller/daerah/kab_control.php", {checkid : check_id}, function(json){
       if(json.status == 0){
        $('#upd_1').val(json.idProv);
        $('#upd_2').val(json.nmKab);
        $('#upd_3').val(check_id);
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
			url:'<?php echo $admin_url ?>controller/daerah/kab_control.php',
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
					$('#tbl_rec').load('<?php echo $admin_url ?>model/daerah/kabupaten/v.php');
					$('#ins_rec').trigger('reset');
					$('#up_cancle').trigger('click');
				}
        else if(json.status == 102){
          $('#umsg_3').text(json.msg);
          console.log(json.msg);
        }
        else if(json.status == 110){
          $('#umsg_1').text(json.msg);
          console.log(json.msg);
        }
        else if(json.status == 111){
          $('#umsg_2').text(json.msg);
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
          url: '<?php echo $admin_url ?>controller/daerah/kab_control.php',
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

});

</script>
